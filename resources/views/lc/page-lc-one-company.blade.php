@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{asset('css/pages/page-lc-one-company.min.css')}}">
@endsection

@section('scripts')
    <script src="{{asset('/js/lib/propper.min.js')}}"></script>
    <script src="{{asset('/js/lib/tippy.min.js')}}"></script>

    <script src="{{asset('js/pages/page-lc-one-company.min.js')}}" type="module"></script>

    <script>
        let token = '{{csrf_token()}}';
        let finance = 1; // data-id строки финансирования
        let items = document.querySelectorAll('.arrow-icon-purple[data-id]');
        let item = [].map.call(items, function (e) {
            e.addEventListener('click', () => {
                $.ajax({
                    type: "GET",
                    url: "{{route('company.get-finance',$company->id)}}",
                    data: {
                        id: e.dataset.id,
                        _token: token,
                    },
                    success: function (response) {
                        result = response.data;
                        let elem = e.parentNode.parentNode.nextElementSibling;
                        elem.innerHTML = '<td class="body-row-item" colspan="2">' +
                            '<ul class="list-t">' +
                            '<li class="list-t-item">' +
                            '<div class="designation-name">' +
                            'Price Per Share' +
                            '</div>' +
                            '<div class="designation-meanings">' +
                            result.price_per_share +
                            '</div>' +
                            '</li>' +
                            '<li class="list-t-item">' +
                            '<div class="designation-name">' +
                            'Shares Outstanding' +
                            '</div>' +
                            '<div class="designation-meanings">' +
                            result.shares_outstanding +
                            '</div>' +
                            '</li>' +
                            '<li class="list-t-item">' +
                            '<div class="designation-name">' +
                            'Percent Shares Outstanding' +
                            '</div>' +
                            '<div class="designation-meanings">' +
                            result.percent_shares_outstanding +
                            '</div>' +
                            '</li>' +
                            '</ul>' +
                            '</td>' +
                            '<td class="body-row-item" colspan="2">' +
                            '<ul class="list-t">' +
                            '<li class="list-t-item">' +
                            '<div class="designation-name">' +
                            'Liquidation Pref Order' +
                            '</div>' +
                            '<div class="designation-meanings">' +
                            result.liquidation_pref_order +
                            '</div>' +
                            '</li>' +
                            '<li class="list-t-item">' +
                            '<div class="designation-name">' +
                            'Liquidation Pref As Multiplier' +
                            '</div>' +
                            '<div class="designation-meanings">' +
                            result.liquidation_pref_as_multiplier +
                            '</div>' +
                            '</li>' +
                            '<li class="list-t-item">' +
                            '<div class="designation-name">' +
                            'Conversion Ratio' +
                            '</div>' +
                            '<div class="designation-meanings">' +
                            result.conversion_rate +
                            '</div>' +
                            '</li>' +
                            '<li class="list-t-item">' +
                            '<div class="designation-name">' +
                            'Participating' +
                            '</div>' +
                            '<div class="designation-meanings">' +
                            result.participating +
                            '</div>' +
                            '</li>' +
                            '<li class="list-t-item">' +
                            '<div class="designation-name">' +
                            'Participation Cap' +
                            '</div>' +
                            '<div class="designation-meanings">' +
                            result.participation_cap +
                            '</div>' +
                            '</li>' +
                            '</ul>' +
                            '</td>' +
                            '<td class="body-row-item">' +
                            '<ul class="list-t">' +
                            '<li class="list-t-item">' +
                            '<div>' +
                            'Dividend Rate' +
                            '</div>' +
                            '<div>' +
                            result.dividend_rate +
                            '</div>' +
                            '</li>' +
                            '<li class="list-t-item">' +
                            '<div>' +
                            'Cumulative' +
                            '</div>' +
                            '<div>' +
                            result.cumulative +
                            '</div>' +
                            '</li>' +
                            '</ul>' +
                            '</td>' +
                            '<td class="body-row-item" colspan="3">' +
                            '<ul class="list-t">' +
                            '<li class="list-t-item">' +
                            '<div>' +
                            'Investors' +
                            '</div>' +
                            '<div>' +
                            result.investors +
                            '</div>' +
                            '</li>' +
                            '</ul>' +
                            '</td>';
                    },
                });
            });
        });
    </script>
@endsection

@section('content')
    <section class="one">
        <div class="one-company">
            <div class="back-link active">
                <a class="t-r f18-l32 purple4 " href="{{ route('companies.index') }}">
                    <i class="icon icon-arrow-left"></i>
                    Come back
                </a>
            </div>
            <div class="one-company-wrapper">
                <div class="one-company-card">
                    <h1 class="card-title t-sb f22-l25 purple3">{{$company->companyName}}</h1>
                    <p class="card-sub-title t-r f16-l24 purple3">
                        <span>
                            @foreach($company->category as $category)
                                {{$category->name}}{{!$loop->last?', ':''}}
                            @endforeach
                        </span>
                    </p>
                    <p class="card-sub-title t-r f16-l24 purple3">
                        <span>Founded: </span>
                        <span>{{$company->founded->format('Y')}}</span>
                    </p>
                    <p class="card-sub-title t-r f16-l24 purple3">
                        <span>Total funding: </span>
                        <span>${{$company->total_funding}}</span>
                    </p>
                    <picture>
                        <source srcset="{{asset('storage/companies/'.$company->image)  }}" type="image/webp">
                        <img class="card-img" src="{{asset('storage/companies/'.$company->image)  }}" alt=""
                             width="350px" height="210px">
                    </picture>
                    <form action="{{ route('order') }}" method="">
                        <label class="card-wrapper">
                            <select class="card-wrapper-select js-example-basic-single2" name="type">
                                <option value="0" disabled>Choose offer</option>
                                <option value="bid">Bid</option>
                                <option value="ask">Ask</option>
                                <option value="lfo">Looking for an offer</option>
                                <option value="tender">Tender</option>
                            </select>
                            <button class="card-wrapper-btn btn btn-green">Add +</button>
                        </label>
                        <input type="hidden" name="company_id" value="{{$company->id}}">
                    </form>
                </div>
                <div class="one-company-text">
                    @if ($check_isset)
                        <form class="text-wrapper" action="{{ route('delete-wali',$check_isset->id) }}" method="POST">
                            @csrf
                            <div class="text-wrapper-box">
                                <div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
                                <input type="hidden" name="company_id" value="{{$company->id}}">
                                <button type="submit" class="reset-btn">
                                    <i class="icon icon-trash"></i>
                                </button>
                            </div>
                            <div class="text-wrapper-box">
                                <p class=" f12-l18 t-r purple3">Specify notifications for which orders you want to
                                    receive</p>
                                <div class="form_radio">
                                    <label>
                                        <input type="radio"
                                               name="variant" {{$check_isset->type === 'Bid'?'checked':''}}>
                                        <span></span>
                                        BID
                                    </label>
                                </div>
                                <div class="form_radio">
                                    <label>
                                        <input type="radio"
                                               name="variant" {{$check_isset->type === 'Ask'?'checked':''}}>
                                        <span></span>
                                        ASK
                                    </label>
                                </div>
                                <div class="form_radio">
                                    <label>
                                        <input type="radio"
                                               name="variant" {{$check_isset->type === 'All'?'checked':''}}>
                                        <span></span>
                                        ALL
                                    </label>
                                </div>
                            </div>
                        </form>
                    @else
                        <form class="text-wrapper" action="{{ route('wali') }}" method="POST">
                            @csrf
                            <input type="hidden" name="company_id" value="{{$company->id}}">
                            <button class="btn btn-green w210">Add to watch list</button>
                            <div class="text-wrapper-box">
                                <p class=" f12-l18 t-r purple3">Specify notifications for which orders you want to
                                    receive</p>
                                <div class="form_radio">
                                    <label>
                                        <input type="radio" name="type" value="Bid">
                                        <span></span>
                                        BID
                                    </label>
                                </div>
                                <div class="form_radio">
                                    <label>
                                        <input type="radio" name="type" value="Ask">
                                        <span></span>
                                        ASK
                                    </label>
                                </div>
                                <div class="form_radio">
                                    <label>
                                        <input type="radio" name="type" value="All" checked>
                                        <span></span>
                                        ALL
                                    </label>
                                </div>
                            </div>
                        </form>
                    @endif
                    <p class="t-r f16-l24 purple3">
                        {{$company->description}}
                    </p>
                </div>
            </div>
            <div class="one-company-tab" id="tabs">
                <ul class="tab-wrapper nav-tabs">
                    <li class="t-r f22-l25 purple1 tab-n active">
                        Orders
                    </li>
                    <li class="t-r f22-l25 purple1 tab-n">
                        Financing
                    </li>
                </ul>

                @php
                    $type = $_GET['type'] ?? '';
                    $sort = $_GET['sort']?? '';
                @endphp

                <div class="content-t active">
                    <form class="company-philter" action="{{ route('companies.show',$company->id) }}" method="GET">
                        <label class="company-philter-select">
                            <select class="js-example-basic-single" name="type">
                                <option value="0" selected disabled>--</option>
                                <option value="BID" {{$type == 'BID'?'selected':''}}>Bid</option>
                                <option value="ASK" {{$type == 'ASK'?'selected':''}}>Ask</option>
                                <option value="LFO" {{$type == 'LFO'?'selected':''}}>Looking for an offer</option>
                                <option value="TD" {{$type == 'TD'?'selected':''}}>Tender</option>
                            </select>
                        </label>
                        <label class="company-philter-select">
                            <select class="js-example-basic-single-no-search" name="sort">
                                <option value="0" selected disabled>--</option>
                                <option value="Data" {{$sort == 'Data'?'selected':''}}>Data</option>
                                <option value="Type" {{$sort == 'Type'?'selected':''}}>Type</option>
                            </select>
                        </label>
                        <button class="company-philter-btn-s btn btn-green w140" type="submit">
                            Filter
                        </button>
                        <button class="company-philter-btn" type="reset">
                            Clear filters
                            <i class="icon icon-close-green"></i>
                        </button>
                    </form>
                    <div class="table-wrapper">
                        <table class="color-t table">
                            <thead class="table-head">
                            <tr class="head-row">
                                <th class="head-row-item">
                                    <div>
                                        <div>
                                            #
                                        </div>
                                    </div>
                                </th>
                                <th class="head-row-item">
                                    <div>
                                        <div class="date">
                                            Date
                                        </div>
                                    </div>
                                </th>
                                <th class="head-row-item">
                                    <div>
                                        <div class="company">
                                            Company
                                        </div>
                                    </div>
                                </th>
                                <th class="head-row-item">
                                    <div>
                                        <div></div>
                                    </div>
                                </th>
                                <th class="head-row-item">
                                    <div>
                                        <div class="valuation">
                                            Valuation
                                        </div>
                                    </div>
                                </th>
                                <th class="head-row-item">
                                    <div>
                                        <div class="volume">
                                            Volume
                                        </div>
                                    </div>
                                </th>
                                <th class="head-row-item">
                                    <div>
                                        <div class="share-price">
                                            Share price
                                        </div>
                                    </div>
                                </th>
                                <th class="head-row-item">
                                    <div>
                                        <div class="number-of-shares">
                                            Number of shares
                                        </div>
                                    </div>
                                </th>
                                <th class="head-row-item">
                                    <div>
                                        <div class="share-type">
                                            Share type
                                        </div>
                                    </div>
                                </th>
                                <th class="head-row-item">
                                    <div>
                                        <div class="deal-structure">
                                            Deal Structure
                                        </div>
                                    </div>
                                </th>
                                <th class="head-row-item">
                                    <div>
                                        <div></div>
                                    </div>
                                </th>
                                <th class="head-row-item">
                                    <div>
                                        <div></div>
                                    </div>
                                </th>
                                <th class="head-row-item">
                                    <div>
                                        <div></div>
                                    </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="table-body">
                            @foreach($company->orders as $order)
                                <tr class="body-row {{$order->type === 'BID'? 'bid':'ask'}} {{$order->status}}">
                                    <td class="body-row-item">
                                        <div>
                                            <div>
                                                {{$loop->iteration}}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="date">
                                                {{$order->date}}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="company" data-tippy-content="{{$company->companyName}}">
                                                {{$company->companyName}}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div>
                                                {{$order->type ?? '-'}}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="valuation">
                                                {{$order->valuation_encode ?? '-'}}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="volume" data-tippy-content="{{$order->volume_encode ?? '-'}}">
                                                {{$order->volume_encode ?? '-'}}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="share-price"
                                                 data-tippy-content="{{$order->share_price_encode ?? '-'}}">
                                                {{$order->share_price_encode ?? '-'}}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="number-of-shares">
                                                {{$order->share_number ?? '-'}}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="share-type" data-tippy-content="{{$order->share_type ?? '-'}}">
                                                {{$order->share_type ?? '-'}}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="deal-structure"
                                                 data-tippy-content="{{$order->deal_structure ?? '-'}}">
                                                {{$order->deal_structure ?? '-'}}
                                            </div>
                                        </div>
                                    </td>
                                    @can('show-order',$order)
                                        <td class="body-row-item center">
                                            <div>
                                                <div>
                                                    <button class="reset-btn" type="button"
                                                            data-tippy-content="Basic scenarios of user behavior can be considered solely in terms of marketing and financial prerequisites. Modern technologies have reached such a level that the further development of various forms of activity contributes to improving the quality of the tasks set by society.">
                                                        <i class="tree-dots"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="body-row-item center">
                                            <div>
                                                <div>
                                                    <a href="{{ route('order-lc.show',$order) }}" class="reset-btn"
                                                       type="button"
                                                       data-tippy-content="Hint about the possibility of editing your order">
                                                        <i class="icon icon-pen-blue"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="body-row-item center ios-p">
                                            <div>
                                                <div>
                                                    <label class="checkbox-ios">
                                                        <input type="checkbox">
                                                        <span class="checkbox-ios-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                    @else
                                        <td class="body-row-item center">
                                            <div>
                                                <div>
                                                    <button class="reset-btn" type="button"
                                                            data-tippy-content="Basic scenarios of user behavior can be considered solely in terms of marketing and financial prerequisites. Modern technologies have reached such a level that the further development of various forms of activity contributes to improving the quality of the tasks set by society.">
                                                        <i class="tree-dots"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="body-row-item center">
                                            <div>
                                                <div>
                                                    <button class="reset-btn icons" type="button"
                                                            data-tippy-content="Prompt about the possibility of sending a message">
                                                        <i class="icon icon-mail-blue"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="body-row-item center ios-p">
                                            <div>
                                                <div>
                                                    <label class="checkbox-ios">
                                                        <input type="checkbox">
                                                        <span class="checkbox-ios-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                    @endcan
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$company->orders->onEachSide(-1)->links('vendor.pagination.custom')}}
                    </div>
                    <div class="history">
                        <h2 class="t-m f18-l32 purple1">History</h2>
                        <div class="company-philter">
                            <label class="company-philter-select">
                                <select class="js-example-basic-single">
                                    <option value="0">3D Printing</option>
                                    <option value="1">Advertising</option>
                                    <option value="2">Aerospace</option>
                                    <option value="3">Analytics/Big Data</option>
                                </select>
                            </label>
                            <label class="company-philter-select">
                                <select class="js-example-basic-single-no-search">
                                    <option value="0" selected disabled>--</option>
                                    <option value="1">Data</option>
                                    <option value="2">Type</option>
                                </select>
                            </label>
                            <button class="company-philter-btn" type="button">
                                Clear filters
                                <i class="icon icon-close-green"></i>
                            </button>
                        </div>
                        <div class="table-wrapper">
                            <table class="color-t table">
                                <thead class="table-head">
                                <tr class="head-row">
                                    <th class="head-row-item">
                                        <div>
                                            <div>
                                                #
                                            </div>
                                        </div>
                                    </th>
                                    <th class="head-row-item">
                                        <div>
                                            <div class="date">
                                                Date
                                            </div>
                                        </div>
                                    </th>
                                    <th class="head-row-item">
                                        <div>
                                            <div class="company">
                                                Company
                                            </div>
                                        </div>
                                    </th>
                                    <th class="head-row-item">
                                        <div>
                                            <div></div>
                                        </div>
                                    </th>
                                    <th class="head-row-item">
                                        <div>
                                            <div class="valuation">
                                                Valuation
                                            </div>
                                        </div>
                                    </th>
                                    <th class="head-row-item">
                                        <div>
                                            <div class="volume">
                                                Volume
                                            </div>
                                        </div>
                                    </th>
                                    <th class="head-row-item">
                                        <div>
                                            <div class="share-price">
                                                Share price
                                            </div>
                                        </div>
                                    </th>
                                    <th class="head-row-item">
                                        <div>
                                            <div class="number-of-shares">
                                                Number of shares
                                            </div>
                                        </div>
                                    </th>
                                    <th class="head-row-item">
                                        <div>
                                            <div class="share-type">
                                                Share type
                                            </div>
                                        </div>
                                    </th>
                                    <th class="head-row-item">
                                        <div>
                                            <div class="deal-structure">
                                                Deal Structure
                                            </div>
                                        </div>
                                    </th>
                                    <th class="head-row-item">
                                        <div>
                                            <div></div>
                                        </div>
                                    </th>
                                    <th class="head-row-item">
                                        <div>
                                            <div></div>
                                        </div>
                                    </th>
                                    <th class="head-row-item">
                                        <div>
                                            <div></div>
                                        </div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="table-body">
                                <tr class="body-row ask">
                                    <td class="body-row-item">
                                        <div>
                                            <div>
                                                1
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="date">
                                                01/01/22
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="company">
                                                Company name
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div>
                                                Аsk
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="valuation">
                                                0000000000
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="volume">
                                                00000000000000000000
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="share-price">
                                                00000000000000000000
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="number-of-shares">
                                                00000000000000000000
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="share-type">
                                                Text
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="deal-structure">
                                                Text
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item center">
                                        <div>
                                            <div>
                                                <button class="reset-btn" type="button"
                                                        data-tippy-content="Базовые сценарии поведения пользователей могут быть рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Современные технологии достигли такого уровня, что дальнейшее развитие различных форм деятельности способствует повышению качества поставленных обществом задач.">
                                                    <i class="tree-dots"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item center">
                                        <div>
                                            <div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item center ios-p">
                                        <div>
                                            <div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="body-row bid">
                                    <td class="body-row-item">
                                        <div>
                                            <div>
                                                1
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="date">
                                                01/01/22
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="company">
                                                Company name
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div>
                                                Аsk
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="valuation">
                                                0000000000
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="volume">
                                                0000000000
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="share-price">
                                                0000000000
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="number-of-shares">
                                                0000000000
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="share-type">
                                                Text
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="deal-structure">
                                                Text
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item center">
                                        <div>
                                            <div>
                                                <button class="reset-btn" type="button"
                                                        data-tippy-content="Базовые сценарии поведения пользователей могут быть рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Современные технологии достигли такого уровня, что дальнейшее развитие различных форм деятельности способствует повышению качества поставленных обществом задач.">
                                                    <i class="tree-dots"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item center">
                                        <div>
                                            <div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item center ios-p">
                                        <div>
                                            <div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @include('lc.layouts.one-company.finance')
            </div>
        </div>
    </section>
@endsection
