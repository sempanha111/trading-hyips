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
                    <h3>Domain Whois</h3>

                    <div class="details whois" bis_skin_checked="1">
                        @if ($program->domain->isNotEmpty())
                        Domain Name: {{ $program->domain->first()->domain_name }} <br>
                        Registry Domain ID: {{ $program->domain->first()->register_id }}  <br>
                        Registrar WHOIS Server: {{ $program->domain->first()->server }} <br>
                        Registrar URL: http://www.enomdomains.com <br>
                        Updated Date: {{ $program->domain->first()->updated }} <br>
                        Creation Date: {{ $program->domain->first()->created }} <br>
                        Registry Expiry Date: {{ $program->domain->first()->expired }} <br>
                        Registrar: {{ $program->domain->first()->registrar_enom }} <br>
                        Registrar IANA ID: {{ $program->domain->first()->registrar_iana_id }}  <br>
                        Registrar Abuse Contact Email: {{ $program->domain->first()->registrar_email }} <br>
                        Registrar Abuse Contact Phone: {{ $program->domain->first()->registrar_phone }} <br>
                        Domain Status: {{ $program->domain->first()->domain_status }} <br>
                        Name Server: {{ $program->domain->first()->name_server }} <br>
                        DNSSEC: {{ $program->domain->first()->dnssec }} <br>
                        URL of the ICANN Whois Inaccuracy Complaint Form: https://www.icann.org/wicf/ <br>
                        &gt;&gt;&gt; Last update of whois database: 2024-10-01T06:15:02Z &lt;&lt;&lt; <br><br>
                        @endif
                        For more information on Whois status codes, please visit https://icann.org/epp <br><br>

                        NOTICE: The expiration date displayed in this record is the date the <br>
                        registrar's sponsorship of the domain name registration in the registry is <br>
                        currently set to expire. This date does not necessarily reflect the expiration <br>
                        date of the domain name registrant's agreement with the sponsoring <br>
                        registrar. Users may consult the sponsoring registrar's Whois database to <br>
                        view the registrar's reported date of expiration for this registration. <br><br>

                        TERMS OF USE: You are not authorized to access or query our Whois <br>
                        database through the use of electronic processes that are high-volume and <br>
                        automated except as reasonably necessary to register domain names or <br>
                        modify existing registrations; the Data in VeriSign Global Registry <br>
                        Services' ("VeriSign") Whois database is provided by VeriSign for <br>
                        information purposes only, and to assist persons in obtaining information <br>
                        about or related to a domain name registration record. VeriSign does not <br>
                        guarantee its accuracy. By submitting a Whois query, you agree to abide <br>
                        by the following terms of use: You agree that you may use this Data only <br>
                        for lawful purposes and that under no circumstances will you use this Data <br>
                        to: (1) allow, enable, or otherwise support the transmission of mass <br>
                        unsolicited, commercial advertising or solicitations via e-mail, telephone, <br>
                        or facsimile; or (2) enable high volume, automated, electronic processes <br>
                        that apply to VeriSign (or its computer systems). The compilation, <br>
                        repackaging, dissemination or other use of this Data is expressly <br>
                        prohibited without the prior written consent of VeriSign. You agree not to <br>
                        use electronic processes that are automated and high-volume to access or <br>
                        query the Whois database except as reasonably necessary to register <br>
                        domain names or modify existing registrations. VeriSign reserves the right <br>
                        to restrict your access to the Whois database in its sole discretion to ensure <br>
                        operational stability. VeriSign may restrict or terminate your access to the <br>
                        Whois database for failure to abide by these terms of use. VeriSign <br>
                        reserves the right to modify these terms at any time. <br><br>

                        The Registry database contains ONLY .COM, .NET, .EDU domains and <br>
                        Registrars.
                        </pre>
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
