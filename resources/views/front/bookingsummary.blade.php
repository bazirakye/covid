@extends ('layouts.front.home')
@section('content')
<section class="rooms-section spad">
        <div class="container">
            <div class="row">
	<h3> Booking summary</h3><br>

	<table class="table table-striped table-bordered">
                <thead>
                	
                <tr>
                  <th>Room no</th>
                  <th>Room image</th>
                  <th>Hostel name</th>
                  <th>price</th>
                  <th>booking price</th>
                  <th>date of booking</th>

                </tr>
                </thead>
                <tbody>
                @if($room)
                <tr>
                  <td>{{$room->room_no}} </td>
                  <td><img src="/images/{{$room->image}}" width="100px" height="75px"> </td>
                  @foreach($hostel as $host)
                  <td>{{$host->hostelName}}  </td>
                  @endforeach
                  <td>{{$room->price}}</td>
                  <td>{{$room->booking_price}} </td>
                  <td>@php echo date("d/m/Y"); @endphp </td>
                </tr>
                @endif
              </tbody>
             </table>
             

             <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">

          		 <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Booking contact information</h3>
              </div>
              
              <form role="form">
                <div class="card-body">

                   <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" readonly="readonly" value="{{$user['name']}}">
                   </div>
                   <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" readonly="readonly" id="email" placeholder="Enter email" value="{{$user['email']}}">
                   </div>
                   <div class="form-group">
                    <label for="phone">Phone number</label>
                    <input type="text" class="form-control" readonly="readonly" id="phone" placeholder="Enter phone number eg 07********" value="{{$user['phone']}}">
                   </div>
                  
                   
            	</div>
                
              </form>

              <form role="form" id="bookings" method="post" action="{{route('front.bookingsummary')}}" enctype="multipart/form-data" >@csrf
                <input type="hidden" id="student_id" name="student_id" value="{{$user['id']}}">
                <input type="hidden"  name="student_name" value="{{$user['name']}}">

                <input type="hidden"  name="student_email" value="{{$user['email']}}">

                <input type="hidden"  name="student_phone" value="{{$user['phone']}}">

                <input type="hidden" name="hostel_id" value="{{$host->id}}">

                <input type="hidden" name="hostel_name" value="{{$host->hostelName}}">

                <input type="hidden" name="room_id" value="{{$room->id}}">

                 <input type="hidden"  name="room_no" value="{{$room->room_no}}">

                <input type="hidden" id="paid_booking_price" name="paid_booking_price" value="{{$room->booking_price}}">
                
                <input type="hidden" id="balance" name="balance" value="{{$room->price-$room->booking_price}}">

                <!-- <div class="form-group">
                          <button type="submit" name="booking" id="booking" class="btn btn-primary">book</button>
                    </div> -->
                
                
              </form>
            </div>
          </div>

<script type="text/javascript">
  function submitform()
{
document.getElementById("bookings").submit();


}
</script>

          <div class="col-md-6">
          		<h3>payment method</h3>

              <div id="paypal-button"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'AckEFgd5k9J5un9GxOESHRMvhpHN_CfOL4jsiX-RbGaLs1risPlpCGtKILncnb38wak-7kCS-6FEeOrT',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'medium',
      color: 'gold',
      shape: 'pill', 
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
      payment: function(data, actions) {
    // Make a call to the REST API to set up the payment
    return actions.payment.create({
      payment: {
        transactions: [
          {
            amount: { total: '{{$room->booking_price*0.00026}}', currency: 'USD' }        
          }
        ],
        redirect_urls: {
          return_url: 'http://hostels.muni.ac.ug',
          cancel_url: 'http://hostels.muni.ac.ug'
        }
      }
    });
  },
    // Execute the payment
    onAuthorize: function(data, actions) {

    // Make a call to the REST API to execute the payment
    return actions.payment.execute().then(
    

      function() {

      
     
      submitform(); 

      window.alert("Payment recieved successfully!");
      actions.redirect();
     
     }



    );
  },

  onCancel: function(data, actions) {
    actions.redirect();

    window.alert("Sorry, we couldnt process your payment!");

    }

  }, '#paypal-button');

</script>
          		 
          </div>
      </div>
  </div>


 	</div>
 </div>
</section>
@endsection