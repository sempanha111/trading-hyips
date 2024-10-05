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
            <div class="content clearfix" bis_skin_checked="1">

                <h3>News</h3>

                <div class="news" bis_skin_checked="1">
                    <div class="item" bis_skin_checked="1">
                        <p class="text">No news found.</p>
                    </div>
                </div>

                <div class="pages" bis_skin_checked="1"></div>

            </div>
            <!-- content -->
            <div class="sidebar" id="rsidebar">
                @include('Frontend/layout/rsidebar')
            </div>
        </div>
    </div>
    @endsection
