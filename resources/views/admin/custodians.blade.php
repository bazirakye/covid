@extends('layouts.admin.admin')
	
	@section('content')
		<div class="content-wrapper">
			<section class="content">
      
      			<div class="card">
           			 <div class="card-header">
              			<h3 class="card-title">Custodian available</h3>
               			<div>
            				<div class="float-right">
              					<span><a href="{{route('admin.newcustodian')}}"><i class="nav-icon fa fa-plus-circle">New Custodian</i></a></span>              
           				 	</div>
         				    </div>
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
                  @foreach($custodians as $value)
                <tr>
                  <td>{{++$i}}
                  <td>{{ $value->name }}</td>
                  <td>{{ $value->email }}</td>
                  <td>{{ $value->phone }}</td>
                  <td>
                    <!-- <form action="" method="POST"> -->
                      <!-- @csrf -->
                      <!-- @method('DELETE') -->

                      <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                      <button class="btn btn-danger btn-sm"> delete custodian</button>

                    <!-- </form> -->
                  </td>
                  
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