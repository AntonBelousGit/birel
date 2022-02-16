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
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}">
                            </div>
                            <div class="form-group">
                                <input type="text"  class="form-control"  name="surname" placeholder="Surname" value="{{old('surname')}}">
                            </div>
                            <div class="form-group">
                                <input type="text"  class="form-control"  name="email" placeholder="Email" value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <input type="text"  class="form-control"   name="linkedin" placeholder="Linkedin" value="{{old('linkedin')}}">
                            </div>
                            <div class="form-group">
                                <input type="text"  class="form-control"  name="fund_address" placeholder="Fund address" value="{{old('fund_address')}}">
                            </div>
                            <div class="form-group">
                                <input type="text"  class="form-control"  name="fund_name" placeholder="Fund name" value="{{old('fund_name')}}">
                            </div>
                            <div class="form-group">
                                <input type="text"  class="form-control"  name="receive_news" placeholder="Receive news" value="{{old('receive_news')}}">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password"/>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password confirmation" name="password_confirmation"/>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Выбрать
                                        роль</label>
                                </div>
                                <select name="role_id" class="custom-select">
                                    @foreach($roles as $item)
                                        <option value="{{$item->id}}" {{old('role_id') == $item->id? 'selected':'' }}>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Выбрать
                                        тип</label>
                                </div>
                                <select name="type" class="custom-select">
                                    <option value="Representative"  @if (old('type') === 'Representative') selected @endif>Representative</option>
                                    <option value="Individual"  @if (old('type') === 'Individual') selected @endif>Individual</option>
                                </select>
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>


        </div>
    </div>
@endsection
