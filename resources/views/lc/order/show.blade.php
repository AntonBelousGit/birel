@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{asset('css/lib/daterangepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/page-lc-edit-order.min.css')}}">
@endsection

@section('scripts')
    <script src="{{asset('js/lib/moment.min.js')}}"></script>
    <script src="{{asset('js/lib/daterangepicker.min.js')}}"></script>
    <script src="{{asset('js/pages/page-lc-order.min.js')}}" type="module"></script>
    <script src="{{asset('js/pages/page-lc-order-all.min.js')}}" type="module"></script>
    <script src="{{asset('js/pages/page-lc-order-looking.min.js')}}" type="module"></script>
    <script src="{{asset('js/pages/page-lc-order-tender.min.js')}}" type="module"></script>
@endsection

@section('content')
{{--    @dump($order)--}}
    <section class="edit">
        <div class="edit-wrapper">
            <div class="edit-left">
                <h1 class="t-sb f22-l25 purple3">Order #{{$order->id}}</h1>
                <h3 class="t-r f16-l24 purple1">{{$order->type}}</h3>
                <div class="edit-wrapper-box">
                    <label for="company" class="t-r f16-l24 purple1">Company</label>
                    <input id="company" type="text" class="i-f " disabled value="{{$order->company->companyName}}">
                </div>
                <div class="edit-wrapper-box">
                    <label for="deal-structure" class="t-r f16-l24 purple1">Deal Structure</label>
                    <input id="deal-structure" type="text" class="i-f " disabled value="{{$order->deal_structure}}">
                </div>

                @if(empty($order->share_number))
                    @include('lc.order.components.empty.empty-price')
                @else
                    <div class="wrapper-cont">
                        <h2 class="t-m f18-l32 purple3">Price</h2>
                        <div class="edit-wrapper-box">
                            <label for="share-type" class="t-r f16-l24 purple1">Share Type</label>
                            <input id="share-type" type="text" class="i-f " disabled value="{{$order->share_type}}">
                        </div>
                        <div class="edit-wrapper-box">
                            <div class="box-currency ">
                                {{$order->share_type_currency}}
                            </div>
                            <label for="share-price" class="t-r f16-l24 purple1">Share Price</label>
                            <input id="share-price" type="text" class="i-f " disabled
                                   value="{{$order->share_type_currency}}">
                        </div>
                        <div class="edit-wrapper-box">
                            <label for="share-number" class="t-r f16-l24 purple1">Share Number</label>
                            <input id="share-number" type="text" class="i-f " disabled value="{{$order->share_number}}">
                        </div>
                        <div class="edit-wrapper-box">
                            <label for="volume" class="t-r f16-l24 purple1">Volume</label>
                            <input id="volume" type="text" class="i-f " disabled value="{{$order->volume}}">
                        </div>
                    </div>
                @endif
                @if(empty($order->valuation))
                    @include('lc.order.components.empty.empty-valuation')
                @else
                    <div class="wrapper-cont">
                        <h2 class="t-m f18-l32 purple3">Valuation</h2>
                        <div class="edit-wrapper-box">
                            <label for="share-type2" class="t-r f16-l24 purple1">Share Type</label>
                            <input id="share-type2" type="text" class="i-f " disabled value="{{$order->share_type}}">
                        </div>
                        <div class="edit-wrapper-box">
                            <label for="volume2" class="t-r f16-l24 purple1">Volume</label>
                            <input id="volume2" type="text" class="i-f " disabled value="{{$order->volume}}">
                        </div>
                        <div class="edit-wrapper-box">
                            <label for="valuation" class="t-r f16-l24 purple1">Valuation</label>
                            <input id="valuation" type="text" class="i-f " disabled value="{{$order->valuation}}">
                        </div>
                    </div>
                @endif

            </div>
            <div class="edit-right">
                <h2 class="t-sb f22-l25 purple3">Description</h2>
                <div class="edit-wrapper-box">
                    <label for="description" class="t-r f16-l24 purple3">
                        You can choose deal structure: direct , spv , forward contract or primary round.
                    </label>
                    <textarea id="description" cols="30" rows="10" class="i-f f14-l16 purple3 h235" disabled>{{$order->description}}</textarea>
                </div>
            </div>
        </div>
        <div class="edit-btn">
            <a class="btn btn-green w265" href="{{ route('order-lc.edit',$order) }}">
                Edit
            </a>
        </div>
    </section>
@endsection



