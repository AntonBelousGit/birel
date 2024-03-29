<div class="content-t {{$active}}">
    <form class="add-order-ask" action="{{ route('store-order') }}" method="POST">
        @csrf
        <div class="ask">
            <input type="hidden" name="type" value="{{$type}}">
            <div class="ask-block c-n">
                <h2 class="t-sb f22-l25 purple3">Company Name</h2>
                <p class="t-r f16-l24 purple2">You can choose deal structure: direct, spv, forward contract
                    or primary
                    round.
                </p>
                @php
                    $company_id = $company_id ?? '';
                @endphp
                <div class="select">
                    <select class="js-example-basic-single w400" required name="company_id">
                        <option value="0" selected disabled>Choose</option>
                        @foreach($companies as $company)
                            <option value="{{$company->id}}" @if ($company->id == $company_id) selected @endif>{{$company->companyName}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="ask-block-link">
                    <p class="t-r f14-l16 purple2">
                        You can offer to add company if the company is not listed.
                        <a class="" href="{{route('companies.create')}}">
                            <i class="icon icon-green-circle-plus"></i>
                        </a>
                    </p>
                </div>
            </div>
            <div class="ask-block d-s">
                <h2 class="t-sb f22-l25 purple3">Deal Structure</h2>
                <p class="t-r f16-l24 purple2">You can choose deal structure: direct, spv, forward contract
                    or primary
                    round.
                </p>
                <select  class="js-example-basic-single w400" name="deal_structure" required>
                    <option value="direct">direct</option>
                    <option value="spv">spv</option>
                    <option value="forward contract">forward contract</option>
                    <option value="direct or spv">direct or spv</option>
                    <option value="any">any</option>
                </select>
            </div>
            <div class="ask-block s">
                <h2 class="t-sb f22-l25 purple3">Details</h2>
                <p class="t-r f16-l24 purple2">Here you can enter important details. For example, SPV - layers, management fee, carry ... / Escrow / ROFR / requirements for the second side of the transaction and so on.</p>
                <textarea class="i-f f14-l16 w400 h235" cols="30" rows="10" name="description"
                          placeholder="Enter the Text"></textarea>
                <ul class="t-r f16-l24 purple2 list-help">
                    <li>
                        - Order will be placed for 45 days, after this period you can update order so that it remains valid for another 45 days (this is available in section my orders).
                    </li>
                    <li>
                        - You can place one order per company.
                    </li>
                    <li>
                        - You can edit the Share price or Valuation once during the first 30 days.
                    </li>
                </ul>
            </div>
            <div class="ask-block i" id="{{$id}}">
                <h2 class="t-sb f22-l25 purple3">Terms</h2>
                <ul class="nav-tabs ">
                    <li class="t-m f18-l32 purple1 tab-n2 active">
                        Price
                    </li>
                    <li class="t-m f18-l32 purple1 tab-n2 ">
                        Valuation
                    </li>
                </ul>
                <div class="content-t2 active">
                    <div class="ask-block-info">
                        <label class="t-r f16-l24 purple1" for="{{$share_type}}">
                            Share Type
                        </label>
                        <select class="js-example-basic-single w400" id="{{$share_type}}" name="share_type" required>
                            <option value="Preferred">Preferred</option>
                            <option value="Common">Common</option>
                            <option value="Preferred and Common">Preferred and Common</option>
                            <option value="any">Any</option>
                        </select>
                    </div>
                    <div class="ask-block-info">
                        <div class="wrapper-radio">
                            <div class="form_radio">
                                <label class="t-r f14-l16 purple1">
                                    <input type="radio" id="{{$share_type_currency1}}" name="share_type_currency" value="$" required checked>
                                    <span></span>
                                    $
                                </label>
                            </div>
                            <div class="form_radio">
                                <label class="t-r f14-l16 purple1">
                                    <input type="radio" id="{{$share_type_currency2}}" name="share_type_currency" value="€" required>
                                    <span></span>
                                    €
                                </label>
                            </div>
                        </div>
                        <label class="t-r f16-l24 purple1" for="{{$share_price}}">Share Price</label>
                        <input class="i-f w400 m-bid" type="number" id="{{$share_price}}"
                               placeholder="Enter the Price" name="share_price" required step="0.001">
                    </div>
                    <div class="ask-block-info">
                        <label class="t-r f16-l24 purple1" for="{{$share_number}}">Share Number</label>
                        <input class="i-f w400 m-bid" type="number" id="{{$share_number}}"
                               placeholder="Enter the number" name="share_number" required step="0.001">
                    </div>
                    <div class="ask-block-info">
                        <label class="t-r f16-l24 purple1" for="{{$volume}}">Volume</label>
                        <input class="i-f w400" type="number" id="{{$volume}}" name="volume" placeholder="Enter the Volume" required step="0.001">
                        <button class="btn-green w265" type="button" id="{{$btn_calc}}">
                            Calculate
                        </button>
                        <div class=" t-r f14-l16 red error"></div>
                    </div>
                </div>
                <div class="content-t2">
                    <div class="ask-block-info">
                        <label class="t-r f16-l24 purple1" for="{{$share_type2}}">Share Type</label>
                        <select class="js-example-basic-single w400" id="{{$share_type2}}">
                            <option value="Preferred">Preferred</option>
                            <option value="Common">Common</option>
                            <option value="Preferred and Common">Preferred and Common</option>
                            <option value="any">Any</option>
                        </select>
                    </div>
                    <div class="ask-block-info">
                        <label class="t-r f16-l24 purple1" for="{{$volume2}}">Volume</label>
                        <input class="i-f w400" type="number" id="{{$volume2}}" placeholder="Enter the Volume" step="0.001">
                    </div>
                    <div class="ask-block-info">
                        <label class="t-r f16-l24 purple1" for="{{$share_number2}}">Valuation</label>
                        <input class="i-f w400" type="number" id="{{$share_number2}}"
                               placeholder="Enter the Valuation" step="0.001">
                    </div>
                </div>
            </div>
        </div>
        <div class="add-order-btn">
            <button class="btn w265">
                Submit
            </button>
        </div>
    </form>
</div>
