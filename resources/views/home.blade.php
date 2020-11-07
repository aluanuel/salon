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
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>UGX 1,050,000</h3>

                    <p>Sales today</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>UGX 125,000</h3>

                    <p>Today's Commissions</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>UGX 44,000</h3>

                    <p>Today's Expenses</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->

            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
              <div class="col-md-6">
              <!-- card -->
                 <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Services Offered</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <table class="table">
                        <thead>
                          <tr>
                            <th style="width: 10px">#</th>
                            <th>Service</th>
                            <th  style="width: 40px">Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1;?>
                          @foreach($prices as $pricelist)
                          <tr>
                            <td>{{ $i}}</td>
                            <td>{{ $pricelist->service_name }}</td>
                            <td>{{ number_format($pricelist->price) }}</td>
                          </tr>
                          <?php $i++;?>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- card -->
              </div>
              <!-- col -->
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Recent Services Offered</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>#</th>
                        <th>Time</th>
                        <th>Ticket</th>
                        <th>Service</th>
                        <th>Amount</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php $x = 1;?>
                      @foreach($daily as $list)
                        <tr>
                          <td>{{ $x }}</td>
                          <td>{{ $list->created_at }}</td>
                          <td>{{ $list->ticket }}</td>
                          <td>{{ $list->service_name }}</td>
                          <td>{{ number_format($list->service_price) }}</td>
                        </tr>
                        <?php $x++;?>
                      @endforeach
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Total</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!-- /.row (main row) -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

@endsection
