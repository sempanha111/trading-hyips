@extends('Frontend/layout.app')

@section('content')
@include('Frontend/layout/header')

<div class="global_wrap">
    <div class="clearall"></div>
    <div class="middle_wrap clearfix">
        <div class="wrap">
            <div class="sidebar" id="lsidebar">
                @include('Frontend/layout/lsidebar')
            </div>
            <!-- content -->
            <div class="content clearfix">
                
                @include('Frontend/layout/program', ['program' => $program, 'detail' => $detail])

                <div class="clearall"></div>

                <div class="details" bis_skin_checked="1">
                    <a name="vote"></a>
                    <h3>Get Monitoring Image Code</h3>

                    <div class="get_code" bis_skin_checked="1">
                        <table class="form nosize">
                            <tbody>
                                <tr>
                                    <th colspan="4">Use this code to place the button on your site</th>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a href="{{ route('detail', $detail->program_id)}}" bis_skin_checked="1"><img
                                                src="{{ asset('image/lid/'. $program->codeimage->first()->image1 )}}" border="0"></a>
                                    </td>
                                    <td colspan="2">
                                        <textarea cols="40"
                                            rows="4">{{  $program->codeimage->first()->code1 }}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="4">Use this code to place the floating button</th>
                                </tr>
                                <tr>
                                    <td>Top - Left</td>
                                    <td>Top - Right</td>
                                    <td>Bottom - Left</td>
                                    <td>Bottom - Right</td>
                                </tr>
                                <tr>
                                    <td><textarea rows="5" style="width: 155px; height: 148px;">&lt;script language="JavaScript" src="https://trading-hyips.com/getstatus.js" type="text/javascript"&gt;&lt;/script&gt;
                        &lt;script type="text/javascript"&gt;showdetails("1424","tl","top","left");&lt;/script&gt;
                        </textarea></td>
                                    <td><textarea rows="5" style="width: 320px; height: 210px;">&lt;script language="JavaScript" src="https://trading-hyips.com/getstatus.js" type="text/javascript"&gt;&lt;/script&gt;
                        &lt;script type="text/javascript"&gt;showdetails("1424","tr","top","right");&lt;/script&gt;
                        </textarea></td>
                                    <td><textarea rows="5">&lt;script language="JavaScript" src="https://trading-hyips.com/getstatus.js" type="text/javascript"&gt;&lt;/script&gt;
                        &lt;script type="text/javascript"&gt;showdetails("1424","bl","bottom","left");&lt;/script&gt;
                        </textarea></td>
                                    <td><textarea rows="5">&lt;script language="JavaScript" src="https://trading-hyips.com/getstatus.js" type="text/javascript"&gt;&lt;/script&gt;
                        &lt;script type="text/javascript"&gt;showdetails("1424","br","bottom","right");&lt;/script&gt;
                        </textarea></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>



                </div>



            </div>
            <!-- content -->
            <div class="sidebar" id="rsidebar">
                @include('Frontend/layout/rsidebar')
            </div>
        </div>
    </div>
    @endsection
