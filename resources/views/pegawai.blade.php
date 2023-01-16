@extends('home')
@section('content')
    <div class="container-fluid">
        <!-- Title -->
		<div class="row heading-bg">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			    <h5 class="txt-dark">Pegawai</h5>
			</div>
			<!-- Breadcrumb -->
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
				    <li><a href="/dashboard">Dashboard</a></li>
					<li class="active"><span>Pegawai</span></li>
				</ol>
			</div>
			<!-- /Breadcrumb -->
		</div>
		<!-- /Title -->

        <div class="row">
            <div class="col-sm-12">
                @if(session()->has('success'))
                <div class="alert alert-success col-lg-8" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Data Pegawai</h6>
                        </div>
                        <div class="pull-right">
                            <div class="button-list">
                                <a href="{{ route('pegawai.create') }}" class="btn btn-xs btn-primary btn-outline fancy-button btn-0">Tambah Data</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table id="datable_1" class="table table-hover display  pb-30" >
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>TTL</th>
                                                <th>Usia</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>TTL</th>
                                                <th>Usia</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($pegawais as $pegawai)
                                            <tr>
                                                <td>{{ $pegawai->id }}</td>
                                                <td>{{ $pegawai->nama }}</td>
                                                <td>{{ $pegawai->ttl }}</td>
                                                <td>{{ $pegawai->usia }}</td>
                                                <td class="text-center">
                                                    <div class="button-list">
                                                        <a href="{{ url('editp/'.$pegawai->id) }}" class="btn btn-xs btn-warning btn-outline fancy-button btn-0">Ubah</a>
                                                        <form action="{{ url('deletep/'.$pegawai->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-xs btn-danger btn-outline fancy-button btn-0" onclick="return confirm('Apakah kamu serius ingin menghapus data pegawai ini ?')">Hapus</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
        <!-- /Row -->
    </div>
@endsection