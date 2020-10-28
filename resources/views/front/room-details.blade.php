@extends ('layouts.front.home')
@section('content')
 <section class="room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="room-details-item">
                        @if($rooms)
                         <img src="/images/{{ $rooms->image }}" alt=""> 
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3>{{$errors->room_type}}</h3>
                                <div class="rdt-right">
                                    <!-- <div class="rating">
                                        <i class="icon_star"></i>     
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div> -->
                                    <a style="cursor: pointer;" onclick="window.location.href='{{route('front.bookingsummary')}}?room={{ $rooms->id }}'">Booking Now</a>
                                </div>
                            </div>
                            <h2>{{ $rooms->booking_price }}<span> Booking price</span></h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Price:</td>
                                        <td>{{ $rooms->price }}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">room no:</td>
                                        <td>{{ $rooms->room_no }}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">room type:</td>
                                        <td>{{ $rooms->room_type }}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Hostel:</td>
                                        <td> </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <h3>Room description</h3>
                            <p class="f-para">
                                 {!! $rooms->description!!}
                            </p>

                        </div>

                        @endif

                        @foreach($hostel as $host)
                        <div class="rd-text">
                            <h3>Hostel description</h3><br>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Hostel name:</td>
                                        <td>{{ $host->hostelName}}</td>
                                    </tr>
                                                                           
                                    
                                </tbody>
                            </table>

                            
                                    <p class="f-para">
                                        {!! $host->description!!}
                                    </p>    
                                    
                        </div>
                        @endforeach
                  <!--   <div class="rd-reviews">
                        <h4>Reviews</h4>
                        <div class="review-item">
                            <div class="ri-pic">
                                <img src="img/room/avatar/avatar-1.jpg" alt="">
                            </div> 
                            <div class="ri-text">
                                <span>27 Aug 2019</span>
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5>Brandon Kelley</h5>
                                <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                                    magnam.</p>
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="ri-pic">
                                <img src="img/room/avatar/avatar-2.jpg" alt=""> 
                            </div>
                            <div class="ri-text">
                                <span>27 Aug 2019</span>
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5>Brandon Kelley</h5>
                                <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                                    magnam.</p>
                            </div>
                        </div>
                    </div> -->
                   <!--  <div class="review-add">
                        <h4>Add Review</h4>
                        <form action="#" class="ra-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name*">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email*">
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <h5>You Rating:</h5>
                                        <div class="rating">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star-half_alt"></i>
                                        </div>
                                    </div>
                                    <textarea placeholder="Your Review"></textarea>
                                    <button type="submit">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

@endsection
