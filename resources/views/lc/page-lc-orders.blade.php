@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{asset('css/pages/page-lc-orders.min.css')}}">
@endsection
@section('scripts')
    <script src="{{asset('/js/lib/propper.min.js')}}"></script>
    <script src="{{asset('/js/lib/tippy.min.js')}}"></script>
    <script src="{{asset('js/pages/page-lc-orders.min.js')}}"></script>

    <script>
        tippy('[data-tippy-content]',
            {
                placement: 'left',
                arrow: true,
                theme: 'my',
                duration: 0,
                delay: [700, 500],
                dynamicTitle: true,
            });
        isActive('.cb-ios');

        function isActive(checkbox) {
            if (typeof checkbox === 'string') {
                checkbox = document.querySelectorAll(checkbox);
            }
            for (let i = 0; i < checkbox.length; i++) {
                const checkboxEl = checkbox[i];
                checkboxEl.addEventListener('click', () => {
                    if(checkboxEl.dataset.status === "active") {
                        question = !confirm('Do you confirm your action ?');
                    }
                    if(checkboxEl.dataset.status === "inactive") {
                        question = confirm('Do you confirm your action ?');
                    }
                    console.log(question);
                    idEl = checkboxEl.dataset.id
                    $.ajax({
                        type: "POST",
                        url: "/order/order-status",
                        data: {
                            id:idEl,
                            _token:'{{csrf_token()}}',
                            status:question,
                        },
                        success: function (response) {
                        checkboxEl.dataset.status = response.status;
                        console.log(response.status);
                        },
                    });
                });
            }
        }
    </script>
@endsection
@section('content')
    @php
        $type = $_GET['type'] ?? '';
        $sort = $_GET['sort']?? '';
        $search = $_GET['search']?? '';
    @endphp
    <div class="orders-wrapper">
        <div class="orders-search">
            <form class="orders-search-form w310" action="{{ route('orders') }}">
                <input class="i-f2" type="search" name="search" value="{{$search}}" placeholder="Search" required>
                <button class="reset-btn">
                    <i class="icon icon-search"></i>
                </button>
            </form>
        </div>

        <form action="{{ route('orders') }}" method="GET">
            <div class="orders-philter">
                <label class="orders-philter-select">
                    <select class="js-example-basic-single" name="type">
                        <option value="0" selected disabled>--</option>
                        <option value="BID" {{$type == 'BID'?'selected':''}}>Bid</option>
                        <option value="ASK" {{$type == 'ASK'?'selected':''}}>Ask</option>
                        <option value="LFO" {{$type == 'LFO'?'selected':''}}>Looking for an offer</option>
                        <option value="TD" {{$type == 'TD'?'selected':''}}>Tender</option>
                    </select>
                </label>
                <label class="orders-philter-select">
                    <select class="js-example-basic-single-no-search" name="sort">
                        <option value="0" selected disabled>--</option>
                        <option value="Data" {{$sort == 'Data'?'selected':''}}>Data</option>
                        <option value="Type" {{$sort == 'Type'?'selected':''}}>Type</option>
                    </select>
                </label>
                <button class="orders-philter-btn-s btn btn-green w140" type="submit">
                    Filter
                </button>
                <button class="orders-philter-btn" type="button">
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
                @forelse($orders as $order)
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
                                <div class="company" data-tippy-content="{{$order->company->companyName}}">
                                    {{$order->company->companyName}}
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
                                <div class="deal-structure" data-tippy-content="{{$order->deal_structure ?? '-'}}">
                                    {{$order->deal_structure ?? '-'}}
                                </div>
                            </div>
                        </td>
                        <td class="body-row-item center">
                            <div>
                                <div>
                                    <button class="reset-btn" type="button"
                                            @if(!empty($order->description))
                                            data-tippy-content="{{$order->description}}"
                                        @endif
                                    >
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_792_40686)">
                                                <path
                                                    d="M12 22.5C9.21523 22.5 6.54451 21.3938 4.57538 19.4246C2.60625 17.4555 1.5 14.7848 1.5 12C1.5 9.21523 2.60625 6.54451 4.57538 4.57538C6.54451 2.60625 9.21523 1.5 12 1.5C14.7848 1.5 17.4555 2.60625 19.4246 4.57538C21.3938 6.54451 22.5 9.21523 22.5 12C22.5 14.7848 21.3938 17.4555 19.4246 19.4246C17.4555 21.3938 14.7848 22.5 12 22.5ZM12 24C15.1826 24 18.2348 22.7357 20.4853 20.4853C22.7357 18.2348 24 15.1826 24 12C24 8.8174 22.7357 5.76516 20.4853 3.51472C18.2348 1.26428 15.1826 0 12 0C8.8174 0 5.76516 1.26428 3.51472 3.51472C1.26428 5.76516 0 8.8174 0 12C0 15.1826 1.26428 18.2348 3.51472 20.4853C5.76516 22.7357 8.8174 24 12 24Z"
                                                    fill="#2A206A"/>
                                                <path
                                                    d="M13.3949 9.882L9.95993 10.3125L9.83693 10.8825L10.5119 11.007C10.9529 11.112 11.0399 11.271 10.9439 11.7105L9.83693 16.9125C9.54593 18.258 9.99443 18.891 11.0489 18.891C11.8664 18.891 12.8159 18.513 13.2464 17.994L13.3784 17.37C13.0784 17.634 12.6404 17.739 12.3494 17.739C11.9369 17.739 11.7869 17.4495 11.8934 16.9395L13.3949 9.882ZM13.4999 6.75C13.4999 7.14782 13.3419 7.52936 13.0606 7.81066C12.7793 8.09196 12.3978 8.25 11.9999 8.25C11.6021 8.25 11.2206 8.09196 10.9393 7.81066C10.658 7.52936 10.4999 7.14782 10.4999 6.75C10.4999 6.35218 10.658 5.97064 10.9393 5.68934C11.2206 5.40804 11.6021 5.25 11.9999 5.25C12.3978 5.25 12.7793 5.40804 13.0606 5.68934C13.3419 5.97064 13.4999 6.35218 13.4999 6.75Z"
                                                    fill="#2A206A"/>
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
                                    <a href="{{ route('order-lc.show',$order) }}"
                                       data-tippy-content="Подсказка о возможности редактирования своего ордера ">
                                        <i class="icon icon-pen-blue"></i>
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td class="body-row-item center">
                            <div>
                                <div>

                                    <label class="checkbox-ios">
                                        <input class="cb-ios" type="checkbox" data-status="{{$order->user_status}}" data-id="{{$order->id}}"{{$order->user_status=='active'?'checked':''}}>
                                        <span class="checkbox-ios-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                @endforelse

                {{--                <tr class="body-row bid">--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            2--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            01/01/22--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            Company name--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            Аsk--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            0000000000--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            0000000000--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            0000000000--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            0000000000--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            Text--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            Text--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item center">--}}
                {{--                        <div>--}}
                {{--                            <button class="reset-btn" type="button"--}}
                {{--                                    data-tippy-content="Базовые сценарии поведения пользователей могут быть рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Современные технологии достигли такого уровня, что дальнейшее развитие различных форм деятельности способствует повышению качества поставленных обществом задач.">--}}
                {{--                                <i class="tree-dots"></i>--}}
                {{--                            </button>--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item center">--}}
                {{--                        <div>--}}
                {{--                            <a href="#" data-tippy-content="Подсказка о возможности редактирования своего ордера ">--}}
                {{--                                <i class="icon icon-pen-blue"></i>--}}
                {{--                            </a>--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                </tr>--}}
                {{--                <tr class="body-row">--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            3--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            01/01/22--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            Company name--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            Ask--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            0000000000--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            0000000000--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            0000000000--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            0000000000--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            Text--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            Text--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item center">--}}
                {{--                        <div>--}}
                {{--                            <button class="reset-btn" type="button"--}}
                {{--                                    data-tippy-content="Базовые сценарии поведения пользователей могут быть рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Современные технологии достигли такого уровня, что дальнейшее развитие различных форм деятельности способствует повышению качества поставленных обществом задач.">--}}
                {{--                                <i class="tree-dots"></i>--}}
                {{--                            </button>--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item center">--}}
                {{--                        <div>--}}
                {{--                            <a href="#" data-tippy-content="Подсказка о возможности редактирования своего ордера ">--}}
                {{--                                <i class="icon icon-pen-blue"></i>--}}
                {{--                            </a>--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                </tr>--}}
                {{--                <tr class="body-row history">--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            4--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            01/01/22--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            Company name--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            Ask--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            0000000000--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            0000000000--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            0000000000--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            0000000000--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            Text--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item">--}}
                {{--                        <div>--}}
                {{--                            Text--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item center">--}}
                {{--                        <div>--}}
                {{--                            <button class="reset-btn" type="button"--}}
                {{--                                    data-tippy-content="Базовые сценарии поведения пользователей могут быть рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Современные технологии достигли такого уровня, что дальнейшее развитие различных форм деятельности способствует повышению качества поставленных обществом задач.">--}}
                {{--                                <i class="tree-dots"></i>--}}
                {{--                            </button>--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                    <td class="body-row-item center">--}}
                {{--                        <div>--}}
                {{--                            <a href="#" data-tippy-content="Подсказка о возможности редактирования своего ордера ">--}}
                {{--                                <i class="icon icon-pen-blue"></i>--}}
                {{--                            </a>--}}
                {{--                        </div>--}}
                {{--                    </td>--}}
                {{--                </tr>--}}
                </tbody>
            </table>
        </div>
    </div>
@endsection


