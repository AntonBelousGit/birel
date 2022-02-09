<aside class="sidebar drop-down">
	<ul class="sidebar-nav">
		<li class="sidebar-nav-item">
			<a class="nav-link" href="#">
				<i class="icon icon-stack-purple"></i>
				<i class="icon icon-stack-green"></i>
				<i class="icon icon-stack-white"></i>
				<span class="t-r f18-l32 purple1">My orders</span>
			</a>
		</li>
		<li class="sidebar-nav-item">
			<a class="nav-link 
			@if(Route::currentRouteName()=='home')
			active
			@endif
			" href="{{ route('home')}}">
				<i class="icon icon-user-purple"></i>
				<i class="icon icon-user-green"></i>
				<i class="icon icon-user-white"></i>
				<span class="t-r f18-l32 purple1">Profile</span>
			</a>
		</li>
		<li class="sidebar-nav-item">
			<a class="nav-link 
			@if(Route::is('companies'))
			active
			@endif
			 "href="/companies">
				<i class="icon icon-case-purple"></i>
				<i class="icon icon-case-green"></i>
				<i class="icon icon-case-white"></i>
				<span class="t-r f18-l32 purple1">Companies</span>
			</a>
		</li>
		<li class="sidebar-nav-item">
			<a class="nav-link" href="#">
				<i class="icon icon-stack-plus-purple"></i>
				<i class="icon icon-stack-plus-green"></i>
				<i class="icon icon-stack-plus-white"></i>
				<span class="t-r f18-l32 purple1">Добавить ордер</span>
			</a>
		</li>
		<li class="sidebar-nav-item">
			<a class="nav-link {{ Route::is('addcompany') ? 'active' : '' }}" href="{{ route('addcompany')}}">
				<i class="icon icon-case-plus-purple"></i>
				<i class="icon icon-case-plus-green"></i>
				<i class="icon icon-case-plus-white"></i>
				<span class="t-r f18-l32 purple1">Add company</span>
			</a>
		</li>
	</ul>
	<div class="sidebar-btn">
		<button class="reset-btn">
			<i class="icon icon-massage"></i>
			<span class="t-r f18-l25 white">
				Задайте вопрос менеджеру
			</span>
		</button>
	</div>
	<ul class="sidebar-list">
		<li class="sidebar-list-item">
			<a class="item-link t-r f18-l32 white" href="#">
				Terms of Use
			</a>
		</li>
		<li class="sidebar-list-item">
			<a class="item-link t-r f18-l32 white" href="#">
				Privacy Policy
			</a>
		</li>
		<li class="sidebar-list-item">
			<a class="item-link t-r f18-l32 white" href="#">
				Further Disclosures
			</a>
		</li>
	</ul>
</aside>