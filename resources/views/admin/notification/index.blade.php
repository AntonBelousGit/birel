@extends('admin.layouts.app')

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>New All User Notification</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if($errors->any())
                {!! implode('', $errors->all('<div>:message</div>')) !!}
            @endif
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="form-control">
                        <form action="{{ route('notification.send') }}" method="post" >
                            @csrf
                            <div class="form-group">
                                <textarea name="message" class="form-control" required   rows="10">{{old('message')}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('admin_panel/bundles/datatablescripts.bundle.js')}}"></script>
    <script src="{{asset('admin_panel/bundles/mainscripts.bundle.js')}}"></script>
    <script src="{{asset('admin_panel/js/pages/tables/jquery-datatable.js')}}"></script>
@endsection
