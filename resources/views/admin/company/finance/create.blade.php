@extends('admin.layouts.app')

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Create Company Finance</h2>
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
                        <form action="{{ route('company.id.financing.store',['company'=> $company]) }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" class="form-control" name="date" placeholder="Date"
                                       value="{{old('date')}}">
                            </div>
                            <div class="form-group">
                                <label>Transaction Name</label>
                                <input type="text" class="form-control" name="transaction_name"
                                       placeholder="Transaction Name" value="{{old('transaction_name')}}">
                            </div>
                            <div class="form-group">
                                <label>Amount raised</label>
                                <input type="number" min="0" step="1" class="form-control" name="amount_raised"
                                       placeholder="Amount raised" value="{{old('amount_raised')}}">
                            </div>
                            <div class="form-group">
                                <label>Raised To Date</label>
                                <input type="number" min="0" step="1" class="form-control" name="raised_to_date"
                                       placeholder="Raised To Date" value="{{old('raised_to_date')}}">
                            </div>
                            <div class="form-group">
                                <label>Issue Price</label>
                                <input type="number" min="0" step="1" class="form-control" name="issue_price"
                                       placeholder="Issue Price" value="{{old('issue_price')}}">
                            </div>
                            <div class="form-group">
                                <label>Post Money Valuation</label>
                                <input type="number" min="0" step="1" class="form-control" name="post_money_valuation"
                                       placeholder="Post Money Valuation" value="{{old('post_money_valuation')}}">
                            </div>
                            <div class="form-group">
                                <label>Key Investors</label>
                                <input type="text"  class="form-control" name="key_investors"
                                       placeholder="Key Investors" value="{{old('key_investors')}}">
                            </div>


                            <hr>
                            <div class="form-group">
                                <label>Price Per Share</label>
                                <input type="number" min="0" step="0.1" class="form-control" name="info[price_per_share]"
                                       placeholder="Price Per Share" value="{{old('info[price_per_share]')}}">
                            </div>
                            <div class="form-group">
                                <label>Liquidation Pref Order</label>
                                <input type="text"  class="form-control" name="info[liquidation_pref_order]"
                                       placeholder="Liquidation Pref Order" value="{{old('info[liquidation_pref_order]')}}">
                            </div>
                            <div class="form-group">
                                <label>Dividend Rate</label>
                                <input type="number" min="0" step="0.1" class="form-control" name="info[dividend_rate]"
                                       placeholder="Dividend Rate" value="{{old('info[dividend_rate]')}}">
                            </div>
                            <div class="form-group">
                                <label>Investors</label>
                                <input type="text"  class="form-control" name="info[investors]"
                                       placeholder="Investors" value="{{old('info[investors]')}}">
                            </div>
                            <div class="form-group">
                                <label>Shares Outstanding</label>
                                <input type="text"  class="form-control" name="info[shares_outstanding]"
                                       placeholder="Shares Outstanding" value="{{old('info[shares_outstanding]')}}">
                            </div>
                            <div class="form-group">
                                <label>Liquidation Pref As Multiplier</label>
                                <input type="number" min="0" step="0.1" class="form-control" name="info[liquidation_pref_as_multiplier]"
                                       placeholder="Liquidation Pref As Multiplier" value="{{old('info[liquidation_pref_as_multiplier]')}}">
                            </div>
                            <div class="form-group">
                                <label>Cumulative</label>
                                <input type="text"  class="form-control" name="info[cumulative]"
                                       placeholder="Cumulative" value="{{old('info[cumulative]')}}">
                            </div>
                            <div class="form-group">
                                <label>Percent Shares Outstanding</label>
                                <input type="number" min="0" step="0.1" class="form-control" name="info[percent_shares_outstanding]"
                                       placeholder="Percent Shares Outstanding" value="{{old('info[percent_shares_outstanding]')}}">
                            </div>
                            <div class="form-group">
                                <label>Conversion Rate</label>
                                <input type="number" min="0" step="0.1" class="form-control" name="info[conversion_rate]"
                                       placeholder="Conversion Rate" value="{{old('info[conversion_rate]')}}">
                            </div>
                            <div class="form-group">
                                <label>Participating</label>
                                <input type="text"  class="form-control" name="info[participating]"
                                       placeholder="Participating" value="{{old('info[participating]')}}">
                            </div>
                            <div class="form-group">
                                <label>Participation Cap</label>
                                <input type="text"  class="form-control" name="info[participation_cap]"
                                       placeholder="Participation Cap" value="{{old('info[participation_cap]')}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
