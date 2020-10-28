@extends('layouts.admin.admin')
	
	@section('content')

		<div class="content-wrapper">
 			   
			   
			    <section class="content">
      				
					    	<div class="card-header">
					      		<h3 class="card-title">Add New Custodian</h3>
					        
					    	</div>
					    
            <!-- general form elements -->
        <div class="card card-primary">             
          <div class="card-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>name</th>
                  <th>email</th>
                  <th>phone number</th>
                  <th>action</th>                 
                </tr>
                </thead>
                <tbody>
                  @foreach($users as $value)
                <tr>
                  <td>{{ $value->name }}</td>
                  <td>{{ $value->email }}</td>
                  <td>{{ $value->phone }}</td>
                  <form method="post" enctype="multipart/form-data" action="{{ route('admin.check') }}" role="form" id="newhostel" name="newhostel" >
          <!-- {{csrf_field()}}  -->
          @csrf
          @if ($message = Session::get('success'))
          <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong>{{ $message }}</strong>
          </div>
          @endif

          @if ($message = Session::get('error'))
          <div class="alert alert-danger alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong>{{ $message }}</strong>
          </div>
          @endif

          @if ($message = Session::get('warning'))
          <div class="alert alert-warning alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
          </div>
          @endif

          @if ($message = Session::get('info'))
          <div class="alert alert-info alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
          </div>
          @endif

          @if ($errors->any())  
          <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          Please check the form below for errors
          </div>
          @endif
                  <td>

                    <input type="hidden" name="email" value="{{ $value->email }}" class="form-control" id="field" placeholder="Custodian email" required="required">
                    <button type="submit" name="makecustodian" class="btn btn-primary">Make custodian</button>
                    </form>
                  </td>
                  
                </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>name</th>
                  <th>email</th>
                  <th>phone number</th>
                  <th>action</th>  
                </tr>
                </tfoot>
              </table>
                               
                    
        
           	    </div>    
					    </div>
              </section>
            
        </div>
    


	@endsection
	