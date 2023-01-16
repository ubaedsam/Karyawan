@extends('home')
@section('content')
    <div class="container-fluid">
        <!-- Title -->
		<div class="row heading-bg">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			    <h5 class="txt-dark">Ubah Data Jabatan</h5>
			</div>
			<!-- Breadcrumb -->
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
				    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/jabatan">Jabatan</a></li>
					<li class="active"><span>Ubah Data Jabatan</span></li>
				</ol>
			</div>
			<!-- /Breadcrumb -->
		</div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Masukan Data Jabatan</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap">
                                <form method="post" action="{{ url('updatej/'.$jabatan->id) }}" enctype="multipart/form-data">
                                    @method('post')
                                    @csrf
                                    <div class="form-group col-md-6">
                                        <label class="control-label mb-10 text-left">Jabatan</label>
                                        <input type="text" class="form-control @error('jabatan')is-invalid @enderror" name="jabatan" value="{{$jabatan->jabatan}}" placeholder="Masukan Nama Jabatan">
                                        @error('jabatan')
                                            <div class="invalid-feedback text-danger mt-5" id="validationServerUsernameFeedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-0 pull-right">
                                        <button type="submit" class="btn btn-sm btn-success btn-outline fancy-button btn-0 btn-anim"><i class="icon-rocket"></i><span class="btn-text">Ubah</span></button>
                                        <a href="/jabatan" class="btn btn-sm btn-primary btn-outline fancy-button btn-0">Kembali</a>
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