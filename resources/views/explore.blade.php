@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/pages/page-explore.min.css') }}">
<main class="bg-site">
	
	<div class="container">
		<div class="content-text">
	<h1 class="title b b2 f54-l70 purple1">
		<span>How Birel Helps</span>
		Users Close Deals
	</h1>
	<p class="t-r f18-l32 purple2">
		Over the past decade, the secondary finance market has shown significant growth. This is an indicator that
		secondary transactions will be popularized as a liquidity tool and a type of investment.
	</p>
	<p class="t-r f18-l32 purple2">
		Investors who have fulfilled the profit target in portfolio companies are waiting for an IPO to get
		liquidity. Is it practical when time is the most precious resource and profits can be reinvested for an even
		greater return on the investment? and a lot of other reasons for the growth ...
	</p>
</div>
	</div>
	
	<div class="container">
		<div class="content-features">
	<div class="content-features-cont">
		<div class="content-features-search">
			<div class="content-features-img">
				<picture><source srcset="./img/img2-explore.svg" type="image/webp"><img src="./img/img2-explore.svg" alt=""></picture>
			</div>
			<div class="content-features-text">
				<h3 class="purple1 t-sb f36-l42">SPU</h3>
				<p class="t-r f18-l32 purple2">Active positions are visible to all network members. This enables the
					shareholders of private high-tech companies to understand the real value of their assets and
					liquidity options.</p>
			</div>
		</div>
		<div class="content-features-shield">
			<div class="content-features-img">
				<picture><source srcset="./img/img1-explore.svg" type="image/webp"><img src="./img/img1-explore.svg" alt=""></picture>
			</div>
			<div class="content-features-text">
				<h3 class="purple1 t-sb f36-l42">Direct</h3>
				<p class="t-r f18-l32 purple2">Preference to directly connect the buyer with the seller, this gives the
					Birel participants the opportunity to receive the most relevant information and find mutually
					beneficial terms for the transaction during direct the negotiations.</p>
			</div>
		</div>
		<div class="content-features-arrow">
			<div class="content-features-img">
				<picture><source srcset="./img/img3-explore.svg" type="image/webp"><img src="./img/img3-explore.svg" alt=""></picture>
			</div>
			<div class="content-features-text">
				<h3 class="purple1 t-sb f36-l42">Forward</h3>
				<p class="t-r f18-l32 purple2">Birel focuses on Venture-backed high-profile companies that have closed
					rounds D, E, F…. with $300 million - $1 billion+ valuation. The volume in applications starts from 1
					million to 100+ million. This enables the sellers to realize the entire volume in one or several
					transactions.</p>
			</div>
		</div>
	</div>
</div>
	</div>
</main>
@endsection