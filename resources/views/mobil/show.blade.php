@extends('layouts.admin')
@section('content')

<section class="card">
<div class="card-body text-secondary">col-lg-12</div>
</section>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Merk 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Mobil</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $mobil->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Plat Nomor</label>
						<input type="text" name="plat_nomor" class="form-control" value="{{ $mobil->perseneling }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Kapasitas</label>
						<input type="text" name="kapasitas" class="form-control" value="{{ $mobil->plat_no }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Harga</label>
						<input type="text" name="Harga" class="form-control" value="{{ $mobil->warna }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Jenis</label>
						<input type="text" name="jenis" class="form-control" value="{{ $mobil->tahun_keluaran }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Warna</label>
						<input type="text" name="warna" class="form-control" value="{{ $mobil->harga }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Perseneling</label>
						<input type="text" name="perseneling" class="form-control" value="{{ $mobil->stock }}"  readonly>
                      </div>
                      
			  		<div class="form-group">
			  			<label class="control-label">Galeri</label>
						<input type="text" name="galeri_id" class="form-control" value="{{ $mobil->Merk->nama_merk }}"  readonly>
			  		</div>
			  		

			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection