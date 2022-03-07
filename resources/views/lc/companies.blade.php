@extends('layouts.main')

@section('content')

    <link rel="stylesheet" href="{{asset('css/pages/page-lc-company.min.css')}}">
    <div class="company" id="tabs">
        <div class="company-wrapper">
            <ul class="tab-wrapper nav-tabs">
                <li class="t-m f18-l32 purple1 tab-n">
                    Подписки на компании
                </li>
                <li class="t-m f18-l32 purple1 tab-n active">
                    Все компании
                </li>
            </ul>
            <div class="link-wrapper">
                <a class="btn w115" href="#">
                    Buy
                </a>
                <a class="btn w115" href="#">
                    Sell
                </a>
            </div>
        </div>
        <div class="company-search">
            <form class="company-search-form w310" action="#">
                <input class="i-f2" type="search" placeholder="Search">
                <button class="reset-btn">
                    <i class="icon icon-search"></i>
                </button>
            </form>
            <p class="company-search-text t-r f16-l24 purple2">
                You can add company если компании нет в списке .
                <a class="company-search-link" href="{{route('companies.create')}}">
                    <i class="icon icon-green-circle-plus"></i>
                </a>
            </p>
        </div>
        <div class="company-philter">
            <div class="company-philter-select">
                <select class="js-example-basic-single">
                    @foreach($categories as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="company-philter-select">
                <select class="js-example-basic-single">
                    <option value="0">< $500M</option>
                    <option value="1">$500M - $1B</option>
                    <option value="2">$1B - $5B</option>
                    <option value="3">$5B +</option>
                </select>
            </div>
            <button class="company-philter-btn" type="button">
                Clear filters
                <i class="icon icon-close-green"></i>
            </button>
        </div>
        <ul class="company-list content-t">

            @foreach($watchlist as $item)
                <li class="company-item">
                    <a class="company-item-link" href="#">
                        <picture>
                            <source srcset="{{asset('storage/companies/'.$item->company->image)  }}" type="image/webp">
                            <img class="company-item-img" src="{{asset('storage/companies/'.$item->company->image)  }}"
                                 alt=""></picture>
                    </a>
                    <a class="company-item-company t-sb f24-l32 purple1" href="#">{{$item->company->companyName}}</a>
                    <p class="company-item-tech t-r f16-l24 purple3">
                        @forelse($item->company->category as $category)
                            {{$category->name }}
                        @empty

                        @endforelse
                    </p>
                    <p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
                    <span class="company-item-numb t-r f16-l24 purple3">{{$item->company?->valuation}}B</span>
                    <form class="company-item-form" action="{{route('delete-wali',$item)}}" method="POST">
                        <div class="company-item-watch">
                            <div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
                            @csrf
                            <input type="hidden" name="company_id" value="{{$item->company_id}}">
                            <button type="submit" class="reset-btn">
                                <i class="icon icon-trash"></i>
                            </button>
                        </div>
                    </form>
                </li>
            @endforeach
        </ul>
        <ul class="company-list content-t active">

            @foreach($companies as $company)
                <li class="company-item">
                    <a class="company-item-link" href="#">
                        <picture>
                            <source srcset="{{asset('storage/companies/'.$company->image)  }}" type="image/webp">
                            <img class="company-item-img" src="{{asset('storage/companies/'.$company->image)  }}"
                                 alt=""></picture>
                    </a>
                    <a class="company-item-company t-sb f24-l32 purple1" href="#">{{$company->companyName}}</a>
                    <p class="company-item-tech t-r f16-l24 purple3">
                        @foreach($categories as $item)
                            @if($company->category->pluck('id')->contains($item->id))
                                {{$item->name }}
                            @endif
                        @endforeach
                    </p>
                    <p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
                    <span class="company-item-numb t-r f16-l24 purple3">{{$company->valuation}}B</span>
                    <form class="company-item-form" action="/companies/wali" method="POST">
                        @csrf
                        <input type="hidden" name="company_id" value="{{$company->id}}">
                        <div class="company-item-add-watch active">
                            <button class="btn btn-green">Add to watch list</button>
                            <div class="company-item-drop">
                                <p class="company-item-notifications f12-l18 t-r purple3">Укажите уведомления по каким
                                    ордерам вы хотите получать</p>
                                <div class="form_radio">
                                    <label>
                                        <input type="radio" name="type" value="Bid">
                                        <span></span>
                                        BID
                                    </label>
                                </div>
                                <div class="form_radio">
                                    <label>
                                        <input type="radio" name="type" value="Asc">
                                        <span></span>
                                        ASC
                                    </label>
                                </div>
                                <div class="form_radio">
                                    <label>
                                        <input type="radio" name="type" value="All">
                                        <span></span>
                                        ALL
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
            @endforeach

        </ul>
    </div>
    <script src="{{asset('js/lib/jquery.min.js')}}"></script>
    <script src="{{asset('js/lib/select2.min.js')}}"></script>
    <script src="{{asset('js/pages/page-lc-company.js')}}" type="module"></script>
@endsection
