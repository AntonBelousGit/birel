@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{asset('css/pages/page-lc-')}}">
@endsection

@section('content')
    <section class="">
        <form action="#" class="">
            <div class="">
                <h1 class="t-sb f22-l25 purple3">Order #123456</h1>
                <h3 class="t-r f16-l24 purple1">ASK</h3>
                <div class="">
                    <label for="company" class="t-r f16-l24 purple1">Company</label>
                    <input id="company" type="text" class="i-f w170">
                </div>
                <div class="">
                    <label for="deal-structure" class="t-r f16-l24 purple1">Deal Structure</label>
                    <input id="deal-structure" type="text" class="i-f w170">
                </div>
                <div class="">
                    <label for="share-type" class="t-r f16-l24 purple1">Share Type</label>
                    <input id="share-type" type="text" class="i-f w170">
                </div>
                <div class="">
                    <label for="share-price" class="t-r f16-l24 purple1">Share Price</label>
                    <input id="share-price" type="text" class="i-f w170">
                </div>
                <div class="">
                    <label for="share-number" class="t-r f16-l24 purple1">Share Number</label>
                    <input id="share-number" type="text" class="i-f w170">
                </div>
                <div class="">
                    <label for="volume" class="t-r f16-l24 purple1">Volume</label>
                    <input id="volume" type="text" class="i-f w170">
                </div>
            </div>
            <div class="">
                <h2 class="t-sb f22-l25 purple3">Description</h2>
                <div class="">
                    <label for="description" class="t-r f16-l24 purple1">
                        You can choose deal structure: direct , spv , forward contract or primary round.
                    </label>
                    <textarea name="" id="description" cols="30" rows="10" class=""></textarea>
                </div>
            </div>
        </form>
        <div class="">
            <button class="btn w265">
                Submit
            </button>
        </div>
    </section>
@endsection


