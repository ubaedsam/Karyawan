@extends('home')
@section('content')
    <div class="container-fluid">
        <!-- Title -->
		<div class="row heading-bg">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			    <h5 class="txt-dark">Ubah Data Pegawai</h5>
			</div>
			<!-- Breadcrumb -->
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
				    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/pegawai">Pegawai</a></li>
					<li class="active"><span>Ubah Data Pegawai</span></li>
				</ol>
			</div>
			<!-- /Breadcrumb -->
		</div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Masukan Data Pegawai</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap">
                                <form method="post" action="{{ url('updatep/'.$pegawai->id) }}" enctype="multipart/form-data">
                                    @method('post')
                                    @csrf
                                    <div class="form-group col-md-6">
                                        <label class="control-label mb-10 text-left">Nama</label>
                                        <input type="text" class="form-control @error('nama')is-invalid @enderror" name="nama" value="{{$pegawai->nama}}" placeholder="Nama Lengkap">
                                        @error('nama')
                                            <div class="invalid-feedback text-danger mt-5" id="validationServerUsernameFeedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label mb-10 text-left">TTL</label>
                                        <input type="date" class="form-control @error('ttl')is-invalid @enderror" name="ttl" value="{{$pegawai->ttl}}">
                                        @error('ttl')
                                            <div class="invalid-feedback text-danger mt-5" id="validationServerUsernameFeedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label mb-10 text-left">Usia</label>
                                        <input type="text" class="form-control @error('usia')is-invalid @enderror" name="usia" value="{{$pegawai->usia}}" placeholder="Nama Lengkap">
                                        @error('usia')
                                            <div class="invalid-feedback text-danger mt-5" id="validationServerUsernameFeedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-0 pull-right">
                                        <button type="submit" class="btn btn-sm btn-success btn-outline fancy-button btn-0 btn-anim"><i class="icon-rocket"></i><span class="btn-text">Ubah</span></button>
                                        <a href="/pegawai" class="btn btn-sm btn-primary btn-outline fancy-button btn-0">Kembali</a>
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