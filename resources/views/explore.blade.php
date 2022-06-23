@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/pages/page-explore.min.css') }}">
<main class="bg-site">

	<div class="container">
		<div class="content-cont">
            <div class="content-list-item">
                <div class="item_text">
                    <h1 class="title b b2 f54-l70 purple1"></h1>
                    <p class="t-r f24-l42 purple2">An open platform within which institutional and accredited investors place orders for the purchase and sale of capital of certain private companies and interact with each other.</p>
                </div>
                <div class="item_img">
                    <picture><source srcset="./img/explore_one.webp" type="image/webp"><img src="./img/explore_one.png" alt=""></picture>
                </div>
            </div>
            <div class="content-list-item">
                <div class="item_text">
                    <p class="t-r f24-l42 purple2"> ⁃ Transparency. Actual orders are placed on the pages of companies in the form of a list. All past orders are visible on the companies' page in the history section at the bottom of the orders.</p>
                </div>
                <div class="item_img">
                    <picture><source srcset="./img/explore-test.webp" type="image/webp"><img src="./img/explore-test.png" alt=""></picture>
                </div>

            </div>
            <div class="content-list-item">
                <div class="item_text">
                    <p class="t-r f24-l42 purple2">Provide the basic terms of your order to give the rest of the participants the information they need to make a decision and narrow down the number of targeted contacts.</p>
                    <ul class="list-wrapper t-r f24-l42 purple2">
                        <li class="list-wrapper-item">
                            The terms of the deal for the value of the shares or the overall valuation of the company.
                        </li>
                        <li class="list-wrapper-item">
                            Volume, by number of shares or total block value
                        </li>
                        <li class="list-wrapper-item">
                            Type of shares
                        </li>
                        <li class="list-wrapper-item">
                            Deal structure Direct SPV , Forward contract.
                        </li>
                        <li class="list-wrapper-item">
                            Description: Specify all the nuances of your order and the requirements for a potential buyer or seller, if any.
                        </li>
                    </ul>
                </div>
                <div class="item_img">
                    <picture><source srcset="./img/explore-6.webp" type="image/webp"><img src="./img/explore-6.png" alt=""></picture>
                </div>
            </div>
            <div class="content-list-item">
                <div class="item_text">
                    <p class="t-r f24-l42 purple2"> ⁃ On the pages of companies, it is possible to contact participants who placed orders, so participants can establish contact with each other directly, find mutually beneficial conditions, provide information about themselves and proceed to the transaction process.
                    </p>
                </div>
                <div class="item_img">
                    <picture><source srcset="./img/explore-test.webp" type="image/webp"><img src="./img/explore-test.png" alt=""></picture>
                </div>

            </div>
            <div class="content-list-item">
                <div class="item_text">
                    <p class="t-r f24-l42 purple2"> ⁃ For confidentiality purposes, orders do not display details about the participant who placed the order, this information is disclosed during personal correspondence. With regard to the secondary market, many prefer to disclose information about themselves only to buyers with serious intentions.</p>
                </div>
                <div class="item_img">
                    <picture><source srcset="./img/explore-test.webp" type="image/webp"><img src="./img/explore-test.png" alt=""></picture>
                </div>
            </div>
            <div class="content-list-item">
                <div class="item_text">
                    <p class="t-r f24-l42 purple2"> ⁃ The participant can subscribe to specific companies in order to receive notifications of new orders in them in a timely manner and not miss potential opportunities.</p>
                </div>
                <div class="item_img">
                    <picture><source srcset="./img/explore-3.webp" type="image/webp"><img src="./img/explore-3.png" alt=""></picture>
                </div>

            </div>
            <div class="content-list-item">
                <div class="item_text">
                    <p class="t-r f24-l42 purple2"> ⁃ Analyze the demand and prices of assets based on bids for the purchase and sale of assets thanks to this you can see the current price and liquidity of your assets.</p>
                </div>
                <div class="item_img">
                    <picture><source srcset="./img/explore-test.webp" type="image/webp"><img src="./img/explore-test.png" alt=""></picture>
                </div>
            </div>
        </div>
	</div>

	<div class="container">
		<div class="content-features">

        </div>
	</div>
</main>
<script src="./js/pages/page-explore.js" type="module"></script>
@endsection
