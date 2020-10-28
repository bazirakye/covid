@extends('layouts.admin.admin')
	
	@section('content')

		<div class="content-wrapper">
 			   
			   <form method="post" enctype="multipart/form-data" action="{{ route('admin.hostelnew') }}" role="form" id="newhostel" name="newhostel" >
			   	{{csrf_field()}} 
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

			    <section class="content">
      				
					    	<div class="card-header">
					      		<h3 class="card-title">Add New Hostel</h3>
					        
					    	</div>
					    
            <!-- general form elements -->
            					<div class="card card-primary">             
                             <div class="card-body">

                <div class="form-group">
                    <label for="hostelname">hostel name</label>
                    <input type="text" name="hostelname" class="form-control" id="hostelname" placeholder="hostel name" required="required">
                </div>
                <div class="form-group">
                    <label for="hostelname">Custodian email</label>     
                        <select class="form-control" name="custodianId" required >
                          <option value="">please select custodian</option> 

                          @foreach($custodians as $itemlist)
                          <option value="{{ $itemlist->id }}" > {{ $itemlist->email}}</option>
                          @endforeach
                        </select>
                      </div>
              
                  <div class="form-group">  
                    <label for="description">description</label>
                    <div class="card card-outline card-info">
                      <div class="card-body pad">
                        <div class="mb-3">
                          <textarea class="textarea" name="hosteldescription" id="hosteldescription" required="" 
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
             
                      </div>
                    </div>
                </div>


                    <div class="form-group">
                          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
           	    </div>    
					    </div>
              </section>
            </form>
        </div>
    


	@endsection
	