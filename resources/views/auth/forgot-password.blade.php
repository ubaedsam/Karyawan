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
                                <a href="/">
                                    <span class="brand-text">Karyawan</span>
                                </a>
                            </div>
                            <div class="mb-30">
                                <h3 class="text-center txt-dark mb-10">Forgot Password</h3>
                                <h6 class="text-center txt-grey nonecase-font">Masukan alamat email kamu, untuk membuat password yang baru.</h6>
                            </div>	
                            <div class="form-wrap">
                                @if(Session::has('message'))
                                    <div class="alert alert-success col-lg-8" role="alert" id="message">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <form action="{{ route('reset-password-submit') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
                                        <a class="capitalize-font txt-success block mb-10 pull-right font-12" href="/">kembali ke halaman login</a>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email" value="{{ old('email') }}">
                                        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-success btn-block">Forgot Password</button>
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