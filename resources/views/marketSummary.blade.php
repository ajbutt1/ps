<!DOCTYPE html>
<html>
<head>
<!-- Head elements-->
@include('partials/_head')
<link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
<script src="js/angular.js"></script>
</head>
<body ng-app="MarketSummary" ng-controller="marketCntrl">
     <script type="text/javascript">
  var app=angular.module('MarketSummary',[])
.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[%=');
    $interpolateProvider.endSymbol('%]');
  });
app.controller('marketCntrl',function($scope,$window,$http){

$scope.abc=function(){

              $http.get('{{url('AutomobileAssembler')}}')
              .success(function(data){
              $scope.obj = angular.fromJson(data);
             $scope.shares = $scope.obj["shares"];
             console.log($scope.shares);
               })
              .error(function(data){
                $scope.data="error in fetching data"
              });

   }

setInterval($scope.abc,6000);


});
</script>
    <div id="wrapper">

        <!-- Side Navigation Bar-->
@include('partials/_sidebar')
 
        <!-- Main Side Body-->
        <div id="page-wrapper" class="gray-bg">

            <!-- Top Navigation Bar-->
@include('partials/_topbar')

            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Market Summary</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#">Config option 1</a>
                                        </li>
                                        <li><a href="#">Config option 2</a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>

                            <div class="ibox-content">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                                        <thead>
                                        <tr>
                                            <th class="min-mobile">Scrip</th>
                                            <th class="min-tablet-l">Ldcp</th>
                                            <th class="min-tablet-p">Open</th>
                                            <th class="min-tablet-l">High</th>
                                            <th class="min-tablet-l">Low</th>
                                            <th class="min-mobile">Cur</th>
                                            <th class="min-mobile-p">Change</th>
                                            <th class="min-tablet-p">Volume</th>
                                            <th class="never">URL</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @yield('table')
                                             </tbody>
                                        <tfoot>
                                        <tr>
                                            <th class="min-mobile">Scrip</th>
                                            <th class="min-tablet-l">Ldcp</th>
                                            <th class="min-tablet-p">Open</th>
                                            <th class="min-tablet-l">High</th>
                                            <th class="min-tablet-l">Low</th>
                                            <th class="min-mobile">Cur</th>
                                            <th class="min-mobile-p">Change</th>
                                            <th class="min-tablet-p">Volume</th>
                                            <th class="never">URL</th>
                                        
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        
            <!-- FOOTER -->
@include('partials/_footer')

        </div>
    </div>

<!-- Default Scripts for bottom-->

@include('partials/_bodyscripts')
<script src="js/plugins/dataTables/datatables.min.js"></script>

<script src="js/plugins/dataTables/datatables.responsive.min.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


</body>    
</html>