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


                @if($superVipPrograms->isNotEmpty())
                <div class="list Super VIP">
                    <div class="header clearfix">
                        <h1>Super VIP</h1>
                        <a href="" class="staff">List your program in the Super VIP
                            listing</a>
                    </div>



                    @foreach($superVipPrograms as $program)

                    <div class="program Super VIP ">
                        <div class="title clearfix">
                            <div class="title1">&nbsp;</div>
                            <div class="title2"><a class="name" href="{{ $program->details->first()->link }}"
                                    target=_blank>{{$program->name}}</a></div>

                            <div class="status {{ $program->status === 'Paying' ? 'status1' : 'status4'}}">
                                {{$program->status}}</div>
                        </div>

                        @foreach($program->details as $detail)
                        <div class="main clearfix">
                            <div class="col1 clearfix">
                                <a href="{{ $detail->link }}" target=_blank><img
                                        src="{{ asset('assets_backend/img/program/'.$detail->image) }}"
                                        alt="Bitcashdepositscreenshot"></a>
                            </div>
                            <div class="col23">
                                <div class="col2">
                                    <div class="investment">Our Invetment: <b>${{$detail->our_investment}}</b></div>
                                    <table class="pratios">
                                        <tr>
                                            <td class="partial">
                                                <div style="width: {{$detail->payout_ratio}}%"></div>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="ratio">Payout Ratio: <b>{{$detail->payout_ratio}}%</b> </div>
                                    <div class="lastpayout">Last Payout: <b>{{ $detail->program->status === 'Paying' ?
                                            \Carbon\Carbon::now()->format('M jS, Y') :
                                            \Carbon\Carbon::parse($detail->program->updated_at)->format('M jS, Y')}}</b>
                                    </div>
                                    @php

                                    $createdAt = \Carbon\Carbon::parse($detail->created_at);
                                    $lifetime = $createdAt->diffForHumans();

                                    @endphp
                                    <div class="lifetime">Lifetime: <b>{{ $lifetime }}</b></div>
                                    <div class="max_rcb"><a href="">Ref. Back: {{$detail->ref_back}}%</a>
                                    </div>

                                </div>
                                <div class="col3">
                                    <div class="support">Support:
                                    </div>
                                    <div class="forums">Forum:
                                    </div>
                                    <div class="amountdiv">Min/Max: <b class="min">{{$detail->min}}</b> / <b
                                            class="max">{{$detail->max}}</b>
                                    </div>
                                    <div class="referral">Referral: <b>{{$detail->referral}}% - 15% - 5%</b></div>
                                    <div class="withdrawal">Withdrawal: <b>
                                            Instant
                                        </b></div>
                                </div>
                            </div>
                            <div class="col4 clearfix">
                                <div class="ourrating">
                                    <div class="rating">Our Rating:</div>
                                    <div class="emptystars">
                                        <div class="fullstars" style="width: {{$detail->our_rate}}%"
                                            bis_skin_checked="1"></div>
                                    </div>
                                </div>
                                <div class="usrrating">
                                    <div class="rating">Users Rating:</div>
                                    @if($program->ratings->isNotEmpty())
                                    @php
                                    $totalRatings = $program->ratings->count();
                                    $maxRatings = $program->ratings->where('rate', 3)->count();
                                    $twoRatings = $program->ratings->where('rate', 2)->count();
                                    $oneRatings = $program->ratings->where('rate', 1)->count();
                                    $zeroRatings = $program->ratings->where('rate', 0)->count();

                                    // Calculate percentage of ratings that are 3
                                    $percentage = $totalRatings > 0 ? ($maxRatings / $totalRatings) * 100 : 0;
                                    @endphp

                                    @else
                                    @php
                                    $maxRatings = 0;
                                    $twoRatings = 0;
                                    $oneRatings = 0;
                                    $zeroRatings = 0;
                                    $percentage = 0;
                                    @endphp
                                    @endif

                                    <div class="emptystars">

                                        <div class="fullstars" style="width: {{ $percentage }}%"></div>
                                    </div>
                                </div>
                                <div class="votes_summary">
                                    <div class="summary mood3">
                                        <div class="mood"></div>
                                        <div class="rate">{{$maxRatings}}</div>
                                    </div>
                                    <div class="summary mood2">
                                        <div class="mood"></div>
                                        <div class="rate">{{ $twoRatings }}</div>
                                    </div>
                                    <div class="summary mood1">
                                        <div class="mood"></div>
                                        <div class="rate">{{ $oneRatings }}</div>
                                    </div>
                                    <div class="summary mood0">
                                        <div class="mood"></div>
                                        <div class="rate">{{ $zeroRatings }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearall"></div>
                        <div class="pay_options">
                            <div class="vm_leftname">Plans:</div>
                            <div class="percents">{{$detail->plans_description}}</div>
                        </div>
                        <div class="clearall"></div>
                        <div class="pay_options">
                            <div class="vm_leftname">Paysystems:</div>
                            <div class="paysystems">

                                @if($detail->payeer === 1)
                                <img src="{{ asset('assets/images/Payeer.gif') }}" alt="Payeer" title="Payeer">
                                @endif

                                @if($detail->perfect_money === 1)
                                <img src="{{ asset('assets/images/PerfectMoney.gif') }}" alt="PerfectMoney"
                                    title="PerfectMoney">
                                @endif

                                @if($detail->epaycore === 1)
                                <img src="{{ asset('assets/images/Epaycore.gif') }}" alt="Epaycore" title="Epaycore">
                                @endif

                                @if($detail->bitcoin === 1)
                                <img src="{{ asset('assets/images/Bitcoin.gif') }}" alt="Bitcoin" title="Bitcoin">
                                @endif

                                @if($detail->bitcoin_cash === 1)
                                <img src="{{ asset('assets/images/Bitcoin%20Cash.gif') }}" alt="Bitcoin Cash"
                                    title="Bitcoin Cash">
                                @endif

                                @if($detail->litecoin === 1)
                                <img src="{{ asset('assets/images/LiteCoin.gif') }}" alt="LiteCoin" title="LiteCoin">
                                @endif

                                @if($detail->ethereum === 1)
                                <img src="{{ asset('assets/images/Ethereum.gif') }}" alt="Ethereum" title="Ethereum">
                                @endif

                                @if($detail->dogecoin === 1)
                                <img src="{{ asset('assets/images/Dogecoin.gif') }}" alt="Dogecoin" title="Dogecoin">
                                @endif

                                @if($detail->tether === 1)
                                <img src="{{ asset('assets/images/Tether.gif') }}" alt="Tether" title="Tether">
                                @endif

                                @if($detail->tron === 1)
                                <img src="{{ asset('assets/images/Tron.gif') }}" alt="Tron" title="Tron">
                                @endif

                                @if($detail->bnb === 1)
                                <img src="{{ asset('assets/images/BNB.gif') }}" alt="BNB" title="BNB">
                                @endif

                                @if($detail->advcash === 1)
                                <img src="{{ asset('assets/images/Advcash.gif') }}" alt="advcash" title="advcash">
                                @endif

                                @if($detail->okpay === 1)
                                <img src="{{ asset('assets/images/Okpay.gif') }}" alt="okpay" title="okpay">
                                @endif
                                @if($detail->mastercard === 1)
                                <img src="{{ asset('assets/images/Mastercard.gif') }}" alt="Mastercard" title="BNB">
                                @endif
                                @if($detail->solidtrustpay === 1)
                                <img src="{{ asset('assets/images/Solidtrustpay.gif') }}" alt="Solidtrustpay"
                                    title="Solidtrustpay">
                                @endif
                                @if($detail->webmoney === 1)
                                <img src="{{ asset('assets/images/Webmoney.gif') }}" alt="Webmoney" title="Webmoney">
                                @endif
                                @if($detail->paypal === 1)
                                <img src="{{ asset('assets/images/Paypal.gif') }}" alt="Paypal" title="Paypal">
                                @endif
                                @if($detail->yandex === 1)
                                <img src="{{ asset('assets/images/YandexMoney.gif') }}" alt="Yandex" title="Yandex">
                                @endif
                                @if($detail->nxmoney === 1)
                                <img src="{{ asset('assets/images/NIXmoney.gif') }}" alt="NXmoney" title="NXmoney">
                                @endif
                                @if($detail->dash === 1)
                                <img src="{{ asset('assets/images/Dash.gif') }}" alt="Dash" title="Dash">
                                @endif
                                @if($detail->dogecoin === 1)
                                <img src="{{ asset('assets/images/Dogecoin.gif') }}" alt="Dogcoin" title="Dogcoin">
                                @endif
                                @if($detail->ripple === 1)
                                <img src="{{ asset('assets/images/Ripple.gif') }}" alt="Ripple" title="Ripple">
                                @endif
                                @if($detail->stellar === 1)
                                <img src="{{ asset('assets/images/Stellar.gif') }}" alt="Stellar" title="Stellar">
                                @endif
                                @if($detail->bertycash === 1)
                                <img src="{{ asset('assets/images/bertycash.gif') }}" alt="Bertcash" title="Bertcash">
                                @endif



                            </div>
                            <div class="options">
                                @if($detail->sslsecurtiy === 1)
                                <img src="{{ asset('assets/images/SSL.gif') }}" alt="SSLSecurtiy" title="SSLSecurtiy">
                                @endif
                                @if($detail->ddos === 1)
                                <img src="{{ asset('assets/images/DDOS.gif') }}" alt="DDOS" title="DDOS">
                                @endif
                            </div>
                        </div>
                        <div class="clearall"></div>
                        <div class="planmenu">
                            <a href="{{ route('detail', $detail->program_id)}}">Details</a>

                            <a href="{{ route('add_vote',$detail->program_id)}}">Vote Now</a>
                            <a href="{{ route('traffic', $detail->program_id)}}">Traffic</a>
                            <a href="{{ route('whois',  $detail->program_id)}}">Whois</a>
                            <a href="{{ route('scam',  $detail->program_id)}}">Scam</a>
                            <a href="{{ route('code',  $detail->program_id)}}">Code</a>

                            <div class="added">Added: {{ \Carbon\Carbon::parse($detail->created_at)->format('M jS, Y')
                                }}</div>

                        </div>
                        <div class="description"></div>
                        @endforeach

                    </div>

                    @endforeach
                    <div class="clearall"></div>
                </div>
                @endif


                @if($exclusivePrograms->isNotEmpty())
                <div class="list Exclusive">
                    <div class="header clearfix">
                        <h1>Exclusive</h1>
                        <a href="" class="staff">List your program in the Exclusive listing</a>
                    </div>

                    @foreach($exclusivePrograms as $program)

                    <div class="program Exclusive ">
                        <div class="title clearfix">
                            <div class="title1">&nbsp;</div>
                            <div class="title2"><a class="name" href="{{ $program->details->first()->link }}"
                                    target=_blank>{{$program->name}}</a></div>

                            <div class="status {{ $program->status === 'Paying' ? 'status1' : 'status4'}}">
                                {{$program->status}}</div>
                        </div>

                        @foreach($program->details as $detail)
                        <div class="main clearfix">
                            <div class="col1 clearfix">
                                <a href="{{ $detail->link }}" target=_blank><img
                                        src="{{ asset('assets_backend/img/program/'.$detail->image) }}"
                                        alt="Bitcashdepositscreenshot"></a>
                            </div>
                            <div class="col23">
                                <div class="col2">
                                    <div class="investment">Our Invetment: <b>${{$detail->our_investment}}</b></div>
                                    <table class="pratios">
                                        <tr>
                                            <td class="partial">
                                                <div style="width: {{$detail->payout_ratio}}%"></div>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="ratio">Payout Ratio: <b>{{$detail->payout_ratio}}%</b> </div>
                                    <div class="lastpayout">Last Payout: <b>{{ $detail->program->status === 'Paying' ?
                                            \Carbon\Carbon::now()->format('M jS, Y') :
                                            \Carbon\Carbon::parse($detail->program->updated_at)->format('M jS, Y')}}</b>
                                    </div>
                                    @php

                                    $createdAt = \Carbon\Carbon::parse($detail->created_at);
                                    $lifetime = $createdAt->diffForHumans();

                                    @endphp
                                    <div class="lifetime">Lifetime: <b>{{ $lifetime }}</b></div>
                                    <div class="max_rcb"><a href="">Ref. Back: {{$detail->ref_back}}%</a>
                                    </div>

                                </div>
                                <div class="col3">
                                    <div class="support">Support:
                                    </div>
                                    <div class="forums">Forum:
                                    </div>
                                    <div class="amountdiv">Min/Max: <b class="min">{{$detail->min}}</b> / <b
                                            class="max">{{$detail->max}}</b>
                                    </div>
                                    <div class="referral">Referral: <b>{{$detail->referral}}% - 15% - 5%</b></div>
                                    <div class="withdrawal">Withdrawal: <b>
                                            Instant
                                        </b></div>
                                </div>
                            </div>
                            <div class="col4 clearfix">
                                <div class="ourrating">
                                    <div class="rating">Our Rating:</div>
                                    <div class="emptystars">
                                        <div class="fullstars" style="width: {{$detail->our_rate}}%"
                                            bis_skin_checked="1"></div>
                                    </div>
                                </div>
                                <div class="usrrating">
                                    <div class="rating">Users Rating:</div>
                                    @if($program->ratings->isNotEmpty())
                                    @php
                                    $totalRatings = $program->ratings->count();
                                    $maxRatings = $program->ratings->where('rate', 3)->count();
                                    $twoRatings = $program->ratings->where('rate', 2)->count();
                                    $oneRatings = $program->ratings->where('rate', 1)->count();
                                    $zeroRatings = $program->ratings->where('rate', 0)->count();

                                    // Calculate percentage of ratings that are 3
                                    $percentage = $totalRatings > 0 ? ($maxRatings / $totalRatings) * 100 : 0;
                                    @endphp

                                    @else
                                    @php
                                    $maxRatings = 0;
                                    $twoRatings = 0;
                                    $oneRatings = 0;
                                    $zeroRatings = 0;
                                    $percentage = 0;
                                    @endphp
                                    @endif

                                    <div class="emptystars">

                                        <div class="fullstars" style="width: {{ $percentage }}%"></div>
                                    </div>
                                </div>
                                <div class="votes_summary">
                                    <div class="summary mood3">
                                        <div class="mood"></div>
                                        <div class="rate">{{$maxRatings}}</div>
                                    </div>
                                    <div class="summary mood2">
                                        <div class="mood"></div>
                                        <div class="rate">{{ $twoRatings }}</div>
                                    </div>
                                    <div class="summary mood1">
                                        <div class="mood"></div>
                                        <div class="rate">{{ $oneRatings }}</div>
                                    </div>
                                    <div class="summary mood0">
                                        <div class="mood"></div>
                                        <div class="rate">{{ $zeroRatings }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearall"></div>
                        <div class="pay_options">
                            <div class="vm_leftname">Plans:</div>
                            <div class="percents">{{$detail->plans_description}}</div>
                        </div>
                        <div class="clearall"></div>
                        <div class="pay_options">
                            <div class="vm_leftname">Paysystems:</div>
                            <div class="paysystems">

                                @if($detail->payeer === 1)
                                <img src="{{ asset('assets/images/Payeer.gif') }}" alt="Payeer" title="Payeer">
                                @endif

                                @if($detail->perfect_money === 1)
                                <img src="{{ asset('assets/images/PerfectMoney.gif') }}" alt="PerfectMoney"
                                    title="PerfectMoney">
                                @endif

                                @if($detail->epaycore === 1)
                                <img src="{{ asset('assets/images/Epaycore.gif') }}" alt="Epaycore" title="Epaycore">
                                @endif

                                @if($detail->bitcoin === 1)
                                <img src="{{ asset('assets/images/Bitcoin.gif') }}" alt="Bitcoin" title="Bitcoin">
                                @endif

                                @if($detail->bitcoin_cash === 1)
                                <img src="{{ asset('assets/images/Bitcoin%20Cash.gif') }}" alt="Bitcoin Cash"
                                    title="Bitcoin Cash">
                                @endif

                                @if($detail->litecoin === 1)
                                <img src="{{ asset('assets/images/LiteCoin.gif') }}" alt="LiteCoin" title="LiteCoin">
                                @endif

                                @if($detail->ethereum === 1)
                                <img src="{{ asset('assets/images/Ethereum.gif') }}" alt="Ethereum" title="Ethereum">
                                @endif

                                @if($detail->dogecoin === 1)
                                <img src="{{ asset('assets/images/Dogecoin.gif') }}" alt="Dogecoin" title="Dogecoin">
                                @endif

                                @if($detail->tether === 1)
                                <img src="{{ asset('assets/images/Tether.gif') }}" alt="Tether" title="Tether">
                                @endif

                                @if($detail->tron === 1)
                                <img src="{{ asset('assets/images/Tron.gif') }}" alt="Tron" title="Tron">
                                @endif

                                @if($detail->bnb === 1)
                                <img src="{{ asset('assets/images/BNB.gif') }}" alt="BNB" title="BNB">
                                @endif

                                @if($detail->advcash === 1)
                                <img src="{{ asset('assets/images/Advcash.gif') }}" alt="advcash" title="advcash">
                                @endif

                                @if($detail->okpay === 1)
                                <img src="{{ asset('assets/images/Okpay.gif') }}" alt="okpay" title="okpay">
                                @endif
                                @if($detail->mastercard === 1)
                                <img src="{{ asset('assets/images/Mastercard.gif') }}" alt="Mastercard" title="BNB">
                                @endif
                                @if($detail->solidtrustpay === 1)
                                <img src="{{ asset('assets/images/Solidtrustpay.gif') }}" alt="Solidtrustpay"
                                    title="Solidtrustpay">
                                @endif
                                @if($detail->webmoney === 1)
                                <img src="{{ asset('assets/images/Webmoney.gif') }}" alt="Webmoney" title="Webmoney">
                                @endif
                                @if($detail->paypal === 1)
                                <img src="{{ asset('assets/images/Paypal.gif') }}" alt="Paypal" title="Paypal">
                                @endif
                                @if($detail->yandex === 1)
                                <img src="{{ asset('assets/images/YandexMoney.gif') }}" alt="Yandex" title="Yandex">
                                @endif
                                @if($detail->nxmoney === 1)
                                <img src="{{ asset('assets/images/NIXmoney.gif') }}" alt="NXmoney" title="NXmoney">
                                @endif
                                @if($detail->dash === 1)
                                <img src="{{ asset('assets/images/Dash.gif') }}" alt="Dash" title="Dash">
                                @endif
                                @if($detail->dogecoin === 1)
                                <img src="{{ asset('assets/images/Dogecoin.gif') }}" alt="Dogcoin" title="Dogcoin">
                                @endif
                                @if($detail->ripple === 1)
                                <img src="{{ asset('assets/images/Ripple.gif') }}" alt="Ripple" title="Ripple">
                                @endif
                                @if($detail->stellar === 1)
                                <img src="{{ asset('assets/images/Stellar.gif') }}" alt="Stellar" title="Stellar">
                                @endif
                                @if($detail->bertycash === 1)
                                <img src="{{ asset('assets/images/bertycash.gif') }}" alt="Bertcash" title="Bertcash">
                                @endif



                            </div>
                            <div class="options">
                                @if($detail->sslsecurtiy === 1)
                                <img src="{{ asset('assets/images/SSL.gif') }}" alt="SSLSecurtiy" title="SSLSecurtiy">
                                @endif
                                @if($detail->ddos === 1)
                                <img src="{{ asset('assets/images/DDOS.gif') }}" alt="DDOS" title="DDOS">
                                @endif
                            </div>
                        </div>
                        <div class="clearall"></div>
                        <div class="planmenu">
                            <a href="{{ route('detail', $detail->program_id)}}">Details</a>

                            <a href="{{ route('add_vote',$detail->program_id)}}">Vote Now</a>
                            <a href="{{ route('traffic', $detail->program_id)}}">Traffic</a>
                            <a href="{{ route('whois',  $detail->program_id)}}">Whois</a>
                            <a href="{{ route('scam',  $detail->program_id)}}">Scam</a>
                            <a href="{{ route('code',  $detail->program_id)}}">Code</a>

                            <div class="added">Added: {{ \Carbon\Carbon::parse($detail->created_at)->format('M jS, Y')
                                }}</div>

                        </div>
                        <div class="description"></div>
                        @endforeach

                    </div>

                    @endforeach



                    <div class="clearall"></div>
                </div>
                @endif


                @if($PremiumPrograms->isNotEmpty())
                <div class="list Premium">
                    <div class="header clearfix">
                        <h1>Premium</h1>
                        <a href="" class="staff">List your program in the Premium listing</a>
                    </div>

                    @foreach($PremiumPrograms as $program)

                    <div class="program Exclusive ">
                        <div class="title clearfix">
                            <div class="title1">&nbsp;</div>
                            <div class="title2"><a class="name" href="{{ $program->details->first()->link }}"
                                    target=_blank>{{$program->name}}</a></div>

                            <div class="status {{ $program->status === 'Paying' ? 'status1' : 'status4'}}">
                                {{$program->status}}</div>
                        </div>

                        @foreach($program->details as $detail)
                        <div class="main clearfix">
                            <div class="col1 clearfix">
                                <a href="{{ $detail->link }}" target=_blank><img
                                        src="{{ asset('assets_backend/img/program/'.$detail->image) }}"
                                        alt="Bitcashdepositscreenshot"></a>
                            </div>
                            <div class="col23">
                                <div class="col2">
                                    <div class="investment">Our Invetment: <b>${{$detail->our_investment}}</b></div>
                                    <table class="pratios">
                                        <tr>
                                            <td class="partial">
                                                <div style="width: {{$detail->payout_ratio}}%"></div>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="ratio">Payout Ratio: <b>{{$detail->payout_ratio}}%</b> </div>
                                    <div class="lastpayout">Last Payout: <b>{{ $detail->program->status === 'Paying' ?
                                            \Carbon\Carbon::now()->format('M jS, Y') :
                                            \Carbon\Carbon::parse($detail->program->updated_at)->format('M jS, Y')}}</b>
                                    </div>
                                    @php

                                    $createdAt = \Carbon\Carbon::parse($detail->created_at);
                                    $lifetime = $createdAt->diffForHumans();

                                    @endphp
                                    <div class="lifetime">Lifetime: <b>{{ $lifetime }}</b></div>
                                    <div class="max_rcb"><a href="">Ref. Back: {{$detail->ref_back}}%</a>
                                    </div>

                                </div>
                                <div class="col3">
                                    <div class="support">Support:
                                    </div>
                                    <div class="forums">Forum:
                                    </div>
                                    <div class="amountdiv">Min/Max: <b class="min">{{$detail->min}}</b> / <b
                                            class="max">{{$detail->max}}</b>
                                    </div>
                                    <div class="referral">Referral: <b>{{$detail->referral}}% - 15% - 5%</b></div>
                                    <div class="withdrawal">Withdrawal: <b>
                                            Instant
                                        </b></div>
                                </div>
                            </div>
                            <div class="col4 clearfix">
                                <div class="ourrating">
                                    <div class="rating">Our Rating:</div>
                                    <div class="emptystars">
                                        <div class="fullstars" style="width: {{$detail->our_rate}}%"
                                            bis_skin_checked="1"></div>
                                    </div>
                                </div>
                                <div class="usrrating">
                                    <div class="rating">Users Rating:</div>
                                    @if($program->ratings->isNotEmpty())
                                    @php
                                    $totalRatings = $program->ratings->count();
                                    $maxRatings = $program->ratings->where('rate', 3)->count();
                                    $twoRatings = $program->ratings->where('rate', 2)->count();
                                    $oneRatings = $program->ratings->where('rate', 1)->count();
                                    $zeroRatings = $program->ratings->where('rate', 0)->count();

                                    // Calculate percentage of ratings that are 3
                                    $percentage = $totalRatings > 0 ? ($maxRatings / $totalRatings) * 100 : 0;
                                    @endphp

                                    @else
                                    @php
                                    $maxRatings = 0;
                                    $twoRatings = 0;
                                    $oneRatings = 0;
                                    $zeroRatings = 0;
                                    $percentage = 0;
                                    @endphp
                                    @endif

                                    <div class="emptystars">

                                        <div class="fullstars" style="width: {{ $percentage }}%"></div>
                                    </div>
                                </div>
                                <div class="votes_summary">
                                    <div class="summary mood3">
                                        <div class="mood"></div>
                                        <div class="rate">{{$maxRatings}}</div>
                                    </div>
                                    <div class="summary mood2">
                                        <div class="mood"></div>
                                        <div class="rate">{{ $twoRatings }}</div>
                                    </div>
                                    <div class="summary mood1">
                                        <div class="mood"></div>
                                        <div class="rate">{{ $oneRatings }}</div>
                                    </div>
                                    <div class="summary mood0">
                                        <div class="mood"></div>
                                        <div class="rate">{{ $zeroRatings }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearall"></div>
                        <div class="pay_options">
                            <div class="vm_leftname">Plans:</div>
                            <div class="percents">{{$detail->plans_description}}</div>
                        </div>
                        <div class="clearall"></div>
                        <div class="pay_options">
                            <div class="vm_leftname">Paysystems:</div>
                            <div class="paysystems">

                                @if($detail->payeer === 1)
                                <img src="{{ asset('assets/images/Payeer.gif') }}" alt="Payeer" title="Payeer">
                                @endif

                                @if($detail->perfect_money === 1)
                                <img src="{{ asset('assets/images/PerfectMoney.gif') }}" alt="PerfectMoney"
                                    title="PerfectMoney">
                                @endif

                                @if($detail->epaycore === 1)
                                <img src="{{ asset('assets/images/Epaycore.gif') }}" alt="Epaycore" title="Epaycore">
                                @endif

                                @if($detail->bitcoin === 1)
                                <img src="{{ asset('assets/images/Bitcoin.gif') }}" alt="Bitcoin" title="Bitcoin">
                                @endif

                                @if($detail->bitcoin_cash === 1)
                                <img src="{{ asset('assets/images/Bitcoin%20Cash.gif') }}" alt="Bitcoin Cash"
                                    title="Bitcoin Cash">
                                @endif

                                @if($detail->litecoin === 1)
                                <img src="{{ asset('assets/images/LiteCoin.gif') }}" alt="LiteCoin" title="LiteCoin">
                                @endif

                                @if($detail->ethereum === 1)
                                <img src="{{ asset('assets/images/Ethereum.gif') }}" alt="Ethereum" title="Ethereum">
                                @endif

                                @if($detail->dogecoin === 1)
                                <img src="{{ asset('assets/images/Dogecoin.gif') }}" alt="Dogecoin" title="Dogecoin">
                                @endif

                                @if($detail->tether === 1)
                                <img src="{{ asset('assets/images/Tether.gif') }}" alt="Tether" title="Tether">
                                @endif

                                @if($detail->tron === 1)
                                <img src="{{ asset('assets/images/Tron.gif') }}" alt="Tron" title="Tron">
                                @endif

                                @if($detail->bnb === 1)
                                <img src="{{ asset('assets/images/BNB.gif') }}" alt="BNB" title="BNB">
                                @endif

                                @if($detail->advcash === 1)
                                <img src="{{ asset('assets/images/Advcash.gif') }}" alt="advcash" title="advcash">
                                @endif

                                @if($detail->okpay === 1)
                                <img src="{{ asset('assets/images/Okpay.gif') }}" alt="okpay" title="okpay">
                                @endif
                                @if($detail->mastercard === 1)
                                <img src="{{ asset('assets/images/Mastercard.gif') }}" alt="Mastercard" title="BNB">
                                @endif
                                @if($detail->solidtrustpay === 1)
                                <img src="{{ asset('assets/images/Solidtrustpay.gif') }}" alt="Solidtrustpay"
                                    title="Solidtrustpay">
                                @endif
                                @if($detail->webmoney === 1)
                                <img src="{{ asset('assets/images/Webmoney.gif') }}" alt="Webmoney" title="Webmoney">
                                @endif
                                @if($detail->paypal === 1)
                                <img src="{{ asset('assets/images/Paypal.gif') }}" alt="Paypal" title="Paypal">
                                @endif
                                @if($detail->yandex === 1)
                                <img src="{{ asset('assets/images/YandexMoney.gif') }}" alt="Yandex" title="Yandex">
                                @endif
                                @if($detail->nxmoney === 1)
                                <img src="{{ asset('assets/images/NIXmoney.gif') }}" alt="NXmoney" title="NXmoney">
                                @endif
                                @if($detail->dash === 1)
                                <img src="{{ asset('assets/images/Dash.gif') }}" alt="Dash" title="Dash">
                                @endif
                                @if($detail->dogecoin === 1)
                                <img src="{{ asset('assets/images/Dogecoin.gif') }}" alt="Dogcoin" title="Dogcoin">
                                @endif
                                @if($detail->ripple === 1)
                                <img src="{{ asset('assets/images/Ripple.gif') }}" alt="Ripple" title="Ripple">
                                @endif
                                @if($detail->stellar === 1)
                                <img src="{{ asset('assets/images/Stellar.gif') }}" alt="Stellar" title="Stellar">
                                @endif
                                @if($detail->bertycash === 1)
                                <img src="{{ asset('assets/images/bertycash.gif') }}" alt="Bertcash" title="Bertcash">
                                @endif



                            </div>
                            <div class="options">
                                @if($detail->sslsecurtiy === 1)
                                <img src="{{ asset('assets/images/SSL.gif') }}" alt="SSLSecurtiy" title="SSLSecurtiy">
                                @endif
                                @if($detail->ddos === 1)
                                <img src="{{ asset('assets/images/DDOS.gif') }}" alt="DDOS" title="DDOS">
                                @endif
                            </div>
                        </div>
                        <div class="clearall"></div>
                        <div class="planmenu">
                            <a href="{{ route('detail', $detail->program_id)}}">Details</a>

                            <a href="{{ route('add_vote',$detail->program_id)}}">Vote Now</a>
                            <a href="{{ route('traffic', $detail->program_id)}}">Traffic</a>
                            <a href="{{ route('whois',  $detail->program_id)}}">Whois</a>
                            <a href="{{ route('scam',  $detail->program_id)}}">Scam</a>
                            <a href="{{ route('code',  $detail->program_id)}}">Code</a>

                            <div class="added">Added: {{ \Carbon\Carbon::parse($detail->created_at)->format('M jS, Y')
                                }}</div>

                        </div>
                        <div class="description"></div>
                        @endforeach

                    </div>

                    @endforeach


                    <div class="clearall"></div>
                </div>
                @endif


                @if($NormalPrograms->isNotEmpty())
                <div class="list Normal">
                    <div class="header clearfix">
                        <h1>Normal</h1>
                        <a href="" class="staff">List your program in the Normal listing</a>
                    </div>



                    @foreach($NormalPrograms as $program)

                    <div class="program Exclusive ">
                        <div class="title clearfix">
                            <div class="title1">&nbsp;</div>
                            <div class="title2"><a class="name" href="{{ $program->details->first()->link }}"
                                    target=_blank>{{$program->name}}</a></div>

                            <div class="status {{ $program->status === 'Paying' ? 'status1' : 'status4'}}">
                                {{$program->status}}</div>
                        </div>

                        @foreach($program->details as $detail)
                        <div class="main clearfix">
                            <div class="col1 clearfix">
                                <a href="{{ $detail->link }}" target=_blank><img
                                        src="{{ asset('assets_backend/img/program/'.$detail->image) }}"
                                        alt="Bitcashdepositscreenshot"></a>
                            </div>
                            <div class="col23">
                                <div class="col2">
                                    <div class="investment">Our Invetment: <b>${{$detail->our_investment}}</b></div>
                                    <table class="pratios">
                                        <tr>
                                            <td class="partial">
                                                <div style="width: {{$detail->payout_ratio}}%"></div>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="ratio">Payout Ratio: <b>{{$detail->payout_ratio}}%</b> </div>
                                    <div class="lastpayout">Last Payout: <b>{{ $detail->program->status === 'Paying' ?
                                            \Carbon\Carbon::now()->format('M jS, Y') :
                                            \Carbon\Carbon::parse($detail->program->updated_at)->format('M jS, Y')}}</b>
                                    </div>
                                    @php

                                    $createdAt = \Carbon\Carbon::parse($detail->created_at);
                                    $lifetime = $createdAt->diffForHumans();

                                    @endphp
                                    <div class="lifetime">Lifetime: <b>{{ $lifetime }}</b></div>
                                    <div class="max_rcb"><a href="">Ref. Back: {{$detail->ref_back}}%</a>
                                    </div>

                                </div>
                                <div class="col3">
                                    <div class="support">Support:
                                    </div>
                                    <div class="forums">Forum:
                                    </div>
                                    <div class="amountdiv">Min/Max: <b class="min">{{$detail->min}}</b> / <b
                                            class="max">{{$detail->max}}</b>
                                    </div>
                                    <div class="referral">Referral: <b>{{$detail->referral}}% - 15% - 5%</b></div>
                                    <div class="withdrawal">Withdrawal: <b>
                                            Instant
                                        </b></div>
                                </div>
                            </div>
                            <div class="col4 clearfix">
                                <div class="ourrating">
                                    <div class="rating">Our Rating:</div>
                                    <div class="emptystars">
                                        <div class="fullstars" style="width: {{$detail->our_rate}}%"
                                            bis_skin_checked="1"></div>
                                    </div>
                                </div>
                                <div class="usrrating">
                                    <div class="rating">Users Rating:</div>
                                    @if($program->ratings->isNotEmpty())
                                    @php
                                    $totalRatings = $program->ratings->count();
                                    $maxRatings = $program->ratings->where('rate', 3)->count();
                                    $twoRatings = $program->ratings->where('rate', 2)->count();
                                    $oneRatings = $program->ratings->where('rate', 1)->count();
                                    $zeroRatings = $program->ratings->where('rate', 0)->count();

                                    // Calculate percentage of ratings that are 3
                                    $percentage = $totalRatings > 0 ? ($maxRatings / $totalRatings) * 100 : 0;
                                    @endphp

                                    @else
                                    @php
                                    $maxRatings = 0;
                                    $twoRatings = 0;
                                    $oneRatings = 0;
                                    $zeroRatings = 0;
                                    $percentage = 0;
                                    @endphp
                                    @endif

                                    <div class="emptystars">

                                        <div class="fullstars" style="width: {{ $percentage }}%"></div>
                                    </div>
                                </div>
                                <div class="votes_summary">
                                    <div class="summary mood3">
                                        <div class="mood"></div>
                                        <div class="rate">{{$maxRatings}}</div>
                                    </div>
                                    <div class="summary mood2">
                                        <div class="mood"></div>
                                        <div class="rate">{{ $twoRatings }}</div>
                                    </div>
                                    <div class="summary mood1">
                                        <div class="mood"></div>
                                        <div class="rate">{{ $oneRatings }}</div>
                                    </div>
                                    <div class="summary mood0">
                                        <div class="mood"></div>
                                        <div class="rate">{{ $zeroRatings }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearall"></div>
                        <div class="pay_options">
                            <div class="vm_leftname">Plans:</div>
                            <div class="percents">{{$detail->plans_description}}</div>
                        </div>
                        <div class="clearall"></div>
                        <div class="pay_options">
                            <div class="vm_leftname">Paysystems:</div>
                            <div class="paysystems">

                                @if($detail->payeer === 1)
                                <img src="{{ asset('assets/images/Payeer.gif') }}" alt="Payeer" title="Payeer">
                                @endif

                                @if($detail->perfect_money === 1)
                                <img src="{{ asset('assets/images/PerfectMoney.gif') }}" alt="PerfectMoney"
                                    title="PerfectMoney">
                                @endif

                                @if($detail->epaycore === 1)
                                <img src="{{ asset('assets/images/Epaycore.gif') }}" alt="Epaycore" title="Epaycore">
                                @endif

                                @if($detail->bitcoin === 1)
                                <img src="{{ asset('assets/images/Bitcoin.gif') }}" alt="Bitcoin" title="Bitcoin">
                                @endif

                                @if($detail->bitcoin_cash === 1)
                                <img src="{{ asset('assets/images/Bitcoin%20Cash.gif') }}" alt="Bitcoin Cash"
                                    title="Bitcoin Cash">
                                @endif

                                @if($detail->litecoin === 1)
                                <img src="{{ asset('assets/images/LiteCoin.gif') }}" alt="LiteCoin" title="LiteCoin">
                                @endif

                                @if($detail->ethereum === 1)
                                <img src="{{ asset('assets/images/Ethereum.gif') }}" alt="Ethereum" title="Ethereum">
                                @endif

                                @if($detail->dogecoin === 1)
                                <img src="{{ asset('assets/images/Dogecoin.gif') }}" alt="Dogecoin" title="Dogecoin">
                                @endif

                                @if($detail->tether === 1)
                                <img src="{{ asset('assets/images/Tether.gif') }}" alt="Tether" title="Tether">
                                @endif

                                @if($detail->tron === 1)
                                <img src="{{ asset('assets/images/Tron.gif') }}" alt="Tron" title="Tron">
                                @endif

                                @if($detail->bnb === 1)
                                <img src="{{ asset('assets/images/BNB.gif') }}" alt="BNB" title="BNB">
                                @endif

                                @if($detail->advcash === 1)
                                <img src="{{ asset('assets/images/Advcash.gif') }}" alt="advcash" title="advcash">
                                @endif

                                @if($detail->okpay === 1)
                                <img src="{{ asset('assets/images/Okpay.gif') }}" alt="okpay" title="okpay">
                                @endif
                                @if($detail->mastercard === 1)
                                <img src="{{ asset('assets/images/Mastercard.gif') }}" alt="Mastercard" title="BNB">
                                @endif
                                @if($detail->solidtrustpay === 1)
                                <img src="{{ asset('assets/images/Solidtrustpay.gif') }}" alt="Solidtrustpay"
                                    title="Solidtrustpay">
                                @endif
                                @if($detail->webmoney === 1)
                                <img src="{{ asset('assets/images/Webmoney.gif') }}" alt="Webmoney" title="Webmoney">
                                @endif
                                @if($detail->paypal === 1)
                                <img src="{{ asset('assets/images/Paypal.gif') }}" alt="Paypal" title="Paypal">
                                @endif
                                @if($detail->yandex === 1)
                                <img src="{{ asset('assets/images/YandexMoney.gif') }}" alt="Yandex" title="Yandex">
                                @endif
                                @if($detail->nxmoney === 1)
                                <img src="{{ asset('assets/images/NIXmoney.gif') }}" alt="NXmoney" title="NXmoney">
                                @endif
                                @if($detail->dash === 1)
                                <img src="{{ asset('assets/images/Dash.gif') }}" alt="Dash" title="Dash">
                                @endif
                                @if($detail->dogecoin === 1)
                                <img src="{{ asset('assets/images/Dogecoin.gif') }}" alt="Dogcoin" title="Dogcoin">
                                @endif
                                @if($detail->ripple === 1)
                                <img src="{{ asset('assets/images/Ripple.gif') }}" alt="Ripple" title="Ripple">
                                @endif
                                @if($detail->stellar === 1)
                                <img src="{{ asset('assets/images/Stellar.gif') }}" alt="Stellar" title="Stellar">
                                @endif
                                @if($detail->bertycash === 1)
                                <img src="{{ asset('assets/images/bertycash.gif') }}" alt="Bertcash" title="Bertcash">
                                @endif



                            </div>
                            <div class="options">
                                @if($detail->sslsecurtiy === 1)
                                <img src="{{ asset('assets/images/SSL.gif') }}" alt="SSLSecurtiy" title="SSLSecurtiy">
                                @endif
                                @if($detail->ddos === 1)
                                <img src="{{ asset('assets/images/DDOS.gif') }}" alt="DDOS" title="DDOS">
                                @endif
                            </div>
                        </div>
                        <div class="clearall"></div>
                        <div class="planmenu">
                            <a href="{{ route('detail', $detail->program_id)}}">Details</a>

                            <a href="{{ route('add_vote',$detail->program_id)}}">Vote Now</a>
                            <a href="{{ route('traffic', $detail->program_id)}}">Traffic</a>
                            <a href="{{ route('whois',  $detail->program_id)}}">Whois</a>
                            <a href="{{ route('scam',  $detail->program_id)}}">Scam</a>
                            <a href="{{ route('code',  $detail->program_id)}}">Code</a>

                            <div class="added">Added: {{ \Carbon\Carbon::parse($detail->created_at)->format('M jS, Y')
                                }}</div>

                        </div>
                        <div class="description"></div>
                        @endforeach

                    </div>

                    @endforeach
                    <div class="clearall"></div>
                </div>
                @endif


                @if($TrialPrograms->isNotEmpty())
                <div class="list Trial">
                    <div class="header clearfix">
                        <h1>Trial</h1>
                        <a href="" class="staff">List your program in the Trial listing</a>
                    </div>

                    @foreach($TrialPrograms as $program)

                    <div class="program Exclusive ">
                        <div class="title clearfix">
                            <div class="title1">&nbsp;</div>
                            <div class="title2"><a class="name" href="{{ $program->details->first()->link }}"
                                    target=_blank>{{$program->name}}</a></div>

                            <div class="status {{ $program->status === 'Paying' ? 'status1' : 'status4'}}">
                                {{$program->status}}</div>
                        </div>

                        @foreach($program->details as $detail)
                        <div class="main clearfix">
                            <div class="col1 clearfix">
                                <a href="{{ $detail->link }}" target=_blank><img
                                        src="{{ asset('assets_backend/img/program/'.$detail->image) }}"
                                        alt="Bitcashdepositscreenshot"></a>
                            </div>
                            <div class="col23">
                                <div class="col2">
                                    <div class="investment">Our Invetment: <b>${{$detail->our_investment}}</b></div>
                                    <table class="pratios">
                                        <tr>
                                            <td class="partial">
                                                <div style="width: {{$detail->payout_ratio}}%"></div>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="ratio">Payout Ratio: <b>{{$detail->payout_ratio}}%</b> </div>
                                    <div class="lastpayout">Last Payout: <b>{{ $detail->program->status === 'Paying' ?
                                            \Carbon\Carbon::now()->format('M jS, Y') :
                                            \Carbon\Carbon::parse($detail->program->updated_at)->format('M jS, Y')}}</b>
                                    </div>
                                    @php

                                    $createdAt = \Carbon\Carbon::parse($detail->created_at);
                                    $lifetime = $createdAt->diffForHumans();

                                    @endphp
                                    <div class="lifetime">Lifetime: <b>{{ $lifetime }}</b></div>
                                    <div class="max_rcb"><a href="">Ref. Back: {{$detail->ref_back}}%</a>
                                    </div>

                                </div>
                                <div class="col3">
                                    <div class="support">Support:
                                    </div>
                                    <div class="forums">Forum:
                                    </div>
                                    <div class="amountdiv">Min/Max: <b class="min">{{$detail->min}}</b> / <b
                                            class="max">{{$detail->max}}</b>
                                    </div>
                                    <div class="referral">Referral: <b>{{$detail->referral}}% - 15% - 5%</b></div>
                                    <div class="withdrawal">Withdrawal: <b>
                                            Instant
                                        </b></div>
                                </div>
                            </div>
                            <div class="col4 clearfix">
                                <div class="ourrating">
                                    <div class="rating">Our Rating:</div>
                                    <div class="emptystars">
                                        <div class="fullstars" style="width: {{$detail->our_rate}}%"
                                            bis_skin_checked="1"></div>
                                    </div>
                                </div>
                                <div class="usrrating">
                                    <div class="rating">Users Rating:</div>
                                    @if($program->ratings->isNotEmpty())
                                    @php
                                    $totalRatings = $program->ratings->count();
                                    $maxRatings = $program->ratings->where('rate', 3)->count();
                                    $twoRatings = $program->ratings->where('rate', 2)->count();
                                    $oneRatings = $program->ratings->where('rate', 1)->count();
                                    $zeroRatings = $program->ratings->where('rate', 0)->count();

                                    // Calculate percentage of ratings that are 3
                                    $percentage = $totalRatings > 0 ? ($maxRatings / $totalRatings) * 100 : 0;
                                    @endphp

                                    @else
                                    @php
                                    $maxRatings = 0;
                                    $twoRatings = 0;
                                    $oneRatings = 0;
                                    $zeroRatings = 0;
                                    $percentage = 0;
                                    @endphp
                                    @endif

                                    <div class="emptystars">

                                        <div class="fullstars" style="width: {{ $percentage }}%"></div>
                                    </div>
                                </div>
                                <div class="votes_summary">
                                    <div class="summary mood3">
                                        <div class="mood"></div>
                                        <div class="rate">{{$maxRatings}}</div>
                                    </div>
                                    <div class="summary mood2">
                                        <div class="mood"></div>
                                        <div class="rate">{{ $twoRatings }}</div>
                                    </div>
                                    <div class="summary mood1">
                                        <div class="mood"></div>
                                        <div class="rate">{{ $oneRatings }}</div>
                                    </div>
                                    <div class="summary mood0">
                                        <div class="mood"></div>
                                        <div class="rate">{{ $zeroRatings }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearall"></div>
                        <div class="pay_options">
                            <div class="vm_leftname">Plans:</div>
                            <div class="percents">{{$detail->plans_description}}</div>
                        </div>
                        <div class="clearall"></div>
                        <div class="pay_options">
                            <div class="vm_leftname">Paysystems:</div>
                            <div class="paysystems">

                                @if($detail->payeer === 1)
                                <img src="{{ asset('assets/images/Payeer.gif') }}" alt="Payeer" title="Payeer">
                                @endif

                                @if($detail->perfect_money === 1)
                                <img src="{{ asset('assets/images/PerfectMoney.gif') }}" alt="PerfectMoney"
                                    title="PerfectMoney">
                                @endif

                                @if($detail->epaycore === 1)
                                <img src="{{ asset('assets/images/Epaycore.gif') }}" alt="Epaycore" title="Epaycore">
                                @endif

                                @if($detail->bitcoin === 1)
                                <img src="{{ asset('assets/images/Bitcoin.gif') }}" alt="Bitcoin" title="Bitcoin">
                                @endif

                                @if($detail->bitcoin_cash === 1)
                                <img src="{{ asset('assets/images/Bitcoin%20Cash.gif') }}" alt="Bitcoin Cash"
                                    title="Bitcoin Cash">
                                @endif

                                @if($detail->litecoin === 1)
                                <img src="{{ asset('assets/images/LiteCoin.gif') }}" alt="LiteCoin" title="LiteCoin">
                                @endif

                                @if($detail->ethereum === 1)
                                <img src="{{ asset('assets/images/Ethereum.gif') }}" alt="Ethereum" title="Ethereum">
                                @endif

                                @if($detail->dogecoin === 1)
                                <img src="{{ asset('assets/images/Dogecoin.gif') }}" alt="Dogecoin" title="Dogecoin">
                                @endif

                                @if($detail->tether === 1)
                                <img src="{{ asset('assets/images/Tether.gif') }}" alt="Tether" title="Tether">
                                @endif

                                @if($detail->tron === 1)
                                <img src="{{ asset('assets/images/Tron.gif') }}" alt="Tron" title="Tron">
                                @endif

                                @if($detail->bnb === 1)
                                <img src="{{ asset('assets/images/BNB.gif') }}" alt="BNB" title="BNB">
                                @endif

                                @if($detail->advcash === 1)
                                <img src="{{ asset('assets/images/Advcash.gif') }}" alt="advcash" title="advcash">
                                @endif

                                @if($detail->okpay === 1)
                                <img src="{{ asset('assets/images/Okpay.gif') }}" alt="okpay" title="okpay">
                                @endif
                                @if($detail->mastercard === 1)
                                <img src="{{ asset('assets/images/Mastercard.gif') }}" alt="Mastercard" title="BNB">
                                @endif
                                @if($detail->solidtrustpay === 1)
                                <img src="{{ asset('assets/images/Solidtrustpay.gif') }}" alt="Solidtrustpay"
                                    title="Solidtrustpay">
                                @endif
                                @if($detail->webmoney === 1)
                                <img src="{{ asset('assets/images/Webmoney.gif') }}" alt="Webmoney" title="Webmoney">
                                @endif
                                @if($detail->paypal === 1)
                                <img src="{{ asset('assets/images/Paypal.gif') }}" alt="Paypal" title="Paypal">
                                @endif
                                @if($detail->yandex === 1)
                                <img src="{{ asset('assets/images/YandexMoney.gif') }}" alt="Yandex" title="Yandex">
                                @endif
                                @if($detail->nxmoney === 1)
                                <img src="{{ asset('assets/images/NIXmoney.gif') }}" alt="NXmoney" title="NXmoney">
                                @endif
                                @if($detail->dash === 1)
                                <img src="{{ asset('assets/images/Dash.gif') }}" alt="Dash" title="Dash">
                                @endif
                                @if($detail->dogecoin === 1)
                                <img src="{{ asset('assets/images/Dogecoin.gif') }}" alt="Dogcoin" title="Dogcoin">
                                @endif
                                @if($detail->ripple === 1)
                                <img src="{{ asset('assets/images/Ripple.gif') }}" alt="Ripple" title="Ripple">
                                @endif
                                @if($detail->stellar === 1)
                                <img src="{{ asset('assets/images/Stellar.gif') }}" alt="Stellar" title="Stellar">
                                @endif
                                @if($detail->bertycash === 1)
                                <img src="{{ asset('assets/images/bertycash.gif') }}" alt="Bertcash" title="Bertcash">
                                @endif



                            </div>
                            <div class="options">
                                @if($detail->sslsecurtiy === 1)
                                <img src="{{ asset('assets/images/SSL.gif') }}" alt="SSLSecurtiy" title="SSLSecurtiy">
                                @endif
                                @if($detail->ddos === 1)
                                <img src="{{ asset('assets/images/DDOS.gif') }}" alt="DDOS" title="DDOS">
                                @endif
                            </div>
                        </div>
                        <div class="clearall"></div>
                        <div class="planmenu">
                            <a href="{{ route('detail', $detail->program_id)}}">Details</a>

                            <a href="{{ route('add_vote',$detail->program_id)}}">Vote Now</a>
                            <a href="{{ route('traffic', $detail->program_id)}}">Traffic</a>
                            <a href="{{ route('whois',  $detail->program_id)}}">Whois</a>
                            <a href="{{ route('scam',  $detail->program_id)}}">Scam</a>
                            <a href="{{ route('code',  $detail->program_id)}}">Code</a>

                            <div class="added">Added: {{ \Carbon\Carbon::parse($detail->created_at)->format('M jS, Y')
                                }}</div>

                        </div>
                        <div class="description"></div>
                        @endforeach

                    </div>

                    @endforeach

                    <div class="clearall"></div>
                </div>
                @endif


            </div>
            <!-- content -->
            <div class="sidebar" id="rsidebar">
                @include('Frontend/layout/rsidebar')
            </div>
        </div>
    </div>
    @endsection
