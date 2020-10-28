@extends('layouts.custodian.custodian')

@section('content')

	<div class="content-wrapper">
			<section class="content">
      
      			<div class="card">
           			 <div class="card-header">
              			<h3 class="card-title">Rooms</h3>
               			<div>

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
            				<div class="float-right">
              					<span><a href="{{route('custodian.newroom')}}"><i class="nav-icon fa fa-plus-circle">New room</i></a></span>              
           				 	</div>
         				    </div>
            		</div>
            <div class="card-body">
              <table id="example" class="table table-bordered table-striped" >
                <thead>
                <tr>
                  <th>Room no</th>
                  <th>Room type</th>
                  <th>DescrIption</th>
                  <th>image</th>
                  <th>status</th>
                  <th>price</th>
                  <th>booking price</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                 @foreach($rooms as $room)
                <tr>
                  <td>{{ $room->room_no}}</td>
                  <td>{{ $room->room_type}}</td>
                  <!-- <td >{!! $room->description!!}</td> -->
                  <td ><i data-toggle="modal" data-target="#edit-modal{{$room->id}}" style="cursor: pointer;">view description</i> 
                     <div class="modal fade" id="edit-modal{{$room->id}}">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        
                        <h4 class="modal-title" align="center"><b>View description</b></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          {!!$room->description!!}
                      </div>
                    </div>
                    </div>
                  </div>
                  </td>
                  <td><img src="/images/{{ $room->image }}" width="100px" height="70px" alt=""></td>
                  <td>{{ $room->status}}</td>
                  <td>{{ $room->price}}</td>
                  <td>{{ $room->booking_price}}</td>

                  <td><a href="{{route('custodian.roomedit', ['id' => $room->id])}}" class = "btn btn-info"> <i class="fa fa-edit"></i></a></td>

                  <td><a href="{{route('custodian.destroy', ['id' => $room->id])}}" class = "btn btn-danger"> <i class="fa fa-trash"></i></a></td>
                  

                 <!--  <div class="modal fade" id="edit-modal{{$room->id}}">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        
                        <h4 class="modal-title" align="center"><b>Edit Room</b></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="post" role="form" action="{{route('custodian.update')}}" enctype="multipart/form-data" >@csrf

                              <input type="hidden" name="id" class="form-control" id="id" required="required" value="{{$room->id}}">

                          <div class="form-group">
                          

                                    <label for="name">Room no</label>
                                    <input type="text" name="editroomno" class="form-control" id="roomno" required="required" value="{{ $room->room_no}}">
                                  </div>

                                  <div class="form-group">

                                    <label for="name">Room type</label>
                                     <select class="form-control" name="editroomtype" required>
                                          <option value="{{ $room->room_type}}" selected="selected">{{ $room->room_type, $room->id}}</option>
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
                                        <label class="custom-file-label" for="editimage">choose file</label>
                                      </div>
                                      
                                    </div>

                                  <div class="form-group">  
                                    <label for="description">description</label>
                                    <div class="card card-outline card-info">
                                      <div class="card-body pad">
                                        <div class="mb-3">
                                          <textarea class="textarea" name="editroomdescription" id="roomdescription" required="required" 
                                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!! $room->description!!}</textarea>
                                        </div>
                             
                                      </div>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label for="name">Price</label>
                                    <input type="number" name="editprice" id="editprice" onclick="test()" onkeyup="test()"  class="form-control" required="required" value="{{ $room->price}}">
                              </div>

                              <div class="form-group">

                                    <label for="name">Booking price</label>
                                    <input type="number" name="editbookingprice" id="editbookingprice" class="form-control" required="required" readonly="readonly" value="{{ $room->booking_price}}">
                                  </div>
                                  
                                  
                                <div class="form-group">
                                  <label for="status">Status</label>
                                    <input type="text" name="editstatus" class="form-control" id="status" required="required" value="{{ $room->status}}">

                                </div>

                             <div class="form-group">
                                          <button type="submit" class="btn btn-primary">Update room</button>
                                    </div>
                             </form>
                      </div>
                    </div>
                    </div>
                  </div>
 -->
                </tr>
                @endforeach
              
              </tbody>
              <tfoot>
                  <tr>
                  <th>Room no</th>
                  <th>Room type</th>
                  <th>DescrIption</th>
                  <th>image</th>
                  <th>status</th>
                  <th>price</th>
                  <th>booking price</th>
                  <th colspan="2">Action</th>
                  
                </tr>
                </tfoot>
              </table>
            </div>
  
          <!-- edit modal  -->

            <!-- /.card-body -->
            	</div>
      		</section>
        </div>     



@endsection