@extends('layouts.admin.admin')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
     	<div class="card">
           			 <div class="card-header">
              			<h3 class="card-title">Bookings</h3>
               			<div>
            				<!-- <div class="float-right">
              					<span><i class="nav-icon fa fa-plus-circle">New Custodian</i></a></span>              
           				 	</div> -->
         				    </div>
            		</div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>No</th>
                  <th>Student name</th>
                  <th>Student phone</th>
                  <th>student email</th>                 
                  <th>Hostel name</th>
                  <th>Room no</th>
                  <th>paid booking price</th>
                  <th>balance</th>
                  <th>Date of booking</th>  
                </tr>
                
                </thead>
                <tbody>
                
                @foreach($bookings as $book)
                
                
                <tr>
                  <td>{{++$i}}</td>
                  <td>{{ $book->student_name }}</td>
                  <td>{{ $book->student_phone }}</td>
                  <td>{{ $book->student_email }}</td>
                  <td>{{ $book->hostel_name }}</td>
                  <td>{{ $book->room_no }}</td>
                  <td>{{ $book->paid_booking_price}}</td>
                  <td>{{ $book->balance }}</td>
                  <td>{{ $book->created_at }}</td> 
                  
                </tr>
                
                  @endforeach
                </tbody>
                <tfoot>
                
                  <tr>
                  <th>No</th>
                  <th>Student name</th>
                  <th>Student phone</th>
                  <th>student email</th>                 
                  <th>Hostel name</th>
                  <th>Room no</th>
                  <th>booking price</th>
                  <th>balance</th>
                  <th>Date of booking</th>  
                </tr>
                
                </tfoot>
              </table>
            </div>
            
            <!-- /.card-body -->
            	</div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection