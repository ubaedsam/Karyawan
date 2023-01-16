@extends('home')
@section('content')

	{{-- <main class="login-form">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-4">

					@if (session()->has('error'))

									<div class="alert alert-danger">
										{{ session()->get('error') }}
									</div>

									@endif

					<div class="card">
						<h3 class="card-header text-center">Login</h3>

						<div class="card-body">
							<form method="post" action="{{ route('login.custom') }}">

								@csrf

								<div class="form-group mb-3">
									<input type="text" name="email" class="form-control" placeholder="Email" />

									@if ($errors->has('email'))
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
									<button type="submit" class="btn btn-dark btn-block">Login</button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main> --}}

	<main class="login-form">
	<div class="wrapper pa-0">
		<header class="sp-header">
			<div class="sp-logo-wrap pull-left">
				<a href="/">
					<span class="brand-text">Karyawan</span>
				</a>
			</div>
			<div class="form-group mb-0 pull-right">
				<span class="inline-block pr-10">Membuat akun</span>
				<a class="inline-block btn btn-success btn-outline btn-rounded" href="/registration">Register</a>
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
										<h3 class="text-center txt-dark mb-10">Login</h3>
									</div>	
									@if(Session::has('success'))
                                    <div class="alert alert-success col-lg-8" role="alert" id="message">
                                        {{ session('success') }}
                                    </div>
                                	@endif
									@if (session()->has('error'))
									<div class="alert alert-danger">
										{{ session()->get('error') }}
									</div>
									@endif
									<div class="form-wrap">
								<form method="post" action="{{ route('login.custom') }}">
								@csrf

								<div class="form-group mb-3">
									<label class="control-label mb-10" for="exampleInputEmail_2">Email</label>
									<input type="email" name="email" class="form-control" id="exampleInputEmail_2" placeholder="Alamat Email" />
									@if ($errors->has('email'))
									<span class="text-danger">{{ $errors->first('email') }}</span>
									@endif
								</div>

								<div class="form-group mb-3">
									<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
									<a class="capitalize-font txt-success block mb-10 pull-right font-12" href="{{ route('reset-password') }}">forgot password ?</a>
									<div class="clearfix"></div>
									<input type="password" name="password" class="form-control" id="exampleInputpwd_2" placeholder="Password" />
									@if ($errors->has('password'))
									<span class="text-danger">{{ $errors->first('password') }}</span>
									@endif
								</div>

								<div class="form-group text-center">
									<button type="submit" class="btn btn-success btn-block">Login</button>
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
