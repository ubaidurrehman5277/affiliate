@extends('layout.admin_layout')

@section('space-work')
<?php
  $name = $description = $price = $tracked_store = $global_store = $global_product = $email_ticket = "";
  if(!empty(old())){
    $name = old('name');
    $description = old('description');
    $price = old('price');
    $tracked_store = old('tracked_store');
    $global_store = old('global_store');
    $global_product = old('global_product');
    $email_ticket = old('email_ticket');
  }else if (!empty($data)) {
    $name = $data->name;
    $description = $data->description;
    $price = $data->price;
    $tracked_store = $data->tracked_store;
    $global_store = $data->global_store;
    $global_product = $data->global_product;
    $email_ticket = $data->email_ticket;
  }
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Pricing Plans</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Pricing Plan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                @if(Session::has('success'))
                <small style="color: green">{{  Session::get('success')}}</small>
               @endif
              <div class="card-header">
                <h3 class="card-title">Add Pricing Plan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
                <form method="POST" action="{{ (!empty($data)) ? route('plans')."?id=".request('id') : route('plans') }}" enctype="multipart/form-data"> 
               @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $name }}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control" placeholder="Description" value="{{ $description }}">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Price</label>
                        <input type="number" name="price" class="form-control" placeholder="Price" value="{{ $price }}">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Tracked Stores</label>
                        <input type="number" name="tracked_store" class="form-control" placeholder=" No.of Tracked Store" value="{{ $tracked_store }}">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Global Stores</label>
                        <input type="number" name="global_store" class="form-control" placeholder="No.of Global Store" value="{{ $global_store }}">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Global Products</label>
                        <input type="number" name="global_product" class="form-control" placeholder="No.of Global Products" value="{{ $global_product }}">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Email & Ticket Support</label>
                        <input type="text" name="email_ticket" class="form-control" placeholder="Email & Ticket Support" value="{{ $email_ticket }}">
                      </div>
                    </div>

                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              @if($errors->any())
              @foreach($errors->all() as $error)
                      <p style="color: red">{{ $error }}</p>
              @endforeach
      @endif
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection