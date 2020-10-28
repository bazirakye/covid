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
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" value="{{$user['name']}}">
                   </div>
                   <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" value="{{$user['email']}}">
                   </div>
                   <div class="form-group">
                    <label for="phone">Phone number</label>
                    <input type="text" class="form-control" id="phone" placeholder="Enter phone number eg 07********" value="{{$user['phone']}}">
                   </div>
                   <div class="form-group">
                    <label for="additional_information">Additional information</label>
                   <textarea class="form-control" id="additional_information" placeholder="type here...."></textarea>
                   </div>
                   
            	</div>
                <!-- /.card-body -->

                <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Submit</button>
                </div> -->
              </form>
            </div>
          </div>



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
    return actions.payment.execute().then(function() {
      actions.redirect();
      }
    );
  },

  onCancel: function(data, actions) {
    actions.redirect();
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