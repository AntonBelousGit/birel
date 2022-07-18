@extends('admin.layouts.app')

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Edit User</h2>
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

                            <div class="form-group">
                            <label for="count-order">Count orders</label>
                                <input type="number" id="count-order" min="1" class="form-control" name="active_order" placeholder="Active order"
                                       value="{{old('active_order',$user->active_order)}}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Select type</label>
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
