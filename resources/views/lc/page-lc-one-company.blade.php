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
        let items = document.querySelectorAll('.body-row.visible[data-id]');
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
                        console.log(result);
                        let elem = e.nextElementSibling;
                        elem.innerHTML = '<td class="body-row-item" colspan="2">' +
                            '<ul class="list-t">' +
                            '<li class="list-t-item">' +
                            '<div class="designation-name">' +
                            'Price Per Share' +
                            '</div>' +
                            '<div class="designation-meanings">' +
                            result.type_currency +
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
                    <p class="card-sub-title t-r f16-l24 purple3">
                        <span>Address: </span>
                        <span>{{$company->companyAddress}}</span>
                    </p>
                    <picture>
                        <source srcset="{{asset('storage/companies/'.$company->image)  }}" type="image/webp">
                        <img class="card-img" src="{{asset('storage/companies/'.$company->image)  }}" alt=""
                             width="350px" height="210px">
                    </picture>
                    <form action="{{ route('order') }}" method="">
                        <label class="card-wrapper">
                            <select class="card-wrapper-select js-example-basic-single2" name="type">
                                <option value="0" selected disabled>Choose offer</option>
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
                    $typeHistory = $_GET['type_history'] ?? '';
                    $sort = $_GET['sort']?? '';
                    $sortHistory = $_GET['sort_history']?? '';
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
                                                {{ $order->valuation_encode ? $order->share_type_currency.$order->valuation_encode:'-'}}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="volume" data-tippy-content="{{$order->volume_encode ?? '-'}}">
                                                {{$order->volume_encode ? $order->share_type_currency.$order->volume_encode : '-'}}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="body-row-item">
                                        <div>
                                            <div class="share-price" data-tippy-content="{{$order->share_price_encode ?? '-'}}">
                                                {{$order->share_price_encode ? $order->share_type_currency.$order->share_price_encode  : '-'}}
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
                                                        @if(!empty($order->description))
                                                            data-tippy-content="{{$order->description}}"
                                                        @endif
                                                        >
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_792_40686)">
                                                    <path d="M12 22.5C9.21523 22.5 6.54451 21.3938 4.57538 19.4246C2.60625 17.4555 1.5 14.7848 1.5 12C1.5 9.21523 2.60625 6.54451 4.57538 4.57538C6.54451 2.60625 9.21523 1.5 12 1.5C14.7848 1.5 17.4555 2.60625 19.4246 4.57538C21.3938 6.54451 22.5 9.21523 22.5 12C22.5 14.7848 21.3938 17.4555 19.4246 19.4246C17.4555 21.3938 14.7848 22.5 12 22.5ZM12 24C15.1826 24 18.2348 22.7357 20.4853 20.4853C22.7357 18.2348 24 15.1826 24 12C24 8.8174 22.7357 5.76516 20.4853 3.51472C18.2348 1.26428 15.1826 0 12 0C8.8174 0 5.76516 1.26428 3.51472 3.51472C1.26428 5.76516 0 8.8174 0 12C0 15.1826 1.26428 18.2348 3.51472 20.4853C5.76516 22.7357 8.8174 24 12 24Z" fill="#2A206A"/>
                                                    <path d="M13.3949 9.882L9.95993 10.3125L9.83693 10.8825L10.5119 11.007C10.9529 11.112 11.0399 11.271 10.9439 11.7105L9.83693 16.9125C9.54593 18.258 9.99443 18.891 11.0489 18.891C11.8664 18.891 12.8159 18.513 13.2464 17.994L13.3784 17.37C13.0784 17.634 12.6404 17.739 12.3494 17.739C11.9369 17.739 11.7869 17.4495 11.8934 16.9395L13.3949 9.882ZM13.4999 6.75C13.4999 7.14782 13.3419 7.52936 13.0606 7.81066C12.7793 8.09196 12.3978 8.25 11.9999 8.25C11.6021 8.25 11.2206 8.09196 10.9393 7.81066C10.658 7.52936 10.4999 7.14782 10.4999 6.75C10.4999 6.35218 10.658 5.97064 10.9393 5.68934C11.2206 5.40804 11.6021 5.25 11.9999 5.25C12.3978 5.25 12.7793 5.40804 13.0606 5.68934C13.3419 5.97064 13.4999 6.35218 13.4999 6.75Z" fill="#2A206A"/>
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_792_40686">
                                                    <rect width="24" height="24" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
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
                                                        @if(!empty($order->description))
                                                            data-tippy-content="{{$order->description}}"
                                                        @endif
                                                        >
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_792_40686)">
                                                        <path d="M12 22.5C9.21523 22.5 6.54451 21.3938 4.57538 19.4246C2.60625 17.4555 1.5 14.7848 1.5 12C1.5 9.21523 2.60625 6.54451 4.57538 4.57538C6.54451 2.60625 9.21523 1.5 12 1.5C14.7848 1.5 17.4555 2.60625 19.4246 4.57538C21.3938 6.54451 22.5 9.21523 22.5 12C22.5 14.7848 21.3938 17.4555 19.4246 19.4246C17.4555 21.3938 14.7848 22.5 12 22.5ZM12 24C15.1826 24 18.2348 22.7357 20.4853 20.4853C22.7357 18.2348 24 15.1826 24 12C24 8.8174 22.7357 5.76516 20.4853 3.51472C18.2348 1.26428 15.1826 0 12 0C8.8174 0 5.76516 1.26428 3.51472 3.51472C1.26428 5.76516 0 8.8174 0 12C0 15.1826 1.26428 18.2348 3.51472 20.4853C5.76516 22.7357 8.8174 24 12 24Z" fill="#2A206A"/>
                                                        <path d="M13.3949 9.882L9.95993 10.3125L9.83693 10.8825L10.5119 11.007C10.9529 11.112 11.0399 11.271 10.9439 11.7105L9.83693 16.9125C9.54593 18.258 9.99443 18.891 11.0489 18.891C11.8664 18.891 12.8159 18.513 13.2464 17.994L13.3784 17.37C13.0784 17.634 12.6404 17.739 12.3494 17.739C11.9369 17.739 11.7869 17.4495 11.8934 16.9395L13.3949 9.882ZM13.4999 6.75C13.4999 7.14782 13.3419 7.52936 13.0606 7.81066C12.7793 8.09196 12.3978 8.25 11.9999 8.25C11.6021 8.25 11.2206 8.09196 10.9393 7.81066C10.658 7.52936 10.4999 7.14782 10.4999 6.75C10.4999 6.35218 10.658 5.97064 10.9393 5.68934C11.2206 5.40804 11.6021 5.25 11.9999 5.25C12.3978 5.25 12.7793 5.40804 13.0606 5.68934C13.3419 5.97064 13.4999 6.35218 13.4999 6.75Z" fill="#2A206A"/>
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_792_40686">
                                                        <rect width="24" height="24" fill="white"/>
                                                        </clipPath>
                                                        </defs>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="body-row-item center">
                                            <div>
                                                <div>
                                                    <a href="/chatify/{{$order->user_id}}" class="reset-btn icons" type="button"
                                                            data-tippy-content="Prompt about the possibility of sending a message">
                                                        <i class="icon icon-mail-blue"></i>
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
                                    @endcan
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$company->orders->onEachSide(-1)->links('vendor.pagination.custom')}}
                    </div>
                    <div class="history">
                        <h2 class="t-m f18-l32 purple1">Orders History</h2>
                        <form class="company-philter" action="{{ route('companies.show',$company->id) }}" method="GET">
                            <div class="company-philter">
                            <label class="company-philter-select">
                                <select class="js-example-basic-single" name="type_history">
                                    <option value="0" selected disabled>--</option>
                                    <option value="BID" {{$typeHistory == 'BID'?'selected':''}}>Bid</option>
                                    <option value="ASK" {{$typeHistory == 'ASK'?'selected':''}}>Ask</option>
                                    <option value="LFO" {{$typeHistory == 'LFO'?'selected':''}}>Looking for an offer</option>
                                    <option value="TD" {{$typeHistory == 'TD'?'selected':''}}>Tender</option>
                                </select>
                            </label>
                            <label class="company-philter-select">
                                <select class="js-example-basic-single-no-search" name="sort_history">
                                    <option value="0" selected disabled>--</option>
                                    <option value="Data" {{$sortHistory == 'Data'?'selected':''}}>Data</option>
                                    <option value="Type" {{$sortHistory == 'Type'?'selected':''}}>Type</option>
                                </select>
                            </label>
                            <button class="company-philter-btn-s btn btn-green w140" type="submit">
                                Filter
                            </button>
                            <button class="company-philter-btn h" type="button">
                                Clear filters
                                <i class="icon icon-close-green"></i>
                            </button>
                        </div>
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
                                @foreach($company->history as $order)
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
                                                    {{ $order->valuation_encode ? $order->share_type_currency.$order->valuation_encode:'-'}}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="body-row-item">
                                            <div>
                                                <div class="volume" data-tippy-content="{{$order->volume_encode ?? '-'}}">
                                                    {{$order->volume_encode ? $order->share_type_currency.$order->volume_encode : '-'}}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="body-row-item">
                                            <div>
                                                <div class="share-price" data-tippy-content="{{$order->share_price_encode ?? '-'}}">
                                                    {{$order->share_price_encode ? $order->share_type_currency.$order->share_price_encode  : '-'}}
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
                                                                @if(!empty($order->description))
                                                                data-tippy-content="{{$order->description}}"
                                                            @endif
                                                        >
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_792_40686)">
                                                                    <path d="M12 22.5C9.21523 22.5 6.54451 21.3938 4.57538 19.4246C2.60625 17.4555 1.5 14.7848 1.5 12C1.5 9.21523 2.60625 6.54451 4.57538 4.57538C6.54451 2.60625 9.21523 1.5 12 1.5C14.7848 1.5 17.4555 2.60625 19.4246 4.57538C21.3938 6.54451 22.5 9.21523 22.5 12C22.5 14.7848 21.3938 17.4555 19.4246 19.4246C17.4555 21.3938 14.7848 22.5 12 22.5ZM12 24C15.1826 24 18.2348 22.7357 20.4853 20.4853C22.7357 18.2348 24 15.1826 24 12C24 8.8174 22.7357 5.76516 20.4853 3.51472C18.2348 1.26428 15.1826 0 12 0C8.8174 0 5.76516 1.26428 3.51472 3.51472C1.26428 5.76516 0 8.8174 0 12C0 15.1826 1.26428 18.2348 3.51472 20.4853C5.76516 22.7357 8.8174 24 12 24Z" fill="#2A206A"/>
                                                                    <path d="M13.3949 9.882L9.95993 10.3125L9.83693 10.8825L10.5119 11.007C10.9529 11.112 11.0399 11.271 10.9439 11.7105L9.83693 16.9125C9.54593 18.258 9.99443 18.891 11.0489 18.891C11.8664 18.891 12.8159 18.513 13.2464 17.994L13.3784 17.37C13.0784 17.634 12.6404 17.739 12.3494 17.739C11.9369 17.739 11.7869 17.4495 11.8934 16.9395L13.3949 9.882ZM13.4999 6.75C13.4999 7.14782 13.3419 7.52936 13.0606 7.81066C12.7793 8.09196 12.3978 8.25 11.9999 8.25C11.6021 8.25 11.2206 8.09196 10.9393 7.81066C10.658 7.52936 10.4999 7.14782 10.4999 6.75C10.4999 6.35218 10.658 5.97064 10.9393 5.68934C11.2206 5.40804 11.6021 5.25 11.9999 5.25C12.3978 5.25 12.7793 5.40804 13.0606 5.68934C13.3419 5.97064 13.4999 6.35218 13.4999 6.75Z" fill="#2A206A"/>
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_792_40686">
                                                                        <rect width="24" height="24" fill="white"/>
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
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
                                                                @if(!empty($order->description))
                                                                data-tippy-content="{{$order->description}}"
                                                            @endif
                                                        >
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_792_40686)">
                                                                    <path d="M12 22.5C9.21523 22.5 6.54451 21.3938 4.57538 19.4246C2.60625 17.4555 1.5 14.7848 1.5 12C1.5 9.21523 2.60625 6.54451 4.57538 4.57538C6.54451 2.60625 9.21523 1.5 12 1.5C14.7848 1.5 17.4555 2.60625 19.4246 4.57538C21.3938 6.54451 22.5 9.21523 22.5 12C22.5 14.7848 21.3938 17.4555 19.4246 19.4246C17.4555 21.3938 14.7848 22.5 12 22.5ZM12 24C15.1826 24 18.2348 22.7357 20.4853 20.4853C22.7357 18.2348 24 15.1826 24 12C24 8.8174 22.7357 5.76516 20.4853 3.51472C18.2348 1.26428 15.1826 0 12 0C8.8174 0 5.76516 1.26428 3.51472 3.51472C1.26428 5.76516 0 8.8174 0 12C0 15.1826 1.26428 18.2348 3.51472 20.4853C5.76516 22.7357 8.8174 24 12 24Z" fill="#2A206A"/>
                                                                    <path d="M13.3949 9.882L9.95993 10.3125L9.83693 10.8825L10.5119 11.007C10.9529 11.112 11.0399 11.271 10.9439 11.7105L9.83693 16.9125C9.54593 18.258 9.99443 18.891 11.0489 18.891C11.8664 18.891 12.8159 18.513 13.2464 17.994L13.3784 17.37C13.0784 17.634 12.6404 17.739 12.3494 17.739C11.9369 17.739 11.7869 17.4495 11.8934 16.9395L13.3949 9.882ZM13.4999 6.75C13.4999 7.14782 13.3419 7.52936 13.0606 7.81066C12.7793 8.09196 12.3978 8.25 11.9999 8.25C11.6021 8.25 11.2206 8.09196 10.9393 7.81066C10.658 7.52936 10.4999 7.14782 10.4999 6.75C10.4999 6.35218 10.658 5.97064 10.9393 5.68934C11.2206 5.40804 11.6021 5.25 11.9999 5.25C12.3978 5.25 12.7793 5.40804 13.0606 5.68934C13.3419 5.97064 13.4999 6.35218 13.4999 6.75Z" fill="#2A206A"/>
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_792_40686">
                                                                        <rect width="24" height="24" fill="white"/>
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
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
                            {{$company->history->onEachSide(-1)->links('vendor.pagination.custom')}}
                        </div>
                    </div>
                </div>
                @include('lc.layouts.one-company.finance')
            </div>
        </div>
    </section>
@endsection
