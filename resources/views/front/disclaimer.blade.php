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
                    <h1>
                        Disclaimer
                    </h1>
                    <p>
                        Dear User, please, note the following disclaimer about the Website and the Online Service.

                        <br><br>The Website doesn’t contain any offers or proposals to buy or sell any types of shares or any other financial recommendations.
                        <br>The Company’s Entity (definition you can find in the Terms and Conditions) does not
                        <br>(a) make any recommendations or otherwise advise any User on the merits or advisability of a particular investment or transaction, or
                        <br>(b) assist in the determination of the fair value of any security or investment, or
                        <br>(c) provide legal, tax or transactional advisory services.
                        <br>Any information relating to fully diluted shares outstanding or other company related financing or capitalization information are estimates only and should be independently verified by each user in connection with any investment decision. The Company is not responsible for any Materials or Files that were provided by the Users.
                        <br>The User must be prepared to withstand a total loss of your investment. Private company securities are also highly illiquid and there is no guarantee that a market will develop for such securities. Each investment also carries its own specific risks, and you should complete your own independent due diligence regarding the investment, including obtaining additional information about the company, opinions, financial projections and legal or other investment advice.
                        <br>Using the Website or the information, tools, features, or functionality provided on the Website constitutes acceptance of Terms & Conditions, Privacy Policy and other legal terms that are posted on the Website.
                    </p>
                </div>
            </div>
        </div>
    </main>

@endsection
