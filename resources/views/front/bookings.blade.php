@extends ('layouts.front.home')
@section('content')

<section>
	
	  <div class="container">
            <div class="row">
	<h3> Booking summary</h3><br>

	<table class="table table-striped table-bordered">
                <thead>
                	
                <tr>
                  <th>hostel name</th>
                  <th>Room number</th>
                  <th>Paid </th>
                  <th>Balance</th>
                  <th>Date of payment</th>
                  

                </tr>
                </thead>
                <tbody>
               
                @foreach($mybooking as $mybook)
                <tr>
                  <td>{{$mybook->hostel_name}}</td>
                  <td>{{$mybook->room_no}}</td>
                  <td>{{$mybook->paid_booking_price}}</td>
                  <td>{{$mybook->balance}}</td>
                  <td>{{$mybook->created_at}}</td>
                  
                </tr>
                @endforeach
                
              </tbody>
               <tfoot>
                	
                <tr>
                  <th>hostel name</th>
                  <th>Room number</th>
                  <th>Paid </th>
                  <th>Balance</th>
                  <th>Date of payment</th>
                  

                </tr>
                </tfoot>
             </table>
             
</div>
</section>
@endsection