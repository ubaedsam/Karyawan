@extends('home')
@section('content')

{{-- <main class="signup-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif
            	<div class="card">
                    <h3 class="card-header text-center">Register User</h3>
                    <div class="card-body">
                    	<form action="{{ route('register.custom') }}" method="POST">
                    		@csrf
                    		<div class="form-group mb-3">
                    			<input type="Text" name="name" class="form-control" placeholder="Name" />
                                @if($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                    		</div>
                            <div class="form-group mb-3">
                    			<input type="Text" name="username" class="form-control" placeholder="Username" />
                    		</div>
                    		<div class="form-group mb-3">
                    			<input type="text" name="email" class="form-control" placeholder="Email" />
                                @if($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                    		</div>
                    		<div class="form-group mb-3">
                    			<input type="password" name="password" class="form-control" placeholder="Password" />
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                    		</div>
                    		<div class="d-grid mx-auto">
                    			<button type="submit" class="btn btn-dark btn-block">Sign Up</button>
                    		</div>
                    	</form>
                        <br />
                        <div class="text-center">
                            <a href="{{ route('login') }}">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> --}}

<main class="signup-form">
    <div class="wrapper pa-0">
        <header class="sp-header">
            <div class="sp-logo-wrap pull-left">
                <a href="/">
					<span class="brand-text">Karyawan</span>
				</a>
            </div>
            <div class="form-group mb-0 pull-right">
                <span class="inline-block pr-10">Sudah punya akun?</span>
                <a class="inline-block btn btn-success btn-rounded btn-outline" href="/">Login</a>
            </div>
            <div class="clearfix"></div>
        </header>
        
        <!-- Main Content -->
        <div class="page-wrapper pa-0 ma-0 auth-page">
            <div class="container-fluid">
                <!-- Row -->
                <div class="table-struct full-width full-height">
                    <div class="table-cell vertical-align-middle auth-form-wrap">
                        <div class="auth-form  ml-auto mr-auto no-float">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="mb-30">
                                        <h3 class="text-center txt-dark mb-10">Register</h3>
                                    </div>	
                                    <div class="form-wrap">
                                        <form action="{{ route('register.custom') }}" method="POST">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <label class="control-label mb-10" for="exampleInputName_1">Name</label>
                                                <input type="text" class="form-control" name="name" required="" id="exampleInputName_1" placeholder="Nama Lengkap">
                                                @if($errors->has('name'))
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="control-label mb-10" for="exampleInputName_1">Username</label>
                                                <input type="text" class="form-control" required="" name="username" id="exampleInputName_1" placeholder="Username">
                                                @if($errors->has('username'))
                                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="control-label mb-10" for="exampleInputEmail_2">Email</label>
                                                <input type="email" class="form-control" required="" name="email" id="exampleInputEmail_2" placeholder="Alamat Email">
                                                @if($errors->has('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
                                                <input type="password" class="form-control" required="" name="password" id="exampleInputpwd_2" placeholder="Password">
                                                @if($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-success btn-block">Register</button>
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
        <!-- /Main Content -->
    
    </div>
</main>

@endsection