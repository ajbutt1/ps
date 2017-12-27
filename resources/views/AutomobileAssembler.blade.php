@extends('marketSummary')
@section('table')
                                        <tr ng-repeat="share in shares track by $index">
                                            <td class="min-mobile">[%=share.shareId%]</td>
                                            <td class="min-tablet-l">[%= share.LDCP %]</td>
                                            <td class="min-tablet-p">[%= share.OPEN %]</td>
                                            <td class="min-tablet-l">[%= share.HIGH %]</td>
                                            <td class="min-tablet-l">[%= share.LOW %]</td>
                                            <td class="min-mobile">[%= share.VOLUME %]</td>
                                            <td class="min-mobile-p">[%= share.CURRENT %]</td>
                                            <td class="min-tablet-p">[%= share.CHANGE %]</t>
                                            <td class="never">URL</td>
                                        </tr>


 @endsection