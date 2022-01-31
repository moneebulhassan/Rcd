@extends('layouts.app')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <form  action="{{ route('registerperson.update', $register->id) }}" method="post">
                @method('PUT')
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">

                    <div class="row">
                        <div class="col-4">
                            <div class="input-style-1">
                                <label for="first_name">{{ __(' First Name') }}</label>
                                <input value="{{ $register->first_name }}" @error('first_name') class="form-control is-invalid" @enderror type="text" name="first_name" id="first_name" placeholder="{{ __(' First Name') }}" required autocomplete="first_name" autofocus>
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
                                <input value="{{ $register->last_name }}" @error('last_name') class="form-control is-invalid" @enderror type="text" name="last_name" id="last_name" placeholder="{{ __(' Last Name') }}" required autocomplete="last_name" autofocus>
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
                                <input value="{{ $register->id_num }}" @error('id_num') class="form-control is-invalid" @enderror type="number" name="id_num" id="id_num" placeholder="{{ __('ID/ Passport Number') }}" required autocomplete="id_num" autofocus>
                                @error('id_num')
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
                                <label for="dob">{{ __(' Date of Birth') }}</label>
                                <input value="{{$register->dob}}" @error('dob') class="form-control is-invalid" @enderror type="date" name="dob" id="dob" placeholder="{{ __(' Date of Birth') }}" required autocomplete="dob" autofocus>
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
                                <input value="{{$register->phone}}" @error('phone') class="form-control is-invalid" @enderror type="number" name="phone" id="phone" placeholder="{{ __('Phone') }}" required autocomplete="phone" autofocus>
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
                                <input value="{{$register->address}}" @error('address') class="form-control is-invalid" @enderror type="text" name="address" id="address" placeholder="{{ __('Address') }}" required autocomplete="address" autofocus>
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
                                <input value="{{$register->email}}" @error('email') class="form-control is-invalid" @enderror type="email" name="email" id="email" placeholder="{{ __('email') }}" required autocomplete="email" autofocus>
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
                                <input value="{{$register->date_of_join}}" @error('date_of_join') class="form-control is-invalid" @enderror type="date" name="date_of_join" id="date_of_join" placeholder="{{ __('date_of_join') }}" required autocomplete="date_of_join" autofocus>
                                @error('date_of_join')
                                <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                                 </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputState">Blood group</label>
                            <select name="blood_group" class="form-control">--}}
                                                        <option selected>Choose...</option>
                                                        <option {{$register->blood_group == 'A+' ? 'selected' : ''}} value="A">A+</option>
                                                        <option {{$register->blood_group == 'A-' ? 'selected' : ''}} value="B">A-</option>
                                                        <option {{$register->blood_group == 'B+' ? 'selected' : ''}} value="B">B+</option>
                                                        <option {{$register->blood_group == 'B-' ? 'selected' : ''}} value="B">B-</option>
                                                        <option {{$register->blood_group == 'O+' ? 'selected' : ''}} value="B">O+</option>
                                                        <option {{$register->blood_group == 'O-' ? 'selected' : ''}} value="B">O-</option>
                                                        <option {{$register->blood_group == 'AB+' ? 'selected' : ''}} value="B">AB+</option>
                                                        <option {{$register->blood_group == 'AB-' ? 'selected' : ''}} value="B">AB-</option>
                                                    </select>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-4">
                            <div class="input-style-1">
                                <label for="guardian_name">{{ __(' Guardian Name') }}</label>
                                <input value="{{$register->guardian_name}}" @error('guardian_name') class="form-control is-invalid" @enderror type="text" name="guardian_name" id="guardian_name" placeholder="{{ __('Guardian Name') }}" required autocomplete="guardian_name" autofocus>
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
                                <input value="{{$register->guardian_address}}" @error('guardian_address') class="form-control is-invalid" @enderror type="text" name="guardian_address" id="guardian_address" placeholder="{{ __('Guardian Address') }}" required autocomplete="guardian_address" autofocus>
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
                                <input value="{{$register->guardian_number}}" @error('guardian_number') class="form-control is-invalid" @enderror type="number" name="guardian_number" id="guardian_number" placeholder="{{ __('Guardian Number') }}" required autocomplete="guardian_number" autofocus>
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
                            <select name="education" class="form-control">--}}
                                                        <option selected>Choose...</option>
                                                        <option {{$register->education == 'high school' ? 'selected' : ''}} value="high school">high school</option>
                                                        <option {{$register->education == 'junior school' ? 'selected' : ''}} value="junior school">junior school</option>

                                                    </select>
                                                    <div class="clearfix"></div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputState">Area of Specialization </label>
                                                    <select name="aos" class="form-control">
                                                        <option selected>Choose...</option>
                                                        <option {{$register->aos == 'First Aid' ? 'selected' : ''}} value="First Aid">First Aid</option>
                                                        <option {{$register->aos == 'Dissemination' ? 'selected' : ''}} value="Dissemination">Dissemination</option>
                                                        <option {{$register->aos == 'Disaster Management' ? 'selected' : ''}} value="Disaster Management">Disaster Management</option>

                                                    </select>
                                                    <div class="clearfix"></div>
                        </div>

                        <div class="col-4">
                            <label for="inputState">{{ __('Sex') }}</label>
                            <select name="sex" class="form-control">--}}
                                                        <option selected>Choose...</option>
                                                        <option {{$register->sex == 'Male' ? 'selected' : ''}} value="Male">Male</option>
                                                        <option {{$register->sex == 'female' ? 'selected' : ''}} value="female">female</option>
                                                    </select>
                                                    <div class="clearfix"></div>
                        </div>



                    </div>
                    <br>

                             <div class="form-group">
                                                <div class="row">
                                                    <label class="">Link</label>
                                                    <div class="col-md-6">
                                                        <select name="link_id" class="form-control">
                                                            <option value="">Choose Link</option>
                                                            @foreach($link as $li)
                                                                <option value="{{ $li->id }}"

                                                                        @if($li->id == $register->link_id)
                                                                        selected
                                                                    @endif

                                                                >{{ $li->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>


{{--                    <div class="row">--}}
{{--                        <label class="col-md-3">First</label>--}}
{{--                        <div class="col-md-6"><input type="text" name="first_name" class="form-control" value="{{ $register->first_name }}"></div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <label class="col-md-3">last_name</label>--}}
{{--                        <div class="col-md-6"><input type="text" name="last_name" class="form-control" value="{{ $register->last_name }}"></div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <label class="col-md-3">sex</label>--}}
{{--                        <select name="sex" class="form-control">--}}
{{--                            <option selected>Choose...</option>--}}
{{--                            <option {{$register->sex == 'Male' ? 'selected' : ''}} value="Male">Male</option>--}}
{{--                            <option {{$register->sex == 'female' ? 'selected' : ''}} value="female">female</option>--}}
{{--                        </select>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <label class="col-md-3">date of birth</label>--}}
{{--                        <div class="col-md-6"><input type="date" name="dob" class="form-control" value="{{ $register->dob }}"></div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <label class="col-md-3">phone</label>--}}
{{--                        <div class="col-md-6"><input type="number" name="phone" class="form-control" value="{{ $register->phone }}"></div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <label class="col-md-3">address</label>--}}
{{--                        <div class="col-md-6"><input type="text" name="address" class="form-control" value="{{ $register->address }}"></div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <label class="col-md-3">email</label>--}}
{{--                        <div class="col-md-6"><input type="email" name="email" class="form-control" value="{{ $register->email }}"></div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <label class="col-md-3">date of join</label>--}}
{{--                        <div class="col-md-6"><input type="date" name="date_of_join" class="form-control" value="{{ $register->date_of_join }}"></div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <label class="col-md-3">Blood Group</label>--}}
{{--                        <select name="blood_group" class="form-control">--}}
{{--                            <option selected>Choose...</option>--}}
{{--                            <option {{$register->blood_group == 'A+' ? 'selected' : ''}} value="A">A+</option>--}}
{{--                            <option {{$register->blood_group == 'A-' ? 'selected' : ''}} value="B">A-</option>--}}
{{--                            <option {{$register->blood_group == 'B+' ? 'selected' : ''}} value="B">B+</option>--}}
{{--                            <option {{$register->blood_group == 'B-' ? 'selected' : ''}} value="B">B-</option>--}}
{{--                            <option {{$register->blood_group == 'O+' ? 'selected' : ''}} value="B">O+</option>--}}
{{--                            <option {{$register->blood_group == 'O-' ? 'selected' : ''}} value="B">O-</option>--}}
{{--                            <option {{$register->blood_group == 'AB+' ? 'selected' : ''}} value="B">AB+</option>--}}
{{--                            <option {{$register->blood_group == 'AB-' ? 'selected' : ''}} value="B">AB-</option>--}}
{{--                        </select>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}





{{--                    <div class="row">--}}
{{--                        <label class="col-md-3">guardian name</label>--}}
{{--                        <div class="col-md-6"><input type="text" name="guardian_name" class="form-control" value="{{ $register->guardian_name }}"></div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <label class="col-md-3">guardian_address</label>--}}
{{--                        <div class="col-md-6"><input type="text" name="guardian_address" class="form-control" value="{{ $register->guardian_address }}"></div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <label class="col-md-3">guardian number</label>--}}
{{--                        <div class="col-md-6"><input type="number" name="guardian_number" class="form-control" value="{{ $register->guardian_number }}"></div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <label class="col-md-3">education</label>--}}
{{--                        <div class="col-md-6"><input type="text" name="education" class="form-control" value="{{ $register->education }}"></div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <label class="col-md-3">Level Of Education</label>--}}
{{--                        <select name="education" class="form-control">--}}
{{--                            <option selected>Choose...</option>--}}
{{--                            <option {{$register->education == 'high school' ? 'selected' : ''}} value="high school">high school</option>--}}
{{--                            <option {{$register->education == 'junior school' ? 'selected' : ''}} value="junior school">junior school</option>--}}

{{--                        </select>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}





{{--                    <div class="row">--}}
{{--                        <label class="col-md-3">Area of specialization</label>--}}
{{--                        <select name="aos" class="form-control">--}}
{{--                            <option selected>Choose...</option>--}}
{{--                            <option {{$register->aos == 'First Aid' ? 'selected' : ''}} value="First Aid">First Aid</option>--}}
{{--                            <option {{$register->aos == 'Dissemination' ? 'selected' : ''}} value="Dissemination">Dissemination</option>--}}
{{--                            <option {{$register->aos == 'Disaster Management' ? 'selected' : ''}} value="Disaster Management">Disaster Management</option>--}}

{{--                        </select>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}


{{--                    <div class="row">--}}
{{--                        <label class="col-md-3">id_num</label>--}}
{{--                        <div class="col-md-6"><input type="text" name="id_num" class="form-control" value="{{ $register->id_num }}"></div>--}}
{{--                        <div class="clearfix"></div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <div class="row">--}}
{{--                            <label class="col-md-3">Link</label>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <select name="link_id" class="form-control">--}}
{{--                                    <option value="">Choose Link</option>--}}
{{--                                    @foreach($link as $li)--}}
{{--                                        <option value="{{ $li->id }}"--}}

{{--                                                @if($li->id == $register->link_id)--}}
{{--                                                selected--}}
{{--                                            @endif--}}

{{--                                        >{{ $li->name }}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}



                </div>
                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>



            </form>
        </div>
    </section>


@endsection
