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
                <div class="directory" bis_skin_checked="1">

                <h3>Links Directory</h3>


                <div class="clearall" bis_skin_checked="1"></div>

                <div class="list" bis_skin_checked="1">
                 <div class="header clearfix" bis_skin_checked="1">
                 <h1><a href="https://trading-hyips.com/directory/" bis_skin_checked="1">Main</a> </h1>
                 <a href="https://trading-hyips.com/directory/action/add_form/cat/" class="staff" bis_skin_checked="1">Add Link</a>
                 </div>
                </div>
                <br>
                <div class="link clearfix" bis_skin_checked="1">
                   <div class="info" bis_skin_checked="1">
                   <a href="https://trading-hyips.com/directory/out/7/" bis_skin_checked="1">Hyipmonitors24</a>
                   (Added: Sep 11th, 2018 - In/Out: 0/0)<br>
                   There are many and varied HYIP and HYIP monitors, some are very trusted and some are just a fake. Check HYIP monitors in one place<br>
                   <small>https://www.hyipmonitors24.net/</small>
                   </div>
                   <div class="button" bis_skin_checked="1"><a href="https://trading-hyips.com/directory/out/7/" bis_skin_checked="1"><img src="https://i.imgur.com/VJfnxuh.png" width="120" height="60"></a></div>
                </div>
                <div class="link clearfix" bis_skin_checked="1">
                   <div class="info" bis_skin_checked="1">
                   <a href="https://trading-hyips.com/directory/out/8/" bis_skin_checked="1">PHYIP</a>
                   (Added: Feb 28th, 2019 - In/Out: 0/0)<br>
                   Powerful High Yield Investment Programs.<br>
                   <small>https://phyip.com/</small>
                   </div>
                   <div class="button" bis_skin_checked="1"><a href="https://trading-hyips.com/directory/out/8/" bis_skin_checked="1"><img src="https://phyip.com/images/banners/125x125.gif" width="120" height="60"></a></div>
                </div>
                <div class="link clearfix" bis_skin_checked="1">
                   <div class="info" bis_skin_checked="1">
                   <a href="https://trading-hyips.com/directory/out/10/" bis_skin_checked="1">HYIP-CHECK.RU - monitoring HYIP projects</a>
                   (Added: Apr 8th, 2019 - In/Out: 0/0)<br>
                   Our main activity is to find projects for earnings and check them for solvency, and further their monitoring.<br>
                   <small>https://hyip-check.ru/</small>
                   </div>
                   <div class="button" bis_skin_checked="1"><a href="https://trading-hyips.com/directory/out/10/" bis_skin_checked="1"><img src="https://hyip-check.ru/img/120x80.gif" width="120" height="60"></a></div>
                </div>
                <div class="link clearfix" bis_skin_checked="1">
                   <div class="info" bis_skin_checked="1">
                   <a href="https://trading-hyips.com/directory/out/11/" bis_skin_checked="1">Hyip-Money.com - HYIP monitoring</a>
                   (Added: Jul 11th, 2019 - In/Out: 0/0)<br>
                   Hyip Monitoring Hyip-Money. Investment project monitoring<br>
                   <small>https://hyip-money.com/</small>
                   </div>
                   <div class="button" bis_skin_checked="1"><a href="https://trading-hyips.com/directory/out/11/" bis_skin_checked="1"><img src="https://hyip-money.com/hyip-money-hajp-monitoring/" width="120" height="60"></a></div>
                </div>
                <div class="link clearfix" bis_skin_checked="1">
                   <div class="info" bis_skin_checked="1">
                   <a href="https://trading-hyips.com/directory/out/12/" bis_skin_checked="1">TopGoldForum</a>
                   (Added: Apr 11th, 2023 - In/Out: 0/0)<br>
                   GoldForum has been, since 2008, one of the prime online destinations for reviewing and discussing cryptocurrencies, affiliate marketing, and online money-making opportunities.<br>
                   <small>https://gold.forum/?&amp;_rid=66170</small>
                   </div>
                   <div class="button" bis_skin_checked="1"><a href="https://trading-hyips.com/directory/out/12/" bis_skin_checked="1"><img src="https://i.imgur.com/MPR4epv.jpg" width="120" height="60"></a></div>
                </div>
                <div class="link clearfix" bis_skin_checked="1">
                   <div class="info" bis_skin_checked="1">
                   <a href="https://trading-hyips.com/directory/out/13/" bis_skin_checked="1">Investmentmonitor.biz</a>
                   (Added: Sep 2nd, 2023 - In/Out: 0/0)<br>
                   Invest your time wisely the best sites to earn free money and investment site monitoring<br>
                   <small>https://investmentmonitor.biz</small>
                   </div>
                   <div class="button" bis_skin_checked="1"><a href="https://trading-hyips.com/directory/out/13/" bis_skin_checked="1"><img src="https://i.imgur.com/o4ejkOA.png" width="120" height="60"></a></div>
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
