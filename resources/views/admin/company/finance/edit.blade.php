@extends('admin.layouts.app')

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Edit Company Finance</h2>
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
                        <form action="{{ route('company.id.financing.update',['company'=> $company,'companyFinance'=>$finance]) }}" method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" name="date" placeholder="Date"
                                       value="{{old('date',$finance->date->format('Y-m-d'))}}" id="date">
                            </div>
                            <div class="wrapper-radio">
                                <div class="form_radio">
                                    <label class="t-r f14-l16 purple1">
                                        <input type="radio" id="share_type_currency1" name="type_currency]"
                                               value="$" @if ($finance->type_currency == '$') checked @endif>
                                        <span></span>
                                        $
                                    </label>
                                </div>
                                <div class="form_radio">
                                    <label class="t-r f14-l16 purple1">
                                        <input type="radio" id="share_type_currency2" name="type_currency"
                                               value="€" @if ($finance->type_currency == '€') checked @endif>
                                        <span></span>
                                        €
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="transaction_name">Transaction Name</label>
                                <input type="text" class="form-control" name="transaction_name"
                                       placeholder="Transaction Name" value="{{old('transaction_name',$finance->transaction_name)}}" id="transaction_name">
                            </div>
                            <div class="form-group">
                                <label class="amount_raised">Amount raised</label>
                                <input type="number" min="0" step="0.01" class="form-control" name="amount_raised"
                                       placeholder="Amount raised" value="{{old('transaction_name',$finance->amount_raised)}}" id="amount_raised">
                            </div>
                            <div class="form-group">
                                <label class="raised_to_date">Raised To Date</label>
                                <input type="number" min="0" step="0.01" class="form-control" name="raised_to_date"
                                       placeholder="Raised To Date" value="{{old('raised_to_date',$finance->raised_to_date)}}" id="raised_to_date">
                            </div>
                            <div class="form-group">
                                <label for="issue_price">Issue Price</label>
                                <input type="number" min="0" step="0.01" class="form-control" name="issue_price"
                                       placeholder="Issue Price" value="{{old('issue_price',$finance->issue_price)}}" id="issue_price">
                            </div>
                            <div class="form-group">
                                <label for="post_money_valuation">Post Money Valuation</label>
                                <input type="number" min="0" step="0.01" class="form-control" name="post_money_valuation"
                                       placeholder="Post Money Valuation" value="{{old('post_money_valuation',$finance->post_money_valuation)}}" id="post_money_valuation">
                            </div>
                            <div class="form-group">
                                <label for="key_investors">Key Investors</label>
                                <input type="text"  class="form-control" name="key_investors"
                                       placeholder="Key Investors" value="{{old('key_investors',$finance->key_investors)}}" id="key_investors">
                            </div>

                            <hr>
                            <div class="form-group">
                                <label for="price_per_share">Price Per Share</label>
                                <input id="price_per_share" type="text" class="form-control" name="info[price_per_share]"
                                       placeholder="125.00" value="{{old('info["price_per_share"]',$finance->info?->price_per_share)}}">
                            </div>
                            <div class="wrapper-radio">
                                <div class="form_radio">
                                    <label class="t-r f14-l16 purple1">
                                        <input type="radio" id="share_type_currency1" name="info[type_currency]"
                                               value="$" @if ($finance->info?->type_currency == '$') checked @endif>
                                        <span></span>
                                        $
                                    </label>
                                </div>
                                <div class="form_radio">
                                    <label class="t-r f14-l16 purple1">
                                        <input type="radio" id="share_type_currency2" name="info[type_currency]"
                                               value="€" @if ($finance->info?->type_currency == '€') checked @endif>
                                        <span></span>
                                        €
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="liquidation_pref_order">Liquidation Pref Order</label>
                                <input id="liquidation_pref_order" type="text"  class="form-control" name="info[liquidation_pref_order]"
                                       placeholder="2nd" value="{{old('info[liquidation_pref_order]',$finance->info?->liquidation_pref_order)}}">
                            </div>
                            <div class="form-group">
                                <label for="dividend_rate">Dividend Rate</label>
                                <input id="dividend_rate" type="text" class="form-control" name="info[dividend_rate]"
                                       placeholder="6.0%" value="{{old('info[dividend_rate]',$finance->info?->dividend_rate)}}">
                            </div>
                            <div class="form-group">
                                <label for="investors">Investors</label>
                                <input id="investors" type="text"  class="form-control" name="info[investors]"
                                       placeholder="Investors text" value="{{old('info[investors]',$finance->info?->investors)}}">
                            </div>
                            <div class="form-group">
                                <label for="shares_outstanding">Shares Outstanding</label>
                                <input id="shares_outstanding" type="text"  class="form-control" name="info[shares_outstanding]"
                                       placeholder="1,029,126" value="{{old('info[shares_outstanding]',$finance->info?->shares_outstanding)}}">
                            </div>
                            <div class="form-group">
                                <label for="liquidation_pref_as_multiplier">Liquidation Pref As Multiplier</label>
                                <input id="liquidation_pref_as_multiplier" type="text" class="form-control" name="info[liquidation_pref_as_multiplier]"
                                       placeholder="1.0x" value="{{old('info[liquidation_pref_as_multiplier]',$finance->info?->liquidation_pref_as_multiplier)}}">
                            </div>
                            <div class="form-group">
                                <label for="cumulative">Cumulative</label>
                                <input id="cumulative" type="text"  class="form-control" name="info[cumulative]"
                                       placeholder="Cumulative" value="{{old('info[cumulative]',$finance->info?->cumulative)}}">
                            </div>
                            <div class="form-group">
                                <label for="percent_shares_outstanding">Percent Shares Outstanding</label>
                                <input id="percent_shares_outstanding" type="text" class="form-control" name="info[percent_shares_outstanding]"
                                       placeholder="0.3%" value="{{old('info[percent_shares_outstanding]',$finance->info?->percent_shares_outstanding)}}">
                            </div>
                            <div class="form-group">
                                <label for="conversion_rate">Conversion Rate</label>
                                <input id="conversion_rate" type="text" class="form-control" name="info[conversion_rate]"
                                       placeholder="1.0x" value="{{old('info[conversion_rate]',$finance->info?->conversion_rate)}}">
                            </div>
                            <div class="form-group">
                                <label for="participating">Participating</label>
                                <input id="participating" type="text"  class="form-control" name="info[participating]"
                                       placeholder="Non-participating" value="{{old('info[participating]',$finance->info?->participating)}}">
                            </div>
                            <div class="form-group">
                                <label for="participation_cap">Participation Cap</label>
                                <input id="participation_cap" type="text"  class="form-control" name="info[participation_cap]"
                                       placeholder="N/A" value="{{old('info[participation_cap]',$finance->info?->participation_cap)}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
