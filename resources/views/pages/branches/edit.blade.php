@extends('layouts.app')
@section('content')

<section class="content">
    <div class="container-fluid">
        <form method="post" action="{{ route('branches.update',$branch->id) }}">
            @method('PUT')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Name</label>
                    <div class="col-md-6"><input type="text" name="name" class="form-control" value="{{ $branch->name }}"></div>
                    <div class="clearfix"></div>
                </div>

                <div class="row">
                    <label class="col-md-3">Address</label>
                    <div class="col-md-6"><input type="text" name="address" class="form-control" value="{{ $branch->address }}"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info" value="Save">
            </div>
        </form>
    </div>
</section>

@endsection
