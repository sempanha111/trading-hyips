@php
$generalService = app()->make(App\Services\GeneralService::class);
$lastest_lists = $generalService->Get_New_Listing();
$lastest_votes = $generalService->Get_Last_Vote();
$lastDate = null;
$lastest_payouts = $generalService->Get_Last_Payout();
$top_profits = $generalService->Get_Top_Profit();
$programs_day = $generalService->Get_Day();
$lasestScams = $generalService->Get_Last_Scam();
// dd($lastest_vote);

@endphp




<h2>Members</h2>
{{-- <div class="login">

    <script language=javascript>
        function checklogin() {
                            if (document.loginform.username.value=='') {
                                alert("Please enter your username!");
                                document.loginform.username.focus();
                                return false;
                            }
                            if (document.loginform.password.value=='') {
                                alert("Please enter your password!");
                                document.loginform.password.focus();
                                return false;
                            }
                            return true;
                            }
    </script>

    <form method="post" name="loginform" onsubmit="return checklogin()">=
        <table class="form">
            <tr>
                <th>Username:</th>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <th>Password:</th>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <th><input type=checkbox name="remember" value=1 style="width:15px"> </th>
                <td>Remeber me</th>
            </tr>
            <tr>
                <th><img src="../turing/PHPSESSID/h2sng2trpf0tu1aahug9loeld5/r/63481/index.html"></th>
                <td><input type=text name="turing" maxlength=6 size=6></td>
            </tr>
            <tr>
                <th>&nbsp;</th>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
    <p class="links"><a href="">Sign Up</a> | <a href="../forgot_password/index.html">Forgot
            Password?</a></p>

</div> --}}
<h2>Sticky Programs</h2>
<div class="sticky_listings">
    <ul class="stats">
    </ul>
</div>

{{-- <h2>Subscription</h2>
<div class="subscribe">
    <form method="post" onsubmit="return checkSubscribe()" name="subscribe" action="#">
        <input type="hidden" name="a" value="maillist">
        <input type="hidden" name="display" value="">
        <table class="form">
            <tr>
                <th>E-mail:</th>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <th><input type="radio" name="action" value="subscribe" checked></th>
                <td>Subscribe</td>
            </tr>
            <tr>
                <th><input type="radio" name="action" value="unsubscribe"></th>
                <td>Unsubscribe</td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="Subscribe"></td>
            </tr>
        </table>
    </form>

</div> --}}

<h2>Our Logo</h2>
<div class="ourlogo">
    <img src="{{ asset('assets/images/logo.png')}}" width=120 height=60 alt="Our Logo">
    <p class="links"><a href="">Put this logo on your site!<br />
            Click here for the HTML code</a></p>
</div>

<h2>New Listings</h2>
<div class="new_listings">
    <ul class="stats">
        @foreach($lastest_lists as $key => $lastest_list)


        <li>
            <span class="date">{{\Carbon\Carbon::parse($lastest_list->updated_at)->format('M jS, Y')}}</span>
        </li>
        <li>
            <a href="{{ route('detail', $lastest_list->id)}}" target=_blank class="name">{{ $lastest_list->name }}</a>
            <p class="status {{ $lastest_list->status === 'Paying' ? 'status1' : 'status4' }} ">
                {{ $lastest_list->status }}
            </p>
            <p class="percents">{{ Str::limit($lastest_list->details->first()->plans_description, 50) }}</p>

        </li>


        @endforeach



    </ul>
</div>


<h2>News</h2>
<div class="news">
    <ul class="stats">
    </ul>
    <p class="links"><a href="">All news</a></p>
</div>



<h2>Payment Systems</h2>
<div class="paymentsystems">
    <ul>
        <li class="clearfix">
            <a class="logo" href="http://www.perfectmoney.com/" target=_blank><img
                    src="{{ asset('assets/images/PerfectMoney.gif')}}" border=0 alt="PerfectMoney"
                    title="PerfectMoney"></a>
            <a class="staff" href="{{ route('pfilter', 'PerfectMoney')}}">List
                <strong>PerfectMoney</strong> programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.payeer.com/" target=_blank><img
                    src="{{ asset('assets/images/Payeer.gif')}}" border=0 alt="Payeer" title="Payeer"></a>
            <a class="staff" href="{{ route('pfilter', 'Payeer')}}">List <strong>Payeer</strong>
                programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.epaycore.com/" target=_blank><img
                    src="{{ asset('assets/images/Epaycore.gif')}}" border=0 alt="Epaycore" title="Epaycore"></a>
            <a class="staff" href="{{ route('pfilter', 'Epaycore')}}">List <strong>Epaycore</strong>
                programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.advcash.com/" target=_blank><img
                    src="{{ asset('assets/images/Advcash.gif')}}" border=0 alt="Advcash" title="Advcash"></a>
            <a class="staff" href="{{ route('pfilter', 'Advcash')}}">List <strong>Advcash</strong>
                programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.bitcoin.com/" target=_blank><img
                    src="{{ asset('assets/images/Bitcoin.gif')}}" border=0 alt="Bitcoin" title="Bitcoin"></a>
            <a class="staff" href="{{ route('pfilter', 'Bitcoin')}}">List <strong>Bitcoin</strong>
                programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.okpay.com/" target=_blank><img src="{{ asset('assets/images/OkPay.gif')}}"
                    border=0 alt="OkPay" title="OkPay"></a>
            <a class="staff" href="{{ route('pfilter', 'OkPay')}}">List <strong>OkPay</strong>
                programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.mastercard.com/" target=_blank><img
                    src="{{ asset('assets/images/MasterCard.gif')}}" border=0 alt="MasterCard" title="MasterCard"></a>
            <a class="staff" href="{{ route('pfilter', 'MasterCard')}}">List <strong>MasterCard</strong>
                programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.solidtrustpay.com/" target=_blank><img
                    src="{{ asset('assets/images/SolidTrustPay.gif')}}" border=0 alt="SolidTrustPay"
                    title="SolidTrustPay"></a>
            <a class="staff" href="{{ route('pfilter', 'SolidTrustPay')}}">List
                <strong>SolidTrustPay</strong> programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.webmoney.com/" target=_blank><img
                    src="{{ asset('assets/images/WebMoney.gif')}}" border=0 alt="WebMoney" title="WebMoney"></a>
            <a class="staff" href="{{ route('pfilter', 'WebMoney')}}">List <strong>WebMoney</strong>
                programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.paypal.com/" target=_blank><img
                    src="{{ asset('assets/images/Paypal.gif')}}" border=0 alt="Paypal" title="Paypal"></a>
            <a class="staff" href="{{ route('pfilter', 'Paypal')}}">List <strong>Paypal</strong>
                programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.yandexmoney.com/" target=_blank><img
                    src="{{ asset('assets/images/YandexMoney.gif')}}" border=0 alt="YandexMoney"
                    title="YandexMoney"></a>
            <a class="staff" href="{{ route('pfilter', 'YandexMoney')}}">List
                <strong>YandexMoney</strong> programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.nixmoney.com/" target=_blank><img
                    src="{{ asset('assets/images/NIXmoney.gif')}}" border=0 alt="NIXmoney" title="NIXmoney"></a>
            <a class="staff" href="{{ route('pfilter', 'NIXmoney')}}">List <strong>NIXmoney</strong>
                programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.bitcoin cash.com/" target=_blank><img
                    src="{{ asset('assets/images/Bitcoin%20Cash.gif')}}" border=0 alt="Bitcoin Cash"
                    title="Bitcoin Cash"></a>
            <a class="staff" href="{{ route('pfilter', 'Bitcoin Cash')}}">List <strong>Bitcoin
                    Cash</strong> programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.litecoin.com/" target=_blank><img
                    src="{{ asset('assets/images/LiteCoin.gif')}}" border=0 alt="LiteCoin" title="LiteCoin"></a>
            <a class="staff" href="{{ route('pfilter', 'LiteCoin')}}">List <strong>LiteCoin</strong>
                programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.ethereum.com/" target=_blank><img
                    src="{{ asset('assets/images/Ethereum.gif')}}" border=0 alt="Ethereum" title="Ethereum"></a>
            <a class="staff" href="{{ route('pfilter', 'Ethereum')}}">List <strong>Ethereum</strong>
                programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.dash.com/" target=_blank><img src="{{ asset('assets/images/Dash.gif')}}"
                    border=0 alt="Dash" title="Dash"></a>
            <a class="staff" href="{{ route('pfilter', 'Dash')}}">List <strong>Dash</strong> programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.dogecoin.com/" target=_blank><img
                    src="{{ asset('assets/images/Dogecoin.gif')}}" border=0 alt="Dogecoin" title="Dogecoin"></a>
            <a class="staff" href="{{ route('pfilter', 'Dogecoin')}}">List <strong>Dogecoin</strong>
                programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.tether.com/" target=_blank><img
                    src="{{ asset('assets/images/Tether.gif')}}" border=0 alt="Tether" title="Tether"></a>
            <a class="staff" href="{{ route('pfilter', 'USDT_BEP20')}}">List <strong>USDT_BEP20</strong>
                programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.tether.com/" target=_blank><img
                    src="{{ asset('assets/images/Tether.gif')}}" border=0 alt="Tether" title="Tether"></a>
            <a class="staff" href="{{ route('pfilter', 'USDT_TRC20')}}">List <strong>USDT_TRC20</strong>
                programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.tron.com/" target=_blank><img src="{{ asset('assets/images/Tron.gif')}}"
                    border=0 alt="Tron" title="Tron"></a>
            <a class="staff" href="{{ route('pfilter', 'Tron')}}">List <strong>Tron</strong> programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.ripple.com/" target=_blank><img
                    src="{{ asset('assets/images/Ripple.gif')}}" border=0 alt="Ripple" title="Ripple"></a>
            <a class="staff" href="{{ route('pfilter', 'Ripple')}}">List <strong>Ripple</strong>
                programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.bnb.com/" target=_blank><img src="{{ asset('assets/images/BNB.gif')}}"
                    border=0 alt="BNB" title="BNB"></a>
            <a class="staff" href="{{ route('pfilter', 'BNB')}}">List <strong>BNB</strong> programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.stellar.com/" target=_blank><img
                    src="{{ asset('assets/images/Stellar.gif')}}" border=0 alt="Stellar" title="Stellar"></a>
            <a class="staff" href="{{ route('pfilter', 'Stellar')}}">List <strong>Stellar</strong>
                programs</a>
        </li>
        <li class="clearfix">
            <a class="logo" href="http://www.bertycash.com/" target=_blank><img
                    src="{{ asset('assets/images/bertycash.gif')}}" border=0 alt="bertycash" title="bertycash"></a>
            <a class="staff" href="{{ route('pfilter', 'bertycash')}}">List <strong>bertycash</strong>
                programs</a>
        </li>
    </ul>
</div>


<h2>Last Votes</h2>
<div class="last_votes">
    <ul class="stats">

        @foreach($lastest_votes as $key => $lastest_vote)

        @php
        // Get the date of the current vote (without time)
        $currentDate = \Carbon\Carbon::parse($lastest_vote->ratings->first()->created_at)->format('M jS, Y');
        @endphp

        {{-- If the current date is different from the last date, show the date --}}
        @if ($currentDate != $lastDate)
        {{-- Update the lastDate to the currentDate --}}
        @php
        $lastDate = $currentDate;
        @endphp
        <li>
            <span class="date">{{ $currentDate }}</span>
        </li>
        @endif

        {{-- Display the vote information --}}
        <li class="clearfix">
            <img src="{{ asset('assets/images/r' . $lastest_vote->ratings->first()->rate . '.gif') }}" alt="" title="">
            <a href="{{ route('detail', $lastest_vote->id) }}" target=_blank class="name">{{ $lastest_vote->name }}</a>
        </li>

        @endforeach
    </ul>
</div>


<h2>Last Payouts</h2>
<div class="last_payouts">
    <ul class="stats">

        @foreach($lastest_payouts as $payout)
        @if($payout['type'] == 'date')
        <li>
            <span class="date">{{ $payout['value'] }}</span>
        </li>
        @elseif($payout['type'] == 'payout')
        <li class="clearfix">
            <span class="amount">${{ $payout['amount'] }}</span>
            <a href="{{ $payout['link'] }}" target=_blank class="name">{{ $payout['name'] }}</a>
        </li>
        @endif
        @endforeach


    </ul>
</div>



<h2>Top Profitable</h2>
<div class="top_profitable">
    <ul class="stats">
        @foreach($top_profits as $key => $top_profit)


        <li class="clearfix">
            <a href="{{ route('detail', $top_profit->program->id) }}" target=_blank
                class="name">{{$top_profit->program->name}}</a>
            <span class="ratio">{{$top_profit->payout_ratio}}%</span>
        </li>

        @endforeach
    </ul>
</div>

<h2>Top Monitored</h2>
<div class="top_monitored">
    <ul class="stats">

        @foreach($programs_day as $program)
        @php
            $createdAt = \Carbon\Carbon::parse($program->created_at);
            $lifetime = $createdAt->diffForHumans();
        @endphp

        <li class="clearfix">
            <a href="{{ route('detail', $program->id) }}" target="_blank" class="name">{{ $program->name }}</a>
            <span class="monitored">{{ $lifetime }}</span>
        </li>
        @endforeach

    </ul>
</div>



<h2>Last Scams</h2>
<div class="last_scams">
    <ul class="stats">
        @if($lasestScams->isNotEmpty())


        @foreach($lasestScams as $key => $lasestScam)


        <li class="clearfix">
            <a href="{{ route('detail', $lasestScam->id) }}" target=_blank class="name">{{ $lasestScam->name }}</a>
        </li>

        @endforeach

        @else
            <p>No Scam programs found.</p>
        @endif

    </ul>
</div>
