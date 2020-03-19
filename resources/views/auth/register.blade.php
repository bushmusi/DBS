@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }} </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        @foreach ($CityList as $item)
                            {{   $item->state   }} <br>
                        @endforeach
                        <div class="form-group row">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mname"
                                class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                            <div class="col-md-6">
                                <input id="mname" type="text" class="form-control @error('mname') is-invalid @enderror"
                                    name="mname" value="{{ old('mname') }}" required autocomplete="mname" autofocus>

                                @error('mname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="phone"
                                class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend @error('phone') is-invalid @enderror">
                                        <span class="input-group-text">+251</span>
                                    </div>
                                    <input id="phone" type="text"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        value="{{ old('phone') }}">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                        </div>



                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <!-- Default inline 1-->
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio"
                                        class="custom-control-input @error('gender') is-invalid @enderror" id="gender1"
                                        name="gender" value="Male">
                                    <label class="custom-control-label" for="gender1">Male</label>
                                </div>

                                <!-- Default inline 2-->
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio"
                                        class="custom-control-input @error('gender') is-invalid @enderror" id="gender2"
                                        name="gender" value="Female">
                                    <label class="custom-control-label" for="gender2">Female</label>
                                </div>
                                <label class="is-invalid"></label>

                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="userTypeId"
                                class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                            <div class="col-md-6">
                                <select class="custom-select @error('userTypeId') is-invalid @enderror"
                                    name="userTypeId" id="userTypeId">
                                    <option selected value="">Select one</option>
                                    @foreach ($UserTypeList ?? '' as $item)
                                    <option value="{{$item->id}}">{{ $item->name }}</option>
                                    @endforeach

                                </select>

                                @error('userTypeId')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div id="companyForm">
                            <div class="form-group row">
                                <label for="cName"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                                <div class="col-md-6">
                                    <input id="cName" type="text"
                                        class="form-control @error('cName') is-invalid @enderror" name="cName">

                                    @error('cName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cImage"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Company Logo') }}</label>

                                <div class="col-md-6">
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input  @error('cImage') is-invalid @enderror" id="cImage"
                                            aria-describedby="inputGroupFileAddon01" name="cImage">
                                        <label class="custom-file-label" for="cImage">Choose file</label>
                                    </div>

                                    <label class="is-invalid"></label>
                                    @error('cImage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cDesc"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Company Description') }}</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" id="cDesc" name="cDesc" rows="7"></textarea>

                                    @error('cDesc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>



                            <div class="form-group row">
                                <label for="cDesc"
                                    class="col-md-4 col-form-label text-md-right">{{ __('City Address') }}</label>

                                <div class="col-md-6">


                                    {{-- <select class="selectpicker show-tick w-100" data-live-search="true">
                                        <option data-tokens="select">Choose city</option>

                                        @foreach ($CityList as $item)
                                            <option data-tokens="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach

                                    </select> --}}


                                    @error('cDesc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>


                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#companyForm').hide();
    $(document).on('change','#userTypeId',function(){
        var type = $("#userTypeId :selected").text(); 
        if(type == 'Company')
        {
            $('#companyForm').show();
        }
        else{
            $('#companyForm').hide();
        }
    })
</script>

@endsection