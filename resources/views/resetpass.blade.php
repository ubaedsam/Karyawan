@extends('home')
@section('content')
<div class="page-wrapper pa-0 ma-0 auth-page">
    <div class="container-fluid">
        <!-- Row -->
        <div class="table-struct full-width full-height">
            <div class="table-cell vertical-align-middle auth-form-wrap">
                <div class="auth-form  ml-auto mr-auto no-float">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="sp-logo-wrap text-center pa-0 mb-30">
                                <a href="index.html">
                                    <span class="brand-text">Karyawan</span>
                                </a>
                            </div>
                            <div class="mb-30">
                                <h3 class="text-center txt-dark mb-10">Reset Password</h3>
                            </div>	
                            <div class="form-wrap">
                                <form action="{{ route('reset.password.post') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="form-group">
                                        <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Enter Registered Email Address:</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email">
                                        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label class="pull-left control-label mb-10" for="exampleInputpwd_2">New Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter New pwd">
                                        <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <label class="pull-left control-label mb-10" for="exampleInputpwd_3">Confirm New Password</label>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-Enter pwd">
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-success btn-block">Reset Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->	
    </div>
    
</div>
@endsection