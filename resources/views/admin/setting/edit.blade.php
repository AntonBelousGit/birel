@extends('admin.layouts.app')

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Setting</h2>
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
                        <form action="{{ route('setting-update',['setting'=>'email']) }}" method="post" >
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="">Form sent</label>
                                <input type="email" class="form-control" name="attribute_name[email]" placeholder="Category Name"
                                       value="{{$settings[0]->attribute_name['email']}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="form-control mt-4">
                        <form action="{{ route('setting-update',['setting'=>'social']) }}" method="post" >
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="">Twitter</label>
                                <input type="text" class="form-control" name="attribute_name[twitter]" placeholder="Twitter link"
                                       value="{{$settings[1]->attribute_name['twitter']}}">
                                <label for="">Linkedin</label>
                                <input type="text" class="form-control" name="attribute_name[linkedin]" placeholder="Linkedin link"
                                       value="{{$settings[1]->attribute_name['linkedin']}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
