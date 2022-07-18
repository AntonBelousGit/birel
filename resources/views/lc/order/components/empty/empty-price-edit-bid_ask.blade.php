<div class="ask-block-info">
    <label class="t-r f16-l24 purple1" for="{{$share_type}}">
        Share Type
    </label>
    <select class="js-example-basic-single w400" id="{{$share_type}}" >
        <option value="Choose">Choose</option>
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
                <input type="radio" id="{{$share_type_currency1}}" name="share_type_currency" value="$"  checked>
                <span></span>
                $
            </label>
        </div>
        <div class="form_radio">
            <label class="t-r f14-l16 purple1">
                <input type="radio" id="{{$share_type_currency2}}" name="share_type_currency" value="€" >
                <span></span>
                €
            </label>
        </div>
    </div>
    <label class="t-r f16-l24 purple1" for="{{$share_price}}">Share Price</label>
    <input class="i-f w400 m-bid" type="text" id="{{$share_price}}"
           placeholder="Enter the Price" name="share_price"  step="0.001">
</div>
<div class="ask-block-info">
    <label class="t-r f16-l24 purple1" for="{{$share_number}}">Share Number</label>
    <input class="i-f w400 m-bid" type="text" id="{{$share_number}}"
           placeholder="Enter the Number" name="share_number"  step="0.001">
</div>
<div class="ask-block-info">
    <label class="t-r f16-l24 purple1" for="{{$volume}}">Volume</label>
    <input class="i-f w400" type="number" id="{{$volume}}" name="volume" placeholder="Enter the Volume" step="0.001">
</div>
