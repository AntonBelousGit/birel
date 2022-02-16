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
                        <form action="{{ route('users.update',$user) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Выбрать
                                        роль</label>
                                </div>
                                <select name="role_id" class="custom-select">
                                    @foreach($roles as $item)
                                        <option value="{{$item->id}}"
                                        @if ($item->id == $user->role->first()->id)
                                            selected
                                        @endif
                                            >{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Выбрать
                                        тип</label>
                                </div>
                                <select name="type" class="custom-select">
                                        <option value="Representative"  @if ($user->type === 'Representative') selected @endif>Representative</option>
                                        <option value="Individual"  @if ($user->type === 'Individual') selected @endif>Individual</option>
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
