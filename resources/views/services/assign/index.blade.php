@extends('layouts.custom')
@section('content')
	<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
          	<div class="row">
          		<div class="col-md-4">
          			<!-- card -->
          			<div class="card card-info">
		              <div class="card-header">
		                <h3 class="card-title">Service Assignment</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form action="/services/assign" method="post">
		              	@csrf
		                <div class="card-body">
		                  <div class="form-group">
		                  	<label>Services</label>
		                  	<select id="services" name="id_salon_service" class="form-control select2bs4" style="width: 100%;">
		                  		@foreach($salonServices as $service)
		                  		<option value="{{ $service->id}}">{{ $service->service_name}}</option>
		                  		@endforeach
		                  	</select>
		                  </div>
		                  <div class="form-group">
		                  	<label>Staff</label>
		                  	<select id="staff" name="id_user" class="form-control select2bs4" style="width: 100%;">
		                  		@foreach($users as $user)
		                  			<option value="{{$user->id}}">{{$user->name}}</option>
		                  		@endforeach

		                  	</select>
		                  </div>
		                </div>
		                <!-- /.card-body -->
		                <div class="card-footer">
		                  <button type="submit" class="btn btn-primary">Submit</button>
		                </div>
		              </form>
		            </div>
		            <!-- /.card -->
          		</div>
          		<div class="col-md-8">
          			<!-- card -->
          			<div class="card card-success">
			              <div class="card-header">
			                <h3 class="card-title">List of Service Assignments</h3>
			              </div>
			              <!-- /.card-header -->
			              <div class="card-body">
			                <table id="example2" class="table table-bordered table-hover">
			                  <thead>
			                  <tr>
			                    <th>#</th>
			                    <th>Name</th>
			                    <th>Telephone</th>
			                    <th>Services</th>
			                    <th>Options</th>
			                  </tr>
			                  </thead>
			                  <tbody>
			                  	<?php $i = 1;?>
			                  	@foreach($staffServices as $service)
			                  		<tr>
			                  			<td>{{ $i }}</td>
			                  			<td>{{ $service->name }}</td>
			                  			<td>{{ $service->telephone }}</td>
			                  			<td>{{ $service->service_name }}</td>
			                  			<td></td>
			                  		</tr>
			                  		<?php $i++;?>
			                  	@endforeach
			                  </tbody>
			                  <tfoot>

			                  </tfoot>
			              </table>
			          </div>
			      </div>
			      <!-- card -->
          		</div>
          	</div>
           </div>
    </section> <!-- Small boxes (Stat box) -->

        </div>

@endsection