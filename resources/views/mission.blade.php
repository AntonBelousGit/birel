@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/pages/page-mission.min.css') }}">
<main class="bg-site">
	<div class="container">
		<div class="content-block-grid">
	<div class="content-block-title">
		<h1 class="title b b2 f54-l70 purple1"><span>Makes</span> private equity <span>flexible</span></h1>
		<p class="t-r f18-l32 purple2">
			By uniting all positions in the private equity market, Birel delivers liquidity to non-listed assets and
			transparency by directly connecting the parties to a transaction. In other words, it is an equity
			marketplace for buyers and sellers in the secondary market.
		</p>
	</div>
	<div class="content-block-img">
		<picture><source srcset="./img/Frame12.webp" type="image/webp"><img src="./img/Frame12.png" alt=""></picture>
	</div>
	<div class="content-block-text">
		<div id="f-bg3">
		
		</div>
		<p class="t-r f18-l32 green">
			Birel's goal is to popularize the secondary market as a liquidity tool by accumulating supply and demand in
			one place, ultimately offering an effective solution for the sale and purchase of the private assets.
		</p>
	</div>
</div>
	</div>
	<div class="container">
		<div class="content-block work">
	<div class="content-block-left">
		<picture><source srcset="./img/Frame36.webp" type="image/webp"><img src="./img/Frame36.png" alt=""></picture>
	</div>
	<div class="content-block-right">
		<h2 class="title s f54-l70 purple1">How it work</h2>
		<p class="t-r f18-l32 purple2">
			Full transparency for both parties - participants see all the current BID/ASK posted on Birel and get the
			opportunity to communicate directly with the buyer or seller.
		</p>
		<ul class="list-box">
			<li class="list-box-item t-r f18-l32 purple2">
				Send us your BID/ASK after reviewing we will add it to the list.
			</li>
			<li class="list-box-item t-r f18-l32 purple2">
				We connect you to the buyer/seller when orders overlap, close to each other or if you have a specific
				interest in BID/ASK from the Birel list.
			</li>
			<li class="list-box-item t-r f18-l32 purple2">
				You discuss the acceptable terms for both parties for the deal to take place.
			</li>
		</ul>
		<button class="btn w170" type="button">Add BID/ASK</button>
	</div>
</div>
	</div>
</main>
<script src="{{ asset('js/pages/page-mission.js')}}" type="module"></script>
@endsection
