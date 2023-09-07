@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Profile') }}</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">

        <div class="col-lg-4 order-lg-2">

            <div class="card shadow mb-4">
                <div class="card-profile-image mt-4">
                    <img src="data:image/png;base64,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" alt="" srcset="">
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h5 class="font-weight-bold">{{  Auth::user()->fullName }}</h5>
                                <p>Administrator</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card-profile-stats">
                                <span class="heading">22</span>
                                <span class="description">Friends</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-profile-stats">
                                <span class="heading">10</span>
                                <span class="description">Photos</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-profile-stats">
                                <span class="heading">89</span>
                                <span class="description">Comments</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-8 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">My Account</h6>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('profile.update') }}" autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" name="_method" value="PUT">

                        <h6 class="heading-small text-muted mb-4">User information</h6>

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Name<span class="small text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Name" value="{{ old('name', Auth::user()->name) }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="last_name">Last name</label>
                                        <input type="text" id="last_name" class="form-control" name="last_name" placeholder="Last name" value="{{ old('last_name', Auth::user()->last_name) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">Email address<span class="small text-danger">*</span></label>
                                        <input type="email" id="email" class="form-control" name="email" placeholder="example@example.com" value="{{ old('email', Auth::user()->email) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="current_password">Current password</label>
                                        <input type="password" id="current_password" class="form-control" name="current_password" placeholder="Current password">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="new_password">New password</label>
                                        <input type="password" id="new_password" class="form-control" name="new_password" placeholder="New password">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="confirm_password">Confirm password</label>
                                        <input type="password" id="confirm_password" class="form-control" name="password_confirmation" placeholder="Confirm password">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
