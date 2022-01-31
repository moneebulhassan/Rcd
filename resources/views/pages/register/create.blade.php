@extends('layouts.app')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <form method="post" action="{{ route('registerperson.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

{{--                <div class="form-row">--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="inputEmail4">First Name</label>--}}
{{--                        <input type="text" class="form-control" name="first_name" placeholder="First Name">--}}
{{--                    </div>--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="inputPassword4">Last Name</label>--}}
{{--                        <input type="text" class="form-control" name="last_name" placeholder="Last Name">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="form-group col-md-4">--}}
{{--                    <label for="inputState">Sex</label>--}}
{{--                    <select name="sex" class="form-control">--}}
{{--                        <option selected>Choose...</option>--}}
{{--                        <option>Male</option>--}}
{{--                        <option>female</option>--}}
{{--                    </select>--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="inputAddress2">date of birth</label>--}}
{{--                    <input type="date" class="form-control" name="dob" placeholder="date of birth">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="inputAddress2">Phone</label>--}}
{{--                    <input type="number" class="form-control" name="phone" placeholder="phone number">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="inputAddress2">address</label>--}}
{{--                    <input type="text" class="form-control" name="address" placeholder="address">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="inputAddress2">email</label>--}}
{{--                    <input type="email" class="form-control" name="email" placeholder="email">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="inputAddress2">date of joining</label>--}}
{{--                    <input type="date" class="form-control" name="date_of_join" placeholder="joined on">--}}
{{--                </div>--}}

{{--                <div class="form-group col-md-4">--}}
{{--                    <label for="inputState">blood group</label>--}}
{{--                    <select name="blood_group" class="form-control">--}}
{{--                        <option selected>Choose...</option>--}}
{{--                        <option>A+</option>--}}
{{--                        <option>A-</option>--}}
{{--                        <option>B+</option>--}}
{{--                        <option>B-</option>--}}
{{--                        <option>O+</option>--}}
{{--                        <option>O-</option>--}}
{{--                        <option>AB+</option>--}}
{{--                        <option>AB-</option>--}}
{{--                    </select>--}}
{{--                </div>--}}



{{--                <div class="form-group">--}}
{{--                    <label for="inputAddress2">Guardian name</label>--}}
{{--                    <input type="text" class="form-control" name="guardian_name" placeholder="guardian name ">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="inputAddress2">guardian address</label>--}}
{{--                    <input type="text" class="form-control" name="guardian_address" placeholder="guardian address">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="inputAddress2">guardian number</label>--}}
{{--                    <input type="number" class="form-control" name="guardian_number" placeholder="guardian number">--}}
{{--                </div>--}}

{{--                <div class="form-group col-md-4">--}}
{{--                    <label for="inputState">Education</label>--}}
{{--                    <select name="education" class="form-control">--}}
{{--                        <option selected>Choose...</option>--}}
{{--                        <option>...</option>--}}
{{--                        <option>high school</option>--}}
{{--                        <option>junior school</option>--}}
{{--                    </select>--}}
{{--                </div>--}}

{{--                <div class="form-group col-md-4">--}}
{{--                    <label for="inputState">Area of Specialization </label>--}}
{{--                    <select name="aos" class="form-control">--}}
{{--                        <option selected>Choose...</option>--}}
{{--                        <option>...</option>--}}
{{--                        <option>First Aid</option>--}}
{{--                        <option>Dissemination</option>--}}
{{--                        <option>Disaster Management</option>--}}
{{--                    </select>--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="inputAddress2">ID/Passport number</label>--}}
{{--                    <input type="number" class="form-control" name="id_num" placeholder="ID/Passport number">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <div class="row">--}}
{{--                        <label class="col-md-3">Link</label>--}}
{{--                        <div class="col-md-6">--}}
{{--                            <select name="link_id" class="form-control">--}}
{{--                                <option value="">Choose Link</option>--}}
{{--                                @foreach($link as $li)--}}
{{--                                    <option value="{{ $li->id }}">{{ $li->name }}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}




            </form>
        </div>


    </section>

    <div class="container">
        <div class="row justify-content-around">
            <div class="col-12 col-lg-10 col-xl-12 mx-auto">

                <div class="my-4">

                    <form method="post" action="{{ route('registerperson.store') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <hr class="my-4" />
                        <div class="form-row">
                            <div class="row">
                                <div class="col-4">
                                    <div class="input-style-1">
                                        <label for="first_name">{{ __(' First Name') }}</label>
                                        <input @error('first_name') class="form-control is-invalid" @enderror type="text" name="first_name" id="first_name" placeholder="{{ __(' First Name') }}" required autocomplete="first_name" autofocus>
                                        @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                                 </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="input-style-1">
                                        <label for="last_name">{{ __(' Last Name') }}</label>
                                        <input @error('last_name') class="form-control is-invalid" @enderror type="text" name="last_name" id="last_name" placeholder="{{ __(' Last Name') }}" required autocomplete="last_name" autofocus>
                                        @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                                 </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="input-style-1">
                                        <label for="id_num">{{ __(' ID/ Passport Number') }}</label>
                                        <input @error('id_num') class="form-control is-invalid" @enderror type="number" name="id_num" id="id_num" placeholder="{{ __('ID/ Passport Number') }}" required autocomplete="id_num" autofocus>
                                        @error('id_num')
                                        <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                                 </span>
                                        @enderror
                                    </div>
                                </div>




                            </div>
                        </div>

                        <div class="row">

                            <div class="col-4">
                                <div class="input-style-1">
                                    <label for="dob">{{ __(' Date of Birth') }}</label>
                                    <input @error('dob') class="form-control is-invalid" @enderror type="date" name="dob" id="dob" placeholder="{{ __(' Date of Birth') }}" required autocomplete="dob" autofocus>
                                    @error('dob')
                                    <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                                 </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-4">
                                <div class="input-style-1">
                                    <label for="phone">{{ __(' Phone Number') }}</label>
                                    <input @error('phone') class="form-control is-invalid" @enderror type="number" name="phone" id="phone" placeholder="{{ __('Phone') }}" required autocomplete="phone" autofocus>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                                 </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="input-style-1">
                                    <label for="address">{{ __(' Address') }}</label>
                                    <input @error('address') class="form-control is-invalid" @enderror type="text" name="address" id="address" placeholder="{{ __('Address') }}" required autocomplete="address" autofocus>
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                                 </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="input-style-1">
                                    <label for="email">{{ __(' Email') }}</label>
                                    <input @error('email') class="form-control is-invalid" @enderror type="email" name="email" id="email" placeholder="{{ __('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                                 </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="input-style-1">
                                    <label for="date_of_join">{{ __(' Date of Join') }}</label>
                                    <input @error('date_of_join') class="form-control is-invalid" @enderror type="date" name="date_of_join" id="date_of_join" placeholder="{{ __('date_of_join') }}" required autocomplete="date_of_join" autofocus>
                                    @error('date_of_join')
                                    <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                                 </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputState">Blood group</label>
                                <select name="blood_group" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>B+</option>
                                    <option>B-</option>
                                    <option>O+</option>
                                    <option>O-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-4">
                                <div class="input-style-1">
                                    <label for="guardian_name">{{ __(' Guardian Name') }}</label>
                                    <input @error('guardian_name') class="form-control is-invalid" @enderror type="text" name="guardian_name" id="guardian_name" placeholder="{{ __('Guardian Name') }}" required autocomplete="guardian_name" autofocus>
                                    @error('guardian_name')
                                    <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                                 </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="input-style-1">
                                    <label for="guardian_address">{{ __(' Guardian Address') }}</label>
                                    <input @error('guardian_address') class="form-control is-invalid" @enderror type="text" name="guardian_address" id="guardian_address" placeholder="{{ __('Guardian Address') }}" required autocomplete="guardian_address" autofocus>
                                    @error('guardian_address')
                                    <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                                 </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="input-style-1">
                                    <label for="guardian_number">{{ __(' Guardian Number') }}</label>
                                    <input @error('guardian_number') class="form-control is-invalid" @enderror type="number" name="guardian_number" id="guardian_number" placeholder="{{ __('Guardian Number') }}" required autocomplete="guardian_number" autofocus>
                                    @error('guardian_number')
                                    <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                                 </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class="form-group col-md-4">
                                <label for="inputState">Level of Education</label>
                                <select name="education" class="form-control">
                                    <option selected>Choose...</option>

                                    <option>high school</option>
                                    <option>junior school</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputState">Area of Specialization </label>
                                <select name="aos" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                    <option>First Aid</option>
                                    <option>Dissemination</option>
                                    <option>Disaster Management</option>
                                </select>
                            </div>

                            <div class="col-4">
                                <label for="inputState">{{ __('Sex') }}</label>
                                <select name="sex" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>Male</option>
                                    <option>female</option>
                                </select>
                            </div>



                        </div>
                        <br>
                        <div class="row">
                            <label class="">Link</label>
                            <div class="col-md-6">
                                <select name="link_id" class="form-control">
                                    <option value="">Choose Link</option>
                                    @foreach($link as $li)
                                        <option value="{{ $li->id }}">{{ $li->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-row">




                        </div>
                        <hr class="my-4" />

                        <button type="submit" class="btn btn-primary" value="save">Save </button>
                    </form>
                </div>
            </div>
        </div>

    </div>



@endsection
