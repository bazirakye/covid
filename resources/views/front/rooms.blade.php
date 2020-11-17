@extends ('layouts.front.home')
@section('content')
<!-- @php
echo ('rooms go here');
@endphp -->

<section class="rooms-section spad">
        <div class="container">
            <div class="row">

      @foreach($rooms as $room)
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <!-- <img src="{{$room->image}}" alt=""> -->
                        <img src="/images/{{ $room->image }}" alt="room"  width="500" height="300">
                        <div class="ri-text">
                            <h5>{{$room->room_type}}</h5>

                            <h3>{{$room->booking_price}}<span>/Booking price</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Price</td><td></td>
                                        <td>{{$room->price}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">room No</td><td></td>
                                        <td>{{$room->room_no}}</td>
                                    </tr>
                                   <!--  <tr>
                                        <td class="r-o">Hostel</td><td></td>
                                        <td></td>
                                    </tr> -->
                                </tbody>
                            </table>
                            <a href="{{route('front.room-details')}}?room={{ $room->id }}" class="primary-btn">More Details</a>

                            <div class="float-right">
                                
                                <button onclick="window.location.href='{{route('front.bookingsummary')}}?room={{ $room->id }}'" class="btn btn-flat btn-sm btn-outline-warning" > Book now</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
        @endforeach
                
              
                <div class="col-lg-12">
                    <!-- <div class="room-pagination"> -->
                        {{ $rooms->links() }}
                        <!-- <a href="{{ $rooms->links() }}">1</a>
                        <a href="{{ $rooms->links() }}">2</a>
                        <a href="{{ $rooms->links() }}">Next <i class="fa fa-long-arrow-right"></i></a> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>
@endsection