@extends('Backend/layout/app')
@section('Content')

<div class="container-xxl flex-grow-1 container-p-y">
    @include('Backend/layout/massage_bootstrap')
    <form action="{{ route('admin_program_get_add')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Forms /</span> Add Programs
        </h4>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Name</h5>
                    <div class="card-body">
                        <div>
                            <label for="defaultFormControlInput" class="form-label">Name</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" placeholder="hyip"
                                aria-describedby="defaultFormControlHelp" name="Name">
                            <div id="defaultFormControlHelp" class="form-text">We'll never share your details with
                                anyone
                                else.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Link</h5>
                    <div class="card-body">
                        <div>
                            <label for="exampleFormControlTextarea2" class="form-label">Link:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea2" rows="2"
                                name="link"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form controls -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Form Program</h5>
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" id="formFile" name="Image">
                        </div>


                        <div class="mb-3">
                            <label for="defaultSelect" class="form-label">Type Listing</label>
                            <select id="defaultSelect" class="form-select" name="type_listing">
                                <option value="Super Vip">Super Vip</option>
                                <option value="Exclusive">Exclusive</option>
                                <option value="Premium">Premium</option>
                                <option value="Normal">Normal</option>
                                <option value="Trial">Trial</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="defaultSelect" class="form-label">Status</label>
                            <select id="defaultSelect" class="form-select" name="Status">
                                <option value="Paying">Paying</option>
                                <option value="Warning">Warning</option>
                                <option value="Not Paying">Not Paying</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="defaultInput" class="form-label">Payout Ratio</label>
                            <div class="input-group input-group-merge">
                                <input type="number" class="form-control" placeholder="100" name="Payout_Ratio"
                                    aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="defaultInput" class="form-label">Ref Back</label>
                            <div class="input-group input-group-merge">
                                <input type="number" class="form-control" placeholder="100" name="Ref_Back"
                                    aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="defaultSelect" class="form-label">Our Rate</label>
                            <div class="input-group input-group-merge">
                                <input type="number" class="form-control" placeholder="100" name="Our_Rate"
                                    aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">%</span>
                            </div>

                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="custom-delimiter-mask">Our Investment</label>
                            <input type="number" id="custom-delimiter-mask" class="form-control custom-delimiter-mask"
                                name="Our_Investment" placeholder="100">
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 col-sm-12 mb-4 mb-xl-0">
                                <label class="form-label" for="custom-delimiter-mask">Min</label>
                                <input type="number" id="custom-delimiter-mask"
                                    class="form-control custom-delimiter-mask" name="Min" placeholder="100">
                            </div>
                            <div class="col-md-6 col-sm-12 mb-4 mb-xl-0">
                                <label class="form-label" for="custom-delimiter-mask">Max</label>
                                <input type="number" id="custom-delimiter-mask"
                                    class="form-control custom-delimiter-mask" name="Max" placeholder="100">
                            </div>

                        </div>


                        <div class="mb-3">
                            <label for="defaultInput" class="form-label">Referral</label>
                            <div class="input-group input-group-merge">
                                <input type="number" class="form-control" placeholder="100" name="Referral"
                                    aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="defaultSelect" class="form-label">Withdraw Type</label>
                            <select id="defaultSelect" class="form-select" name="Withdraw_Type">
                                <option value="Instant">Instant</option>
                                <option value="Automatic">Automatic</option>
                                <option value="Manual">Manual</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label"> Domain Name</label>
                            <input type="text" class="form-control" id="defaultFormControlInput"
                                placeholder=" Domain Name" aria-describedby="defaultFormControlHelp" name="Domain_Name">
                        </div>

                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label"> Registry Domain ID</label>
                            <input type="text" class="form-control" id="defaultFormControlInput"
                                placeholder=" Registry Domain ID" aria-describedby="defaultFormControlHelp"
                                name="register_id">
                        </div>

                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label"> Registrar WHOIS Server</label>
                            <input type="text" class="form-control" id="defaultFormControlInput"
                                placeholder=" Registrar WHOIS Server" aria-describedby="defaultFormControlHelp"
                                name="register_server">
                        </div>

                        <div class="mb-3">
                            <label for="flatpickr-updated" class="form-label">Updated Date</label>
                            <input type="text" class="form-control flatpickr-input" name="updated"
                                placeholder="YYYY-MM-DD HH:MM" id="flatpickr-updated" readonly="readonly">
                        </div>

                        <div class="mb-3">
                            <label for="flatpickr-created" class="form-label">Creation Date</label>
                            <input type="text" class="form-control flatpickr-input" name="created"
                                placeholder="YYYY-MM-DD HH:MM" id="flatpickr-created" readonly="readonly">
                        </div>

                        <div class="mb-3">
                            <label for="flatpickr-expired" class="form-label">Registry Expiry Date</label>
                            <input type="text" class="form-control flatpickr-input" name="expired"
                                placeholder="YYYY-MM-DD HH:MM" id="flatpickr-expired" readonly="readonly">
                        </div>

                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label"> Registrar</label>
                            <input type="text" class="form-control" id="defaultFormControlInput"
                                placeholder=" Registrar" aria-describedby="defaultFormControlHelp" name="registrar_enom">
                        </div>

                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label"> Registrar IANA ID</label>
                            <input type="text" class="form-control" id="defaultFormControlInput"
                                placeholder=" Registrar IANA ID" aria-describedby="defaultFormControlHelp" name="registrar_iana_id">
                        </div>

                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">Registrar Abuse Contact Email</label>
                            <input type="text" class="form-control" id="defaultFormControlInput"
                                placeholder="Registrar Abuse Contact Email" aria-describedby="defaultFormControlHelp" name="registrar_email">
                        </div>

                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">Registrar Abuse Contact Phone</label>
                            <input type="text" class="form-control" id="defaultFormControlInput"
                                placeholder="Registrar Abuse Contact Phone" aria-describedby="defaultFormControlHelp" name="registrar_phone">
                        </div>

                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">Domain Status</label>
                            <input type="text" class="form-control" id="defaultFormControlInput"
                                placeholder="Domain Status" aria-describedby="defaultFormControlHelp" name="domain_status">
                        </div>

                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">Name Server</label>
                            <input type="text" class="form-control" id="defaultFormControlInput"
                                placeholder="Name Server" aria-describedby="defaultFormControlHelp" name="name_server">
                        </div>

                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">DNSSEC</label>
                            <input type="text" class="form-control" id="defaultFormControlInput"
                                placeholder="DNSSEC" aria-describedby="defaultFormControlHelp" name="dnssec">
                        </div>



                    </div>

                </div>
            </div>

            <!-- Input Sizing -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Discription</h5>
                    <div class="card-body">


                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Plans Discription :</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                name="Plans_Discription"></textarea>
                        </div>


                    </div>
                    <hr class="m-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3 ">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="Payeer">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/Payeer.png" class="w-px-40 mb-2"
                                                alt="Payeer">
                                            <span class="custom-option-title"> Payeer </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="Payeer"
                                            name="Payeer">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="Perfect Money">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/Perfect Money.png"
                                                class="w-px-40 mb-2" alt="Perfect Money">
                                            <span class="custom-option-title"> Perfect Money </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="Perfect_   Money"
                                            name="Perfect Money">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="Bitcoin">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/Bitcoin.png" class="w-px-40 mb-2"
                                                alt="Bitcoin">
                                            <span class="custom-option-title"> Bitcoin </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="Bitcoin"
                                            name="Bitcoin">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="Litecoin">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/Litecoin.png" class="w-px-40 mb-2"
                                                alt="Litecoin">
                                            <span class="custom-option-title"> Litecoin </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="Litecoin"
                                            name="Litecoin">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="Bitcoin Cash">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/Bitcoin Cash.png"
                                                class="w-px-40 mb-2" alt="Bitcoin Cash">
                                            <span class="custom-option-title"> Bitcoin Cash </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="Bitcoin Cash"
                                            name="Bitcoin_Cash">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="Ethereum">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/Ethereum.png" class="w-px-40 mb-2"
                                                alt="Ethereum">
                                            <span class="custom-option-title"> Ethereum </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="Ethereum"
                                            name="Ethereum">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="USDT_BEP20">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/USDT_BEP20.png"
                                                class="w-px-40 mb-2" alt="USDT_BEP20">
                                            <span class="custom-option-title"> USDT_BEP20 </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="USDT_BEP20"
                                            name="USDT_BEP20">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="USDT_TRC20">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/USDT_TRC20.png"
                                                class="w-px-40 mb-2" alt="USDT_TRC20">
                                            <span class="custom-option-title"> USDT_TRC20 </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="USDT_TRC20"
                                            name="USDT_TRC20">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="Epaycore">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/Epaycore.png" class="w-px-40 mb-2"
                                                alt="Epaycore">
                                            <span class="custom-option-title"> Epaycore </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="Epaycore"
                                            name="Epaycore">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="Tron">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/Tron.png" class="w-px-40 mb-2"
                                                alt="Tron">
                                            <span class="custom-option-title"> Tron </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="Tron" name="Tron">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="BNB">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/BNB.png" class="w-px-40 mb-2"
                                                alt="BNB">
                                            <span class="custom-option-title"> BNB </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="BNB" name="BNB">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="Advcash">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/Advcash.png" class="w-px-40 mb-2"
                                                alt="Advcash">
                                            <span class="custom-option-title"> Advcash </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="Advcash"
                                            name="Advcash">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="Okpay">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/Okpay.png" class="w-px-40 mb-2"
                                                alt="Okpay">
                                            <span class="custom-option-title"> Okpay </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="Okpay"
                                            name="Okpay">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="Mastercard">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/Mastercard.png"
                                                class="w-px-40 mb-2" alt="Mastercard">
                                            <span class="custom-option-title"> Mastercard </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="Mastercard"
                                            name="Mastercard">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="SolidTrustPay">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/SolidTrustPay.png"
                                                class="w-px-40 mb-2" alt="SolidTrustPay">
                                            <span class="custom-option-title"> SolidTrustPay </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="SolidTrustPay"
                                            name="SolidTrustPay">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="WebMoney">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/WebMoney.png" class="w-px-40 mb-2"
                                                alt="WebMoney">
                                            <span class="custom-option-title"> WebMoney </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="WebMoney"
                                            name="WebMoney">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="Paypal">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/Paypal.png" class="w-px-40 mb-2"
                                                alt="Paypal">
                                            <span class="custom-option-title"> Paypal </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="Paypal"
                                            name="Paypal">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="Yandex">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/Yandex.png" class="w-px-40 mb-2"
                                                alt="Yandex">
                                            <span class="custom-option-title"> Yandex </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="Yandex"
                                            name="Yandex">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="NXMoney">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/NXMoney.png" class="w-px-40 mb-2"
                                                alt="NXMoney">
                                            <span class="custom-option-title"> NXMoney </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="NXMoney"
                                            name="NXMoney">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="Dash">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/Dash.png" class="w-px-40 mb-2"
                                                alt="Dash">
                                            <span class="custom-option-title"> Dash </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="Dash" name="Dash">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="Dogcoin">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/Dogcoin.png" class="w-px-40 mb-2"
                                                alt="Dogcoin">
                                            <span class="custom-option-title"> Dogcoin </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="Dogcoin"
                                            name="Dogcoin">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="Ripple">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/Ripple.png" class="w-px-40 mb-2"
                                                alt="Ripple">
                                            <span class="custom-option-title"> Ripple </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="Ripple"
                                            name="Ripple">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="Stellar">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/Stellar.png" class="w-px-40 mb-2"
                                                alt="Stellar">
                                            <span class="custom-option-title"> Stellar </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="Stellar"
                                            name="Stellar">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="Bertycash">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/Bertycash.png" class="w-px-40 mb-2"
                                                alt="Bertycash">
                                            <span class="custom-option-title"> Bertycash </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="Bertycash"
                                            name="Bertycash">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="SSLSecurity">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/SSLSecurity.png"
                                                class="w-px-40 mb-2" alt="SSLSecurity">
                                            <span class="custom-option-title"> SSLSecurity </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="SSLSecurity"
                                            name="SSLSecurity">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="DDos">
                                        <span class="custom-option-body">
                                            <img src="../../assets/img/icons/unicons/DDos.png" class="w-px-40 mb-2"
                                                alt="DDos">
                                            <span class="custom-option-title"> DDos </span>
                                        </span>
                                        <input class="form-check-input" type="checkbox" value="1" id="DDos" name="DDos">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image1</label>
                            <input class="form-control" type="file" id="formFile" name="image1">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image2</label>
                            <input class="form-control" type="file" id="formFile" name="image2">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image3</label>
                            <input class="form-control" type="file" id="formFile" name="image3">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image4</label>
                            <input class="form-control" type="file" id="formFile" name="image4">
                        </div>

                    </div>
                </div>
            </div>

            <input class="btn btn-info" type="submit" value="Submit">


        </div>

    </form>

</div>

<script>
    // Initialize Flatpickr for the 'Updated Date' field
flatpickr("#flatpickr-updated", {
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    time_24hr: true
});

// Initialize Flatpickr for the 'Creation Date' field
flatpickr("#flatpickr-created", {
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    time_24hr: true
});
flatpickr("#flatpickr-expired", {
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    time_24hr: true
});

</script>
@endsection
