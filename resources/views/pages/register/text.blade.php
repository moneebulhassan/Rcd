@extends('layouts.app')
@section('content')


    <div class="col-lg-12">
        <h1 class="page-header">
            Show Person
            <div class="pull-right">
                <a class="btn btn-primary btn-outline" href="{{ route('registerperson.index') }}"><i class="fa fa-credit-card"></i> Back</a>
            </div>
        </h1>
    </div>
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">



            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <td>Code</td>
                            <th>{{ $register->id }}</th>
                        </tr>
                        <tr>
                            <td>First Name</td>
                            <th>{{ $register->first_name }}</th>
                        </tr>
                        <tr>
                            <td>Family Name</td>
                            <th>{{ $register->last_name }}</th>
                        </tr>

                        <tr>
                            <td>Blood Group</td>
                            <th>{{ $register->blood_group }}</th>
                        </tr>
                        <tr>
                            <td>Guardian</td>
                            <th>{{ $register->guardian_name}}</th>
                        </tr>
                        <tr>
                            <td>Guardian address</td>
                            <th>{{ $register->guardian_address }}</th>
                        </tr>


                        <tr>
                            <td>Email</td>
                            <th>{{ $register->first_name }}</th>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <th>{{ $register->first_name }}</th>
                        </tr>
                        <tr>
                            <td>Bai'at</td>
                            <th>{{ $register->first_name }}</th>
                        </tr>
                        <tr>
                            <td>Bai'at Date</td>
                            <th>{{ $register->first_name }}</th>
                        </tr>



                        <tr>
                            <td>Timestamp</td>
                            <th>{{ $register->created_at }}</th>
                        </tr>
                    </table>
                </div>


            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Tajnid
            </div>

        </div>


    </div>
@endsection



