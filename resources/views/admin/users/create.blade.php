@extends('admin.layouts.app')

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Create User</h2>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Table</li>
                        <li class="breadcrumb-item active">Jquery Datatable</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @if($errors->any())
                {!! implode('', $errors->all('<div>:message</div>')) !!}
            @endif
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="form-control">
                        <form action="{{ route('users.store') }}" method="post">
                            @csrf
                            <input type="text" name="name" placeholder="Name">
                            <input type="text" name="surname" placeholder="Surname">
                            <input type="text" name="email" placeholder="Email">
                            <input type="text" name="linkedin" placeholder="Linkedin">
                            <input type="text" name="fund_address" placeholder="Fund address">
                            <input type="text" name="fund_name" placeholder="Fund name">
                            <input type="text" name="receive_news" placeholder="receive_news">
                            <select name="role_id">
                                @foreach($roles as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <select name="user_type_id">
                                @foreach($userTypes as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <input type="password" placeholder="password" name="password"/>
                            <input type="password" placeholder="password_confirmation" name="password_confirmation"/>
                            <button type="submit">Save</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection