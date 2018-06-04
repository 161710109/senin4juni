@extends('layouts.admin')
@section('content')
<section class="card">
<div class="card-body text-secondary">col-lg-12</div>
</section>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Mobil 
			  	<div class="panel-title pull-right"><a href="{{ route('mobil.create') }}">Tambah</a>
			  	</div>
			  </div>
			   <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                 <thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Mobil</th>
					  <th>Plat Nomor</th>
					  <th>Kapasitas</th>
					  <th>Harga</th>
					  <th>Jenis</th>
					  <th>Warna</th>
            <th>Perseneling</th>
            <th>Galeri</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($mobil as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td><p>{{ $data->plat_nomor }}</p></td>
				    	<td><p>{{ $data->kapasitas }}</p></td>
				    	<td><p>Rp. {{ $data->harga }}</p></td>
				    	<td><p>{{ $data->jenis }}</p></td>
				    	<td><p>{{ $data->warna }}</p></td>
              <td><p>{{ $data->perseneling }}</p></td>
              <td><p>{{ $data->galeri->galeri_id}}
						<td>
							<a class="btn btn-warning" href="{{ route('mobil.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('mobil.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('mobil.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
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
@endsection