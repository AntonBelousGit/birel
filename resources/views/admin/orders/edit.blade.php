@extends('admin.layouts.app')

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Edit Order</h2>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @if($errors->any())
                {!! implode('', $errors->all('<div>:message</div>')) !!}
            @endif
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="form-control">
                        <form action="{{ route('orders.update',$order) }}" method="post" >
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="">User name</label>
                                <input type="text" class="form-control" placeholder="User Name"
                                       value="{{$order->user->name}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea type="text" class="form-control" placeholder="Description">{{$order->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Valuation</label>
                                <input type="text" class="form-control" name="valuation" placeholder="Valuation"
                                       value="{{$order->valuation}}">
                            </div>
                            <div class="form-group">
                                <label for="">Volume</label>
                                <input type="text" class="form-control" name="volume" placeholder="Volume"
                                       value="{{$order->volume}}">
                            </div>
                            <div class="form-group">
                                <label for="">Share price</label>
                                <input type="text" class="form-control" name="share_price" placeholder="Share price"
                                       value="{{$order->share_price}}">
                            </div>
                            <div class="form-group">
                                <label for="">Share number</label>
                                <input type="text" class="form-control" name="share_number" placeholder="Share number"
                                       value="{{$order->share_number}}">
                            </div>
                            <div class="form-group">
                                <label for="">Share number</label>
                                <input type="text" class="form-control" name="share_number" placeholder="Share number"
                                       value="{{$order->share_number}}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Deal Structure</label>
                                </div>
                                <select name="deal_structure" class="custom-select" required>
                                    <option value="direct" @if($order->deal_structure == 'direct') selected @endif>direct</option>
                                    <option value="spv" @if($order->deal_structure == 'spv') selected @endif>spv</option>
                                    <option value="forward contract" @if($order->deal_structure == 'forward contract') selected @endif>forward contract</option>
                                    <option value="direct or spv" @if($order->deal_structure == 'direct or spv') selected @endif>direct or spv</option>
                                    <option value="any" @if($order->deal_structure == 'any') selected @endif>any</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Share Type</label>
                                </div>
                                <select name="share_type" class="custom-select" required>
                                    <option value="Preferred" @if($order->share_type == 'Preferred') selected @endif>Preferred</option>
                                    <option value="Common" @if($order->share_type == 'Common') selected @endif>Common</option>
                                    <option value="Preferred and Common" @if($order->share_type == 'Preferred and Common') selected @endif>Preferred and Common</option>
                                    <option value="any" @if($order->share_type == 'any') selected @endif>Any</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Categories</label>
                                </div>
                                <select name="company_id" class="custom-select" required>
                                    @foreach($companies as $item)
                                        <option value="{{$item->id}}" @if($order->company_id == $item->id) selected @endif>{{$item->companyName}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="wrapper-radio">
                                <div class="form_radio">
                                    <label class="t-r f14-l16 purple1">
                                        <input type="radio" id="share_type_currency1" name="share_type_currency" value="usd" @if ($order->share_type_currency == 'usd') checked @endif>
                                        <span></span>
                                        $
                                    </label>
                                </div>
                                <div class="form_radio">
                                    <label class="t-r f14-l16 purple1">
                                        <input type="radio" id="share_type_currency2" name="share_type_currency" value="eur" @if ($order->share_type_currency == 'eur') checked @endif>
                                        <span></span>
                                        €
                                    </label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Share Type</label>
                                </div>
                                <select name="share_type" class="custom-select" required>
                                    <option value="active" @if($order->share_type == 'Preferred') selected @endif>Active</option>
                                    <option value="inactive" @if($order->share_type == 'Common') selected @endif>Inactive</option>
                                    <option value="moderation" @if($order->share_type == 'Preferred and Common') selected @endif>Moderation</option>
                                </select>
                            </div>
{{--                            <button type="submit" class="btn btn-primary">Submit</button>--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
