@extends('layouts.custom')
<style type="text/css">

  #show_new_expense_type{
    display: none;
  }
</style>
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
                    <h3 class="card-title">Record Expense</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="/services/expense/daily" method="post">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label>Expense</label>
                        <select  name="id_salon_expense" id="id_salon_expense" class="form-control select2bs4" style="width: 100%;">
                          <option></option>
                          @foreach($expenses as $expense)
                            <option value="{{ $expense->id }}">{{ $expense->expense_name }}</option>
                          @endforeach
                          <option value="new">New expense type</option>
                        </select>
                      </div>
                      <div class="form-group" id="show_new_expense_type">
                        <label>Expense Type</label>
                        <input type="text" name="expense_name" class="form-control" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <label>Amount</label>
                        <input type="number" name="expense_amount" class="form-control" autocomplete="off" required="required" >
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
                      <h3 class="card-title">Recent Expenses</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th style="width: 12px">#</th>
                          <th>Expense</th>
                          <th style="width: 40px">Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1;?>
                          @foreach($expenses as $expense)
                            <tr>
                              <td>{{ $i }}</td>
                              <td>{{ $expense->expense_name }}</td>
                              <td>{{ number_format($expense->expense_amount) }}</td>
                            </tr>
                            <?php $i++;?>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- card -->
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection