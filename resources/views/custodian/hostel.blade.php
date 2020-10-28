@extends('layouts.custodian.custodian')
@section ('content')

<div class="content-wrapper">
	<section class="content">
		<div class="card-header">
           <h3 class="card-title">My hostel</h3>              			
        </div>

        <div class="card card-primary">      
        	<div class="card-body col-10">
        		 <form method="post" action="{{ route('custodian.hostel') }}">
        		 	@csrf

        		 	@foreach($hostel as $host)

					<div class="form-group">

                    <label for="name">hostel name</label>
                    <input type="text" class="form-control" id="name" placeholder="name" value="{{$host->hostelName}}" required="required">
	                </div>

	                <div class="form-group">  
                    <label for="description">description</label>
                      

                        <div>
                          <textarea  class="form-control" style=" height: 150px;"  required="">{!!$host->description!!} </textarea>
                        </div>
         
                </div>
				@endforeach

        		</form>
        	</div>
        </div>
	</section>
</div>

@endsection