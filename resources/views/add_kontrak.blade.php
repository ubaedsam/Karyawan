@extends('home')
@section('content')
    <div class="container-fluid">
        <!-- Title -->
		<div class="row heading-bg">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			    <h5 class="txt-dark">Tambah Data Kontrak</h5>
			</div>
			<!-- Breadcrumb -->
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
				    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/kontrak">Kontrak</a></li>
					<li class="active"><span>Tambah Data Kontrak</span></li>
				</ol>
			</div>
			<!-- /Breadcrumb -->
		</div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Masukan Data Kontrak</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap">
                                <form method="post" action="{{ route('kontrak.tambah') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group col-md-6">
                                        <label class="control-label mb-10 text-left">Durasi</label>
                                        <input type="text" class="form-control @error('durasi')is-invalid @enderror" name="durasi" placeholder="Masukan Durasi Kerja">
                                        @error('durasi')
                                            <div class="invalid-feedback text-danger mt-5" id="validationServerUsernameFeedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label mb-10 text-left">Gaji</label>
                                        <input type="text" class="form-control @error('gaji')is-invalid @enderror" name="gaji" placeholder="Masukan Gaji">
                                        @error('gaji')
                                            <div class="invalid-feedback text-danger mt-5" id="validationServerUsernameFeedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-0 pull-right">
                                        <button type="submit" class="btn btn-sm btn-success btn-outline fancy-button btn-0 btn-anim" value="Add"><i class="icon-rocket"></i><span class="btn-text">Simpan</span></button>
                                        <a href="/kontrak" class="btn btn-sm btn-primary btn-outline fancy-button btn-0">Kembali</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection