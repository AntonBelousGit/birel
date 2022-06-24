@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{asset('css/pages/page-lc-orders.min.css')}}">
@endsection
@section('scripts')
    <script src="{{asset('/js/lib/propper.min.js')}}"></script>
    <script src="{{asset('/js/lib/tippy.min.js')}}"></script>
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
    </script>
@endsection
@section('content')
    <div class="orders-wrapper">
        <div class="orders-search">
            <form class="orders-search-form w310" action="#">
                <input class="i-f2" type="search" placeholder="Search" required>
                <button class="reset-btn">
                    <i class="icon icon-search"></i>
                </button>
            </form>
        </div>
        <div class="orders-philter">
            <label class="orders-philter-select">
                <select class="js-example-basic-single">
                    <option value="0">3D Printing</option>
                    <option value="1">Advertising</option>
                    <option value="2">Aerospace</option>
                    <option value="3">Analytics/Big Data</option>
                </select>
            </label>
            <label class="orders-philter-select">
                <select class="js-example-basic-single-no-search">
                    <option value="0" selected disabled>--</option>
                    <option value="1">Data</option>
                    <option value="2">Type</option>
                </select>
            </label>
            <button class="orders-philter-btn" type="button">
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
                                        <i class="tree-dots"></i>
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
                                        <input type="checkbox">
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


