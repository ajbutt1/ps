<!DOCTYPE html>
<html>
<head>
<!-- Head elements-->
    <?php echo $__env->make('partials/_head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
    <style>
        #drop,#drop2{
            padding-left:35px;
            left:0;
        }
        .slist-style{
            border-bottom:1px solid #1ab394;
            color:#676a6c;
            width:100%;
            height:30px;
        /* box-sizing:border-box;
            margin-top:1px;
            margin-bottom:1px;*/
            border-radius:4px;
            background-color:white;
            padding-left:2%;
            padding-top:0.5%;
        }
        .directing{
            color:#676a6c;
        }
    </style>

  <!-- FooTable -->
  <link href="css/plugins/footable/footable.core.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">

        <!-- Side Navigation Bar-->
        <?php echo $__env->make('partials/_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
        <!-- Main Side Body-->
        <div id="page-wrapper" class="gray-bg">
            
            <!-- Top Navigation Bar-->
            <?php echo $__env->make('partials/_topbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h3>Portfolio</h3>

                            <div class="input-group" style="position:relative">
                                <input placeholder="Add New Symbol. " class="input input-sm form-control" type="text" >
                                <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-plus"></i> Add New Symbol </button>
                                </span>
                            </div>

                            <!--adding suggestion list-->
                            
                            <ul id="drop" style="display:none;position:absolute;list-style:none"></ul>
                        
                            <table class="footable table table-stripped toggle-arrow-tiny" data-show-toggle="false">
                                <thead>
                                    <tr>
                                        <th>SCRIP</th>
                                        <th data-hide="tablet,phone">LDCP</th>
                                        <th data-hide="tablet,phone">OPEN</th>
                                        <th data-hide="tablet,phone">HIGH</th>
                                        <th data-hide="tablet,phone">LOW</th>
                                        <th>CURRENT</th>
                                        <th>CHANGE</th>
                                        <th data-hide="tablet,phone">VOLUME</th>
                                        <th data-hide="all">URL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
                </div>
            </div>
        
            <!-- FOOTER -->
    <?php echo $__env->make('partials/_footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>
    </div>

    <!-- Default Scripts for bottom-->
    <?php echo $__env->make('partials/_bodyscripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Page-Level Scripts -->
    <script defer>
                                
        $(document).ready(function() 
        {   
            //data loaded
        
            var filedata;      
            var counter=0;
            //json file loading 
        
            $.ajax({ url:"summaryTable.json",cache:false,success:function(result)
            {
                filedata=result;
            }});

            $('.footable').footable();
        
        
            //suggestion for adding_stock_in_profile search 
        
            $('.input').keyup(function()
                {

               /*      console.log(e.which);
                   if(e.which == 38)   //up key
                    {
                        $('#drop li:eq('+counter+')').css("background-color","#FFFCCC");
                        console.log(counter);
                        counter=counter+1;
                    }
                    else if(e.which == 40) //down key
                    {
                        $('#drop li:eq('+counter+')').css("background-color","#FFFCCC");
                        console.log(counter);
                        counter=counter-1;
                    }

                */

                    $("#drop").html("");
                    var data=filedata.data;
                    var inputval=$('.input').val();
                    for(var i=0;i<data.length;i++)
                    {
                        var str=data[i][0];
                        var chk=new RegExp("^"+inputval+".*$","i");
                        if( inputval === "" )
                        { 
                            $("#drop").css("display","none");
                            break;
                        }
                        else if(str.search(chk)==0)
                        {
                            $("#drop").css("display","block");
                            $("#drop").append("<li id='choosing' class='slist-style' onclick='selected(this)'>"+str+"</li>");
                        }
                    }                
                    
                });

            //Add button funcrtionality
            
            $(".btn").click(function(){
                var inputval=$('.input').val();
                var data=filedata.data;
                for(var i=0;i<data.length;i++)
                {
                    var str=data[i][0];
                    if( str === inputval )
                    {
                        $("tbody").append("<tr><td>"+data[i][0]+"</td><td>"+data[i][1]+"</td><td>"+data[i][2]+"</td><td>"+data[i][3]+"</td><td>"+data[i][4]+"</td><td>"+data[i][5]+"</td><td>"+data[i][6]+"</td><td>"+data[i][7]+"</td><td>"+data[i][8]+"</td><td><button id='delete' onclick='del(this)'>Delete</button></td></tr>");
                    }
                }
            });
          
            
            //onfocus suggesting
            
            $(".input").focus(function()
                {
                    $("#drop").html("");
                    var data=filedata.data;
                    var inputval=$('.input').val();
                    for(var i=0;i<data.length;i++)
                    {
                        var str=data[i][0];
                        var chk=new RegExp("^"+inputval+".*$","i");
                        if( inputval === "" )
                        { 
                            $("#drop").css("display","none");
                            break;
                        }
                        else if(str.search(chk)==0)
                        {
                            $("#drop").css("display","block");
                            $("#drop").append("<li id='choosing' class='slist-style' onclick='selected(this)'>"+str+"</li>");
                        }
                    }                
                    
                });

            
            //style suggestion same as search bar

            $("#drop").width($(".input").innerWidth());

            $(window).resize(function(){        
                $("#drop").width($(".input").innerWidth());
                $("#drop2").width($("#top-search").innerWidth());
            });

            

        });

        //selection from add_button suggestions
        
        function selected(ele){
                var selection=$(ele).text();
                $('.input').val(selection);
                $("#drop").html("");
            }
        function del(e){
                $(e).parents('tr').remove();
            }


            //focus out removing suggestion

     //   function foo(){
    //        $("#drop").mouseover().not(function(){
     //       $('#drop').html("");
     //     console.log("yoyo");
      //      }
     //   }
    </script>
    <script src="js/topsearchbar.js" defer></script>

</body>    
</html>