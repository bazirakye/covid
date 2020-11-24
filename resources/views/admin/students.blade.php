@extends('layouts.admin.admin')
	
	@section('content')
		<div class="content-wrapper">
			<section class="content">
      
      			<div class="card">
           			 <div class="card-header">
              			<h3 class="card-title">Students available</h3>
               			
            		</div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>                 
                  <th>Phone</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($students as $value)
                <tr>
                  <td>{{++$i}}
                  <td>{{ $value->name }}</td>
                  <td>{{ $value->email }}</td>
                  <td>{{ $value->phone }}</td>
                   <td><a href="#" class = "btn btn-info"> <i class="fa fa-edit"></i></a></td>

                  <td><a href="#" class = "btn btn-danger"> <i class="fa fa-trash"></i></a></td>

                  
                  
                </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>                 
                  <th>Phone</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            
            <!-- /.card-body -->
            	</div>
      		</section>
        </div>     

	@endsection