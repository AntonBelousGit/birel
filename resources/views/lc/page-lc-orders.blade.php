@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{asset('css/pages/page-lc-orders.min.css')}}">
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
                            #
                        </div>
                    </th>
                    <th class="head-row-item">
                        <div>
                            Date
                        </div>
                    </th>
                    <th class="head-row-item">
                        <div>
                            Company
                        </div>
                    </th>
                    <th class="head-row-item">
                        <div></div>
                    </th>
                    <th class="head-row-item">
                        <div>
                            Valuation
                        </div>
                    </th>
                    <th class="head-row-item">
                        <div>
                            Volume
                        </div>
                    </th>
                    <th class="head-row-item">
                        <div>
                            Share price
                        </div>
                    </th>
                    <th class="head-row-item">
                        <div>
                            Number of shares
                        </div>
                    </th>
                    <th class="head-row-item">
                        <div>
                            Share type
                        </div>
                    </th>
                    <th class="head-row-item">
                        <div>
                            Deal Structure
                        </div>
                    </th>
                    <th class="head-row-item">
                        <div></div>
                    </th>
                    <th class="head-row-item">
                        <div></div>
                    </th>
                </tr>
                </thead>
                <tbody class="table-body">
                @forelse($orders as $order)
                    <tr class="body-row {{$order->type === 'BID'? 'bid':'ask'}} {{$order->status}}">
                        <td class="body-row-item">
                            <div>
                                {{$loop->iteration}}
                            </div>
                        </td>
                        <td class="body-row-item">
                            <div>
                                01/01/22
                            </div>
                        </td>
                        <td class="body-row-item">
                            <div>
                                {{$order->company->companyName}}
                            </div>
                        </td>
                        <td class="body-row-item">
                            <div>
                                {{$order->type ?? '-'}}
                            </div>
                        </td>
                        <td class="body-row-item">
                            <div>
                                {{$order->valuation_encode ?? '-'}}
                            </div>
                        </td>
                        <td class="body-row-item">
                            <div>
                                {{$order->volume_encode ?? '-'}}
                            </div>
                        </td>
                        <td class="body-row-item">
                            <div>
                                {{$order->share_price_encode ?? '-'}}
                            </div>
                        </td>
                        <td class="body-row-item">
                            <div>
                                {{$order->share_number ?? '-'}}
                            </div>
                        </td>
                        <td class="body-row-item">
                            <div>
                                {{$order->share_type ?? '-'}}
                            </div>
                        </td>
                        <td class="body-row-item">
                            <div>
                                {{$order->deal_structure ?? '-'}}
                            </div>
                        </td>
                        <td class="body-row-item center">
                            <div>
                                <button class="reset-btn" type="button"
                                        data-tippy-content="Базовые сценарии поведения пользователей могут быть рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Современные технологии достигли такого уровня, что дальнейшее развитие различных форм деятельности способствует повышению качества поставленных обществом задач.">
                                    <i class="tree-dots"></i>
                                </button>
                            </div>
                        </td>
                        <td class="body-row-item center">
                            <div>
                                <a href="{{ route('order-lc.show',$order) }}" data-tippy-content="Подсказка о возможности редактирования своего ордера ">
                                    <i class="icon icon-pen-blue"></i>
                                </a>
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


