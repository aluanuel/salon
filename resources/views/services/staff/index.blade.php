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
		                <h3 class="card-title">New Staff</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form action="/services/staff" method="post">
		              	@csrf
		                <div class="card-body">
		                  <div class="form-group">
		                  	<label>Name</label>
		                    <input type="text" class="form-control" autocomplete="off" name="name" placeholder="Full name" required="required">
		                  </div>
		                  <div class="form-group">
		                  	<label>Telephone</label>
		                    <input type="text" class="form-control" autocomplete="off" name="telephone" placeholder="Telephone" required="required">
		                  </div>
		                  <div class="form-group">
		                  	<label>Email</label>
		                    <input type="email" class="form-control" autocomplete="off" name="email" placeholder="Email address" required="required">
		                  </div>
		                  <div class="form-group">
		                  	<label>Usertype</label>
		                  	<select id="usertype" name="usertype" class="form-control select2bs4" style="width: 100%;">
		                  		<option selected="selected"></option>
			                    <option value="Manager">Manager</option>
			                    <option value="Cashier">Cashier</option>
			                    <option value="Salonist">Salonist</option>
		                  	</select>
		                  </div>
		                  <div class="form-group">
		                  	<label>Password</label>
		                    <input type="text" class="form-control" autocomplete="off" name="password" placeholder="Password" readonly="readonly" value="{{$randomPassword}}" required="required">
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
			                <h3 class="card-title">Staff List</h3>
			              </div>
			              <!-- /.card-header -->
			              <div class="card-body">
			                <table id="example2" class="table table-bordered table-hover">
			                  <thead>
			                  <tr>
			                    <th>#</th>
			                    <th>Name</th>
			                    <th>Telephone</th>
			                    <th>Email</th>
			                    <th>Usertype</th>
			                  </tr>
			                  </thead>
			                  <tbody>
			                  	<?php $i = 1;?>
			                  	@foreach($users as $user)
			                  	<tr>
			                  		<td>{{$i}}</td>
			                  		<td>{{$user->name}}</td>
			                  		<td>{{$user->telephone}}</td>
			                  		<td>{{$user->email}}</td>
			                  		<td>{{$user->usertype}}</td>
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