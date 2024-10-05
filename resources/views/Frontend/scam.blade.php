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
                    <h3>Report Scam</h3>

                    @include('Backend/layout/massage_bootstrap')

                    <form method="post" name="vote" onsubmit="return checkVote()" action="{{ route('add_vote_send', $id)}}">
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
