@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{asset('css/pages/page-lc-company.min.css')}}">
@endsection

@section('scripts')
    <script src="{{asset('js/lib/jquery.min.js')}}"></script>
    <script src="{{asset('js/lib/select2.min.js')}}"></script>
    <script src="{{asset('js/pages/page-lc-company.js')}}" type="module"></script>
@endsection

@section('content')

    <div class="company" id="tabs">
        <div class="company-wrapper">
            <ul class="tab-wrapper nav-tabs">
                <li class="t-m f18-l32 purple1 tab-n">
                    Subscriptions to companies
                </li>
                <li class="t-m f18-l32 purple1 tab-n active">
                    All companies
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
                You can add company if the company is not listed.
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

        <div class="company-list content-t">
            <ul class="company-list">
            @foreach($watchlist as $item)
                <li class="company-item">
                    <a class="company-item-link" href="#">
                        <picture>
                            <source srcset="{{asset('storage/companies/'.$item->company->image)  }}" type="image/webp">
                            <img class="company-item-img" src="{{asset('storage/companies/'.$item->company->image)  }}" alt="">
                        </picture>
                    </a>
                    <a class="company-item-company t-sb f24-l32 purple1"
                        href="{{ route('companies.show',$item->company) }}">{{$item->company->companyName}}</a>
                    <p class="company-item-tech t-r f16-l24 purple3">
                        @forelse($item->company->category as $category)
                            <span>{{$category->name }}</span>
                        @empty
                        @endforelse
                    </p>
                    <p class="company-item-tech t-r f16-l24 purple3">
                        Founded: <span> 2003 </span>
                    </p>
                    <p class="company-item-tech t-r f16-l24 purple3">
                        Total funding: <span> $850MM</span>
                    </p>
                    <p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
                    <span class="company-item-numb t-r f16-l24 purple3">{{$item->company?->valuation}} B</span>
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
            <div class="">{{ $watchlist->links('vendor.pagination.custom') }}</div>
        </div>
        <div class="company-list content-t active">
            <ul class="company-list">
            @foreach($companies as $company)
                <li class="company-item">
                    <a class="company-item-link" href="#">
                        <picture>
                            <source srcset="{{asset('storage/companies/'.$company->image)  }}" type="image/webp">
                            <img class="company-item-img" src="{{asset('storage/companies/'.$company->image)  }}" alt="">
                        </picture>
                    </a>
                    <a class="company-item-company t-sb f24-l32 purple1"
                       href="{{ route('companies.show',$company) }}">{{$company->companyName}}</a>
                    <p class="company-item-tech t-r f16-l24 purple3">
                        @foreach($categories as $item)
                            @if($company->category->pluck('id')->contains($item->id))
                                {{$item->name }}
                            @endif
                        @endforeach
                    </p>
                    <div class="company-item-tech t-r f16-l24 purple3">

                        Founded: 2003
                    </div>
                    <div class="company-item-tech t-r f16-l24 purple3">
                        <span>Total funding:</span>
                        <span>$850MM</span>
                    </div>
                    <p class="company-item-val t-r f16-l24 purple1">Last Round Est. Valuation</p>
                    <span class="company-item-numb t-r f16-l24 purple3">{{$company->valuation}}B</span>
                    @if ($company->wali)
                        <form class="company-item-form" action="{{route('delete-wali',$company->wali->id)}}"
                              method="POST">
                            <div class="company-item-watch">
                                <div class="btn2 btn2-green w170 h49 b-h">In watch list</div>
                                @csrf
                                <input type="hidden" name="company_id" value="{{$company->id}}">
                                <button type="submit" class="reset-btn">
                                    <i class="icon icon-trash"></i>
                                </button>
                            </div>
                        </form>
                    @else
                        <form class="company-item-form" action="/companies/wali" method="POST">
                            @csrf
                            <input type="hidden" name="company_id" value="{{$company->id}}">
                            <div class="company-item-add-watch active">
                                <button class="btn btn-green">Add to watch list</button>
                                <div class="company-item-drop">
                                    <p class="company-item-notifications f12-l18 t-r purple3">Specify notifications for
                                        which
                                        orders you want to receive</p>
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
                            </div>
                        </form>
                    @endif
                </li>
            @endforeach
            </ul>
            <div>{{ $companies->links('vendor.pagination.custom')}}</div>
        </div>
        <div class="company-text-bot">
        		<p class="t-r">
        			Согласно действующему законодательству Украины, Администрация отказывается от каких-либо заверений и гарантий, предоставление которых может иным образом подразумеваться, и отказывается от ответственности в отношении Сайта, Содержимого и их использования.
        			<br><br>
        			Ни при каких обстоятельствах Администрация Сайта не будет нести ответственность ни перед какой стороной за любой прямой, непрямой, особый или иной косвенный ущерб в результате любого использования информации на этом Сайте или на любом другом сайте, на который имеется ссылка с нашего сайта, возникновение зависимости, снижения производительности, увольнения или прерывания трудовой активности, а также отчисления из учебных заведений, любую упущенную выгоду, прекращение хозяйственной деятельности, потерю программ или данных в наших информационных системах или иным образом, возникшие в связи с доступом, использованием или невозможностью использования сайта, Содержимого или любого связанного интернет-ресурса, или неработоспособностью, ошибкой, упущением, перебоем, дефектом, простоем в работе или задержкой в ​​передаче, компьютерным вирусом или системным сбоем, даже если администрация будет напрямую сообщено о возможности такого ущерба.
        			Ни при каких обстоятельствах Администрация Сайта не будет нести ответственность ни перед какой стороной за любой прямой, непрямой, особый или иной косвенный ущерб в результате любого использования информации на этом Сайте или на любом другом сайте, на который имеется ссылка с нашего сайта, возникновение зависимости, снижения производительности, увольнения или прерывания трудовой активности, а также отчисления из учебных заведений, любую упущенную выгоду, прекращение хозяйственной деятельности, потерю программ или данных в наших информационных системах или иным образом, возникшие в связи с доступом, использованием или невозможностью использования сайта, Содержимого или любого связанного интернет-ресурса, или неработоспособностью, ошибкой, упущением, перебоем, дефектом, простоем в работе или задержкой в ​​передаче, компьютерным вирусом или системным сбоем, даже если администрация будет напрямую сообщено о возможности такого ущерба.
        			Ни при каких обстоятельствах Администрация Сайта не будет нести ответственность ни перед какой стороной за любой прямой, непрямой, особый или иной косвенный ущерб в результате любого использования информации на этом Сайте или на любом другом сайте, на который имеется ссылка с нашего сайта, возникновение зависимости, снижения производительности, увольнения или прерывания трудовой активности, а также отчисления из учебных заведений, любую упущенную выгоду, прекращение хозяйственной деятельности, потерю программ или данных в наших информационных системах или иным образом, возникшие в связи с доступом, использованием или невозможностью использования сайта, Содержимого или любого связанного интернет-ресурса, или неработоспособностью, ошибкой, упущением, перебоем, дефектом, простоем в работе или задержкой в ​​передаче, компьютерным вирусом или системным сбоем, даже если администрация будет напрямую сообщено о возможности такого ущерба.
        			Ни при каких обстоятельствах Администрация Сайта не будет нести ответственность ни перед какой стороной за любой прямой, непрямой, особый или иной косвенный ущерб в результате любого использования информации на этом Сайте или на любом другом сайте, на который имеется ссылка с нашего сайта, возникновение зависимости, снижения производительности, увольнения или прерывания трудовой активности, а также отчисления из учебных заведений, любую упущенную выгоду, прекращение хозяйственной деятельности, потерю программ или данных в наших информационных системах или иным образом, возникшие в связи с доступом, использованием или невозможностью использования сайта, Содержимого или любого связанного интернет-ресурса, или неработоспособностью, ошибкой, упущением, перебоем, дефектом, простоем в работе или задержкой в ​​передаче, компьютерным вирусом или системным сбоем, даже если администрация будет напрямую сообщено о возможности такого ущерба.
        			<br><br>
        			Пользователь соглашается с тем, что все возможные споры будут решаться согласно норм украинского права.
        			Пользователь соглашается с тем, что нормы и законы о защите прав потребителей не могут быть применимы к нему вне использования Сайта, поскольку он не предоставляет возмездных услуг.
        			Используя данный Сайт, Вы соглашаетесь с «Отказом от ответственности» и установленными Правилами и принимаете всю ответственность, которая может быть на Вас возложена.
        		</p>
        		<button class="btn-open-text">
        			<i class="icon icon-arrow-text"></i>
        		</button>
        	</div>
    </div>

@endsection
