@extends('layout.admin_layout')

@section('space-work')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pricing Plan List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pricing Plan List</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pricing Plan List</h3>
                <a href="{{ route('plans') }}" class="btn btn-success btn-sm" style="float: right;">Add Pricing Plan</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>price</th>
                    <th>tracked store</th>
                    <th>Global store</th>
                    <th>Global Product</th>
                    <th>Email & Support Ticket</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  @php
                      $i=1;
                    @endphp
                  <tbody>
                    @foreach ($plans as $plan)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{ $plan->name }}</td>
                    <td>{{ $plan->description }}</td>
                    <td>{{ $plan->price }}</td>
                    <td>{{ $plan->tracked_store }}</td>
                    <td>{{ $plan->global_store }}</td>
                    <td>{{ $plan->global_product }}</td>
                    <td>{{ $plan->email_ticket }}</td>
                    <td>
                      <a href="{{ route('plans').'?id='.$plan->id }}" class="btn btn-primary btn-sm">Edit</a>
                     <a href="{{ route('plan-list').'?del='.$plan->id }}" onclick="return confirm('Are you sure want to delete this item ?')" class="btn btn-danger btn-sm">Delete</a> 
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection