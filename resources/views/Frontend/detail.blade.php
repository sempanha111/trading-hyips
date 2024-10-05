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

                    <div class="delim" bis_skin_checked="1"></div>

                    @if($program->ratings->isNotEmpty())
                    @php
                    $totalRatings = $program->ratings->count();
                    $maxRatings = $program->ratings->where('rate', 3)->count();
                    $twoRatings = $program->ratings->where('rate', 2)->count();
                    $oneRatings = $program->ratings->where('rate', 1)->count();
                    $zeroRatings = $program->ratings->where('rate', 0)->count();

                    // Calculate percentages for each rating
                    $percentageThree = round($totalRatings > 0 ? ($maxRatings / $totalRatings) * 100 : 5);
                    $percentageTwo = round($totalRatings > 0 ? ($twoRatings / $totalRatings) * 100 : 5);
                    $percentageOne = round($totalRatings > 0 ? ($oneRatings / $totalRatings) * 100 : 5);
                    $percentageZero = round($totalRatings > 0 ? ($zeroRatings / $totalRatings) * 100 : 5);
                    @endphp

                    @else
                    @php
                    $maxRatings = 0;
                    $twoRatings = 0;
                    $oneRatings = 0;
                    $zeroRatings = 0;
                    $percentageThree = 0;
                    $percentageTwo = 0;
                    $percentageOne = 0;
                    $percentageZero = 0;
                    @endphp
                    @endif

                    <div class="votes_summary" bis_skin_checked="1">
                        <div class="summary mood3 clearfix" bis_skin_checked="1">
                            <div class="mood" bis_skin_checked="1">Very Good</div>
                            <div class="rate" bis_skin_checked="1">
                                <div style="width: {{$percentageThree > 1 ? $percentageThree : 1}}%" title="{{ $maxRatings }} votes ({{$percentageThree > 1 ? $percentageThree : 1}}%)" bis_skin_checked="1"></div>
                            </div>
                        </div>
                        <div class="summary mood2 clearfix" bis_skin_checked="1">
                            <div class="mood" bis_skin_checked="1">Good</div>
                            <div class="rate" bis_skin_checked="1">
                                <div style="width:{{$percentageTwo > 1 ? $percentageTwo : 1}}%" title="{{ $twoRatings }} votes ({{$percentageTwo > 1 ? $percentageTwo : 1}}%)" bis_skin_checked="1"></div>
                            </div>
                        </div>
                        <div class="summary mood1 clearfix" bis_skin_checked="1">
                            <div class="mood" bis_skin_checked="1">Bad</div>
                            <div class="rate" bis_skin_checked="1">
                                <div style="width:{{$percentageOne > 1 ? $percentageOne : 1}}%" title="{{ $oneRatings }} votes ({{$percentageOne > 1 ? $percentageOne : 1}}%)" bis_skin_checked="1"></div>
                            </div>
                        </div>
                        <div class="summary mood0 clearfix" bis_skin_checked="1">
                            <div class="mood" bis_skin_checked="1">Very Bad</div>
                            <div class="rate" bis_skin_checked="1">
                                <div style="width:{{$percentageZero > 1 ? $percentageZero : 1}}%" title="{{ $zeroRatings  }} votes ({{$percentageZero > 1 ? $percentageZero : 1}}%)" bis_skin_checked="1"></div>
                            </div>
                        </div>
                    </div>

                    <table class="votes list">
                        <tbody>
                            <tr>
                                <th style="text-align: center;">Rating</th>
                                <th>Info</th>
                                <th>Comment</th>
                            </tr>


                            @foreach($program->ratings as $key => $value)

                            <tr class="row1 ">
                                <td style="text-align: center;">
                                    @if($value->rate == 3)
                                    <img src="{{ asset('assets/images/r3.gif')}}" alt="Very Good" title="Very Good">
                                    @elseif($value->rate == 2)
                                        <img src="{{ asset('assets/images/r2.gif')}}" alt="Good" title="Good">
                                    @elseif($value->rate == 1)
                                        <img src="{{ asset('assets/images/r1.gif')}}" alt="Average" title="Average">
                                    @else
                                        <img src="{{ asset('assets/images/r0.gif')}}" alt="Poor" title="Poor">
                                    @endif
                                </td>
                                <td>
                                    {{$value->email}}<br>
                                    {{ \Carbon\Carbon::parse($value->created_at)->format('M jS, Y h:i:s A') }}
                                </td>
                                <td>{{$value->comment}}</td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                    <div class="pages" bis_skin_checked="1"><b>1</b></div>
                    <a name="vote"></a>
                    <h3>Add Vote</h3>


                    @include('Backend/layout/massage_bootstrap')

                    <form method="post" name="vote" onsubmit="return checkVote()"
                        action="{{ route('add_vote_send', $id)}}">
                        @csrf
                        <table class="form">
                            <tbody>
                                <tr>
                                    <th>Mood:</th>
                                    <td>
                                        <input type="radio" name="vote" value="3"> <img
                                            src="{{ asset('assets/images/r3.gif')}}" alt="Very Good" title="Very Good">
                                        Very Good<br>
                                        <input type="radio" name="vote" value="2"> <img
                                            src="{{ asset('assets/images/r2.gif')}}" alt="Good" title="Good"> Good<br>
                                        <input type="radio" name="vote" value="1"> <img
                                            src="{{ asset('assets/images/r1.gif')}}" alt="Bad" title="Bad"> Bad<br>
                                        <input type="radio" name="vote" checked="" value="0"> <img
                                            src="{{ asset('assets/images/r0.gif')}}" alt="Very Bad" title="Very Bad">
                                        Very Bad<br>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Comments:</th>
                                    <td>
                                        <input type="text" name="comment" value="" maxlength="255"><br>
                                        You can write short comment (max. 255 characters)
                                    </td>
                                </tr>
                                <tr>
                                    <th>E-mail:</th>
                                    <td>
                                        <input type="text" name="email" value="">
                                        we will send you your vote confirmation code
                                    </td>
                                </tr>

                                <tr>
                                    <th></th>
                                    <td><input type="submit" value="Vote" class="sbmt"></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>



            </div>
            <!-- content -->
            <div class="sidebar" id="rsidebar">
                @include('Frontend/layout/rsidebar')
            </div>
        </div>
    </div>
    @endsection
