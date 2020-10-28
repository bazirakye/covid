@extends('layouts.custodian.custodian')
@section ('title', 'new room')
@section ('content')

<div class="content-wrapper">
	<section class="content">
		<div class="card-header">
           <h3 class="card-title">New room</h3> 

          <!--  <a class="nav-link float-right" href="{{route('custodian.rooms')}}">Back</a> -->             			
            <div class="float-right">
                        <span><a href="{{route('custodian.rooms')}}"><i class="nav-icon fa fa-logout">Back</i></a></span>              
                    </div>
        </div>

        <div class="card card-primary">      
        	<div class="card-body col-10">
      
          
        		 <form method="post" action="{{route('custodian.newroom')}}" enctype="multipart/form-data" >@csrf
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

					<div class="form-group">
          

                    <input type="hidden" name="hostel_id" class="form-control" required="required" value="{{$hostel}}">
                    <label for="name">Room no</label>
                    <input type="text" name="roomno" class="form-control" id="roomno" required="required">
	                </div>

	                <div class="form-group">

                    <label for="name">Room type</label>
                     <select class="form-control" name="roomtype" required>
                          <option value="single">single</option>
                          <option value="double">Double</option>
                          <option value="self contained">self contained</option>
                          
                        </select>
	                </div>

	                <div class="form-group">
                    <label for="image">Upload image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>
                      <!-- <div class="input-group-append">
                        <span class="input-group-text" id="image" name="image">Upload</span>
                      </div> -->
                    </div>

	                <div class="form-group">  
                    <label for="description">description</label>
                    <div class="card card-outline card-info">
                      <div class="card-body pad">
                        <div class="mb-3">
                          <textarea class="textarea" name="roomdescription" id="roomdescription" required="" 
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
             
                      </div>
                    </div>
                </div>

                <div class="form-group">

                    <label for="name">Price</label>
                    <input type="number" name="price" id="price" onclick="bkprice()" onkeyup="bkprice()"  class="form-control" required="required">
	            </div>

	            <div class="form-group">

                    <label for="name">Booking price</label>
                    <input type="number" name="bookingprice" id="bookingprice" class="form-control" required="required" readonly="readonly" >
	                </div>
	              <div class="form-group">

   					 <div class="form-group">
                          <button type="submit" name="newroom" id="newroom" class="btn btn-primary">Add room</button>
                    </div>
        		 </form>
            
        	</div>
        </div>
	</section>
</div>

@endsection
