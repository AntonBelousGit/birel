@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{asset('css/pages/page-lc-edit-order.min.css')}}">
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
                    <input id="company" type="text" class="i-f " disabled value="{{$order->company->companyName}}" placeholder="Enter the Company">
                </div>
                <div class="edit-wrapper-box">
                    <label for="deal-structure" class="t-r f16-l24 purple1">Deal Structure</label>
                    <input id="deal-structure" type="text" class="i-f " disabled value="{{$order->deal_structure}}" placeholder="Enter the Deal Structure">
                </div>

                @if(empty($order->share_number))
                    @include('lc.order.components.empty.empty-numver-lfo')
                @else
                    <div class="wrapper-cont">
                        <h2 class="t-m f18-l32 purple3">Number shares</h2>
                        <div class="edit-wrapper-box">
                            <label for="share-type" class="t-r f16-l24 purple1">Share Type</label>
                            <input id="share-type" type="text" class="i-f " disabled value="{{$order->share_type}}" placeholder="Enter the Type">
                        </div>
                        <div class="edit-wrapper-box">
                            <label for="share-number" class="t-r f16-l24 purple1">Share Number</label>
                            <input id="share-number" type="text" class="i-f " disabled value="{{$order->share_number}}" placeholder="Enter the Number">
                        </div>
                    </div>
                @endif
                @if(empty($order->volume))
                    @include('lc.order.components.empty.empty-volume')
                @else
                    <div class="wrapper-cont">
                        <h2 class="t-m f18-l32 purple3">Block volume</h2>
                        <div class="edit-wrapper-box">
                            <label for="share-type2" class="t-r f16-l24 purple1">Share Type</label>
                            <input id="share-type2" type="text" class="i-f " disabled value="{{$order->share_type}}" placeholder="Enter the Type">
                        </div>
                        <div class="edit-wrapper-box">
                            <label for="volume2" class="t-r f16-l24 purple1">Volume</label>
                            <input id="volume2" type="text" class="i-f " disabled value="{{$order->volume}}" placeholder="Enter the Volume">
                        </div>
                    </div>
                @endif

            </div>
            <div class="edit-right">
                <h2 class="t-sb f22-l25 purple3">Details</h2>
                <div class="edit-wrapper-box">
                    <label for="description" class="t-r f16-l24 purple3">
                        Here you can enter important details. For example, SPV - layers, management fee, carry ... / Escrow / ROFR / requirements for the second side of the transaction and so on.
                    </label>
                    <textarea id="description" cols="30" rows="10" class="i-f f14-l16 purple3 h235" disabled placeholder="Enter the Text">{{$order->description}}</textarea>
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



