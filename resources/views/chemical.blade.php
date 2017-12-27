@extends('marketSummary')
@section('table')
                                            @foreach($shares as $share)
                                             <tr>
                                            <td class="min-mobile">{{$share->shareId}}</td>
                                            <td class="min-tablet-l">{{$share->LDCP}}</td>
                                            <td class="min-tablet-p">{{$share->OPEN}}</td>
                                            <td class="min-tablet-l">{{$share->HIGH}}</td>
                                            <td class="min-tablet-l">{{$share->LOW}}</td>
                                            <td class="min-mobile">{{$share->CURRENT}}</td>
                                            <td class="min-mobile-p">{{$share->CHANGE}}</td>
                                            <td class="min-tablet-p">{{$share->VOLUME}}</t>
                                            <td class="never">URL</td>
                                        </tr>
                                            @endforeach
 @endsection