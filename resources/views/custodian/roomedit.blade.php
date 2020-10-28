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
      
          
        		<form method="post" role="form" action="{{route('custodian.update')}}" enctype="multipart/form-data" >@csrf
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

                 <input type="hidden" name="id" class="form-control" id="id" required="required" value="{{$rooms->id}}">
                 
					       <div class="form-group">
                          

                                    <label for="name">Room no</label>
                                    <input type="text" name="editroomno" class="form-control" id="roomno" required="required" value="{{ $rooms->room_no}}">
                                  </div>

                                  <div class="form-group">

                                    <label for="name">Room type</label>
                                     <select class="form-control" name="editroomtype" required>
                                          <option value="{{ $rooms->room_type}}" selected="selected">{{ $rooms->room_type, $rooms->id}}</option>
                                          <option value="single">single</option>
                                          <option value="double">double</option>
                                          <option value="self contained">self contained</option>
                                          
                                        </select>
                                  </div>

                                  <div class="form-group">
                                    <label for="editimage">Upload image</label>
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="editimage">
                                        <label class="custom-file-label" for="editimage">{{$rooms->image}}</label>
                                      </div>
                                      
                                    </div>

                                  <div class="form-group">  
                                    <label for="description">description</label>
                                    <div class="card card-outline card-info">
                                      <div class="card-body pad">
                                        <div class="mb-3">
                                          <textarea class="textarea" name="editroomdescription" id="roomdescription" required="required" 
                                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!! $rooms->description!!}</textarea>
                                        </div>
                             
                                      </div>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label for="name">Price</label>
                                    <input type="number" name="editprice" id="editprice" onclick="test()" onkeyup="test()"  class="form-control" required="required" value="{{ $rooms->price}}">
                              </div>

                              <div class="form-group">

                                    <label for="name">Booking price</label>
                                    <input type="number" name="editbookingprice" id="editbookingprice" class="form-control" required="required" readonly="readonly" value="{{ $rooms->booking_price}}">
                                  </div>
                                  
                                  
                                <div class="form-group">
                                  <label for="status">Status</label>
                                    <input type="text" name="editstatus" class="form-control" id="status" required="required" value="{{ $rooms->status}}">

                                </div>

                             <div class="form-group">
                                          <button type="submit" class="btn btn-primary">Update room</button>
                                    </div>
        		 </form>
            
        	</div>
        </div>
	</section>
</div>

@endsection
