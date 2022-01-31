@extends('layouts.app')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <br>

            <form method="post" action="{{ route('branches.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="container">
                    <div class="row">
                        <div class="col-5">
                            <strong>Name:</strong>
                            <div class="col"><input type="text" name="name" placeholder=" Enter Branch Name" class="form-control"></div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="col-5">
                            <strong>Address:</strong>
                            <div class="col"><input type="text" name="address" placeholder="Enter Branch Address" class="form-control"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <br>

                </div>

{{--                <div class="form-group">--}}
{{--                    <div class="row">--}}

{{--                        <label class="col-md-3">Name</label>--}}
{{--                        <div class="col-md-6"><input type="text" name="name" class="form-control"></div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                    <br>--}}


{{--                    <div class="row">--}}
{{--                        <label class="col-md-3">Address</label>--}}
{{--                        <div class="col-md-6"><input type="text" name="address" class="form-control"></div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                
                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="Save" >
                </div>
            </form>
        </div>
    </section>

@endsection
