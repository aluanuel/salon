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
                    <h3 class="card-title">New Expense</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="/services/expense" method="post">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <input type="text" class="form-control" autocomplete="off" name="expense_name" placeholder="Expense Name" required="required">
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
              <!-- col -->
              <div class="col-md-8">
                <!-- card -->
                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">List of Expenses</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th style="width: 12px;">#</th>
                        <th>Expense Name</th>
                        <th>Options</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1;?>
                        @foreach($expenses as $expense)
                          <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $expense->expense_name }}</td>
                            <td></td>
                          </tr>
                          <?php $i++;?>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- card-body -->
                </div>
                <!-- card -->
              </div>
            </div>
          </div>
        </section>
        <!-- main content -->
      </div>
@endsection
