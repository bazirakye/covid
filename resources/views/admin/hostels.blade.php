@extends('layouts.admin.admin')
	
	@section('content')
		<div class="content-wrapper">
			<section class="content">
      
      			<div class="card">
           			 <div class="card-header">
              			<h3 class="card-title">Hostels available</h3>
               			<div>
            				<div class="float-right">
              					<span><a href="{{route('admin.newhostel')}}"><i class="nav-icon fa fa-plus-circle">New Hostel</i></a></span>              
           				 	</div>
         				    </div>
            		</div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Hostel name</th>
                  <th>DescrIption</th>
                  
                </tr>
                </thead>
                <tbody>
                  @foreach ($hostels as $hostel)
                <tr>
                  <td>{{ ++$i}} </td>
                  <td>{{ $hostel->hostelName}}  </td>
                  <td>{!! $hostel->description!!}  </td>

                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                 <th>No</th>
                  <th>Hostel name</th>
                  <th>Description</th>
                </tr>
                </tfoot>
              </table>
            </div>
            
            <!-- /.card-body -->
            	</div>
      		</section>
        </div>     

	@endsection