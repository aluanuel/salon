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
              <div class="col-md-3">
                <!-- card -->
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">Record Service</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="/services/expense/daily" method="post">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label>Services</label>
                        <select id="selectedServices" name="id_salon_service" class="form-control select2bs4" style="width: 100%;">
                          <option></option>
                          @foreach($salonServices as $service)
                          <option label="{{$service->price.' '.$service->commission}}" value="{{ $service->id}}">{{ $service->service_name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Service price</label>
                        <input type="text" id="selectedServicePrice" class="form-control" autocomplete="off" name="service_price" readonly="readonly">
                      </div>
                      <div class="form-group">
                        <input type="hidden" id="serviceCommission" class="form-control" autocomplete="off" name="commission">
                      </div>
                      <div class="form-group">
                        <input type="hidden" id="serviceCommissionAmount" class="form-control" autocomplete="off" name="commission_amount">
                      </div>
                      <div class="form-group">
                        <label>Staff</label>
                        <select id="staff" name="id_user" class="form-control select2bs4" style="width: 100%;">
                          <option></option>
                          @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                          @endforeach

                        </select>
                      </div>
                      <div class="form-group">
                        <label>Ticket</label>
                        <input type="text" class="form-control" value="{{ $ticket }}" autocomplete="off" name="ticket" readonly="readonly">
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
              <div class="col-md-9">
                <!-- card -->
                <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title">List of Service Records</h3>
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
                          <th>Commission(%)</th>
                          <th>Provider</th>
                          <th>Comission</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1;?>
                          @foreach($daily as $dailyService)
                          <tr>
                            <td>{{ $i}}</td>
                            <td>{{ $dailyService->created_at }}</td>
                            <td>{{ $dailyService->ticket }}</td>
                            <td>{{ $dailyService->service_name }}</td>
                            <td>{{ number_format($dailyService->service_price) }}</td>
                            <td>{{ $dailyService->commission }}</td>
                            <td>{{ $dailyService->name }}</td>
                            <td>{{ number_format($dailyService->commission_amount) }}</td>
                          </tr>
                          <?php $i++;?>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
           </div>
    </section> <!-- Small boxes (Stat box) -->

        </div>

@endsection