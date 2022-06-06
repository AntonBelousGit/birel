@extends('layouts.app')

@section('front_style')
    <link rel="stylesheet" href="{{ asset('css/pages/page-terms-of-use.min.css') }}">
@endsection

@section('front_scripts')
    <script src="{{ asset('js/pages/page-mission.min.js')}}" type="module"></script>
@endsection

@section('content')

    <main class="bg-site">

        <div class="container">
            <div class="tou-box">
                @include('front.layouts.nav')
                <div class="text-tou">
                    <h1 class="t-sb f36-l42 purple1">
                        Terms of Use
                    </h1>
                    <h4 class="t-r f18-l32 lite-grey">
                        Version 2107.02•September 30, 2021
                    </h4>
                    <p class="t-r f18-l32 purple2">
                        Forge Global, Inc. and its affiliated companies (<strong>“Forge”</strong>, us, we, etc.)
                        collectively publish
                        and operate a
                        software platform, marketplace, and service (together, the <strong>“Platform”</strong>), to
                        facilitate
                        transactions in secondary
                        markets (the <strong>“Transactions”</strong>) of and relating to shares of private companies
                        (the
                        <strong>“Shares”</strong>).
                        The Platform is
                        available on the website forgeglobal.com and via Forge mobile application (collectively, the
                        <strong>“Site”</strong>).
                        <br><br>
                        These Terms of Use (the <strong>“Terms”</strong>) are a binding agreement between Forge on the
                        one
                        hand, and the
                        individual
                        (“you”) who accesses, browses, or in any way uses the Platform, the Site, any other related
                        application, any
                        services thereon, or other related services offered by Forge (all together, Forge’s <strong>“Services”</strong>).
                        <br><br>
                        By visiting the Site, using the Services, signing an agreement that incorporates these Terms,
                        registering as a
                        <strong>“Site Member”</strong> (as described below), or otherwise indicating or manifesting your
                        assent, you
                        acknowledge that you
                        have read, understood, agreed to enter into, and will abide by these Terms, Forge’s Privacy
                        Policy
                        as described
                        below, and all notices, rules, policies, and procedures that we may publish on the Site.
                        <br><br>
                        If you use the Services as an approved proxy for another individual (e.g. your work supervisor
                        or a
                        client)
                        and/or on behalf of one or more business entities you, or they own, manage, or advise (such as
                        funds
                        or holding
                        companies), then you agree to these Terms on your own behalf and on behalf of those individuals
                        and
                        entities (to
                        which references to “you” also apply), and may only use the Services if you have the authority
                        from
                        each such
                        individual and entity to do so. If you setup multiple accounts, or multiple entity listings
                        within
                        an account,
                        you are making a separate agreement between each of them and Forge.
                        <br><br>
                        If at any time you do not agree with these Terms or the Privacy Policy, do not use or continue
                        to
                        use the Site
                        or the Services.
                    </p>
                    <h2 class="t-sb f30-l42 purple2">
                        Description of Transactions
                    </h2>
                    <p class="t-r f18-l32 purple2">
                        Forge facilitates Transactions between (i) <strong>“Shareholders”</strong>, who own Shares,
                        either
                        directly or
                        by virtue of
                        holding instruments relating to shares such as options, futures contracts, or interests in
                        holding
                        companies
                        that own Shares, and (ii) <strong>“Investors”</strong> who contemplate gaining investment
                        exposure
                        to Shares.
                        You may access the
                        Site as a Shareholder, an Investor, or both. If you are not a Shareholder or potential Investor,
                        but
                        wish to
                        examine the Platform as a student, researcher, scholar, analyst, journalist, auditor,
                        investigator,
                        private
                        equity broker, as an advisor to Shareholders and Investors, or in some other role, your access
                        to
                        certain Site
                        and Service functionality will be limited or blocked, including among other things the ability
                        to
                        place
                        Transaction requests or close Transactions.
                        <br><br>
                        Transactions may be initiated through the Site, or off-site by email, telephone, or other means,
                        but
                        in any case
                        under the auspices of duly licensed broker-dealers affiliated with Forge (the
                        <strong>“Brokers”</strong>). One a
                        Transaction is
                        pending, the Broker will circulate an electronic link to a closing service (the <strong>“Closing
                            Platform”</strong>) that, among
                        other things, contains agreements appropriate to memorialize any transaction terms, including
                        any
                        provisions
                        regarding commissions, nondisclosure of confidential information, non-circumvention, and other
                        terms,
                        conditions, notices, and disclosures that are customary to govern the Transaction (the <strong>“Transaction
                            Documents”</strong>).
                        <br><br>
                        The Closing Platform is part of the Site, and your use of the Closing Platform and associated
                        Services is
                        conditioned on your accepting these Terms. On your request, as an alternative to the Closing
                        Platform, we may
                        circulate documents by email, third party electronic signature service, or paper documents.
                    </p>
                </div>
            </div>
        </div>


    </main>

@endsection
