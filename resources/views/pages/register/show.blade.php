@extends('layouts.app')
@section('content')


    <div class="col-lg-12">
        <h1 class="page-header">


        </h1>

    </div>
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">



            </div>
        </div>
    </div>

    <div class="container">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('registerperson.index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Volunteer Profile</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{ $register->first_name }} {{ $register->last_name }}</h4>

                                    <p class="text-secondary mb-1">{{ $register->sex }}</p>
                                    <p class="text-muted font-size-sm">{{ $register->email }}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">

                                    Date Of Birth</h6>
                                <span class="text-secondary">{{ $register->dob }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">Phone Number</h6>
                                <span class="text-secondary">{{ $register->phone }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">Blood Group</h6>
                                <span class="text-secondary">{{ $register->blood_group }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">Date Of Joining</h6>
                                <span class="text-secondary">{{ $register->date_of_join }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">Registered on</h6>
                                <span class="text-secondary">{{ $register->created_at }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $register->address }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Link</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $register->link->name }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Blood Group</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $register->blood_group }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Guardian's Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $register->guardian_name }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Guardian's Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $register->guardian_address }}
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Guardian's number</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $register->guardian_number }}
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Level Of Education</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $register->education }}
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Area of Specialization</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $register->aos }}
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">ID/Passport Number</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $register->id_num }}
                                </div>
                            </div>

                            <hr>

                        </div>
                    </div>





                </div>
            </div>

        </div>
    </div>


@endsection



