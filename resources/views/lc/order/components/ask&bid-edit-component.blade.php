<div class="content-t {{$active}}">
    <form class="add-order-ask" action="{{ route('order-lc.update',$order) }}" method="POST" id='form'>
        @csrf
        @method('put')
        <div class="ask">
            <input type="hidden" name="type" value="{{$order->type}}">
            <div class="ask-block c-n">
                <h2 class="t-sb f22-l25 purple3">Company Name</h2>
                <p class="t-r f16-l24 purple2">You can choose deal structure: direct, spv, forward contract
                    or primary
                    round.
                </p>
                <div class="select">
                    <select class="js-example-basic-single w400" required name="company_id">
                        <option value="0" selected disabled>Choose</option>
                        @foreach($companies as $company)
                            <option value="{{$company->id}}" {{$company->id == $order->company_id? 'selected':''}}>{{$company->companyName}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="ask-block d-s">
                <h2 class="t-sb f22-l25 purple3">Deal Structure</h2>
                <p class="t-r f16-l24 purple2">You can choose deal structure: direct, spv, forward contract
                    or primary
                    round.
                </p>
                <select  class="js-example-basic-single w400" name="deal_structure" required>
                    <option value="Choose" disabled>Choose</option>
                    <option value="direct" {{$order->deal_structure == 'direct'? 'selected':''}}>Direct</option>
                    <option value="spv" {{$order->deal_structure == 'spv'? 'selected':''}}>Spv</option>
                    <option value="forward contract" {{$order->deal_structure == 'forward contract'? 'selected':''}}>Forward contract</option>
                    <option value="direct or spv" {{$order->deal_structure == 'direct or spv'? 'selected':''}}>Direct or spv</option>
                    <option value="any" {{$order->deal_structure == 'any'? 'selected':''}}>Any</option>
                </select>
            </div>
            <div class="ask-block s">
                <h2 class="t-sb f22-l25 purple3">Details</h2>
                <p class="t-r f16-l24 purple2">Here you can enter important details. For example, SPV - layers, management fee, carry ... / Escrow / ROFR / requirements for the second side of the transaction and so on.</p>
                <textarea class="i-f f14-l16 w400 h235" cols="30" rows="10" name="description"
                          placeholder="Enter the Text">{{$order->description}}</textarea>
            </div>
            <div class="ask-block i" id="{{$id}}">
                <h2 class="t-sb f22-l25 purple3">Information</h2>
                <ul class="nav-tabs ">
                    <li class="t-m f18-l32 purple1 tab-n2 {{!empty($order->share_number)?'active':''}}">
                        Price
                    </li>
                    <li class="t-m f18-l32 purple1 tab-n2 {{!empty($order->valuation)?'active':''}}">
                        Valuation
                    </li>
                </ul>
                <div class="content-t2 {{!empty($order->share_number)?'active':''}}">
                    @if(empty($order->share_number))
                        @include('lc.order.components.empty.empty-price-edit-bid_ask')
                    @else
                        <div class="ask-block-info">
                            <label class="t-r f16-l24 purple1" for="{{$share_type}}">
                                Share Type
                            </label>
                            <select class="js-example-basic-single w400" id="{{$share_type}}" name="share_type" required>
                                <option value="Choose" disabled>Choose</option>
                                <option value="Preferred" {{$order->share_type == 'Preferred'? 'selected':''}}>Preferred</option>
                                <option value="Common" {{$order->share_type == 'Common'? 'selected':''}}>Common</option>
                                <option value="Preferred and Common" {{$order->share_type == 'Preferred and Common'? 'selected':''}}>Preferred and Common</option>
                                <option value="any" {{$order->share_type == 'any'? 'selected':''}}>Any</option>
                            </select>
                        </div>
                        <div class="ask-block-info">
                            <div class="wrapper-radio">
                                <div class="form_radio">
                                    <label class="t-r f14-l16 purple1">
                                        <input type="radio" id="{{$share_type_currency1}}" name="share_type_currency" value="$" required {{$order->share_type_currency == '$'? 'checked':''}}>
                                        <span></span>
                                        $
                                    </label>
                                </div>
                                <div class="form_radio">
                                    <label class="t-r f14-l16 purple1">
                                        <input type="radio" id="{{$share_type_currency2}}" name="share_type_currency" value="€" required {{$order->share_type_currency == '€'? 'checked':''}}>
                                        <span></span>
                                        €
                                    </label>
                                </div>
                            </div>
                            <label class="t-r f16-l24 purple1" for="{{$share_price}}">Share Price</label>
                            <input class="i-f w400 m-bid" type="number" id="{{$share_price}}"
                                   placeholder="Enter the Price" name="share_price" required value="{{$order->share_price}}">
                        </div>
                        <div class="ask-block-info">
                            <label class="t-r f16-l24 purple1" for="{{$share_number}}">Share Number</label>
                            <input class="i-f w400 m-bid" type="number" id="{{$share_number}}"
                                   placeholder="Enter the Number" name="share_number" required value="{{$order->share_number}}">
                        </div>
                        <div class="ask-block-info">
                            <label class="t-r f16-l24 purple1" for="{{$volume}}">Volume</label>
                            <input class="i-f w400" type="number" id="{{$volume}}" name="volume" required value="{{$order->volume}}" placeholder="Enter the Volume">
                            <button class="btn-green w265" type="button" id="{{$btn_calc}}">
                                Calculate
                            </button>
                            <div class=" t-r f14-l16 red error"></div>
                        </div>
                    @endif

                </div>
                <div class="content-t2 {{!empty($order->valuation)?'active':''}}">
                    @if(empty($order->valuation))
                        @include('lc.order.components.empty.empty-valuation-edit-bid_ask')
                    @else
                        <div class="ask-block-info">
                            <label class="t-r f16-l24 purple1" for="{{$share_type2}}">Share Type</label>
                            <select class="js-example-basic-single w400" id="{{$share_type2}}" name="share_type">
                                <option value="Choose" disabled>Choose</option>
                                <option value="Preferred" {{$order->share_type == 'Preferred'? 'selected':''}}>Preferred</option>
                                <option value="Common" {{$order->share_type == 'Common'? 'selected':''}}>Common</option>
                                <option value="Preferred and Common" {{$order->share_type == 'Preferred and Common'? 'selected':''}}>Preferred and Common</option>
                                <option value="any" {{$order->share_type == 'any'? 'selected':''}}>Any</option>
                            </select>
                        </div>
                        <div class="ask-block-info">
                            <label class="t-r f16-l24 purple1" for="{{$volume2}}">Volume</label>
                            <input class="i-f w400" type="number" id="{{$volume2}}" placeholder="Enter the Volume" name="volume"  value="{{$order->volume}}">
                        </div>
                        <div class="ask-block-info">
                            <label class="t-r f16-l24 purple1" for="{{$share_number2}}">Valuation</label>
                            <input class="i-f w400" type="number" id="{{$share_number2}}" name="valuation"
                                   placeholder="Enter the Valuation" value="{{$order->valuation}}">
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="add-order-btn">
            <button class="btn w265" id='submit_orm' type='submit'>
                Update
            </button>
        </div>
    </form>
</div>
