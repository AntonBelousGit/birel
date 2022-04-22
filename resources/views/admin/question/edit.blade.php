@extends('admin.layouts.app')

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Create Category</h2>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
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
                        <form action="{{ route('question.update',$question) }}" method="post">
                            @csrf
                            @method('patch')

                            <div class="form-group">
                                <label for="">Questions Type</label>
                                <input type="text" class="form-control" placeholder="Questions Type" disabled value="{{$question->theme}}">
                            </div>
                            <div class="form-group">
                                <label for="">Questions Text</label>
                                <textarea class="form-control" name="description"
                                          placeholder="Questions Text" disabled>{{$question->text}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">User Full name</label>
                                <input type="text" class="form-control" placeholder="User Full name" disabled value="{{$question->user->name}} {{$question->user->surname}}">
                            </div>
                            <div class="form-group">
                                <label for="">User email</label>
                                <input type="text" class="form-control" placeholder="User Full name" disabled value="{{$question->user->email}}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Status</label>
                                </div>
                                <select name="status" class="custom-select">
                                    <option value="0" @if ($question->status === 0) selected @endif>New</option>
                                    <option value="1" @if ($question->status === 1) selected @endif>Checked</option>
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
