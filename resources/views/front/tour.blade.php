<?php $head_title="Tour || gowilds || gowilds PHP Template"?>
@include('front.top-layout')
<!-- header -->
@include('front.header5')

<?php
$page_title = "Event";

?>
@include('front.page-title')
        <!--====== Start Booking Section ======-->
        <section class="booking-form-section pb-100">
            <div class="container-fluid">
               
            </div>
        </section><!--====== End Booking Section ======-->
        <!--====== Start Places Section ======-->
        <section class="places-section pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($events as $event)
                    <div class="col-xl-4 col-md-6 col-sm-12 places-column">
                        <!--=== Single Place Item ===-->
                        <div class="single-place-item mb-60 wow fadeInUp">
                            <div class="place-img">
                                <img src="public/uploads/{{$event->image }}"  alt="Place Image"  width="410" height="280" style="object-fit: cover;">
                            </div>
                            <div class="place-content">
                                <div class="info">
                                    {{-- <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><a href="#">(4.9)</a></li>
                                    </ul> --}}
                                    <h4 class="title"><a href="tour-details.php">{{ $event->name }}</a></h4>
                                    <p class="location"><i class="far fa-map-marker-alt"></i>{{ $event->location }}</p>
                                    {{-- <p class="price"><i class="fas fa-usd-circle"></i>Price<span class="currency">$</span>93.65</p> --}}
                                    <div class="meta">
                                      <span>

    {{ \Carbon\Carbon::parse($event->date)->translatedFormat('d F Y') }}
</span>

                                        {{-- <span><i class="far fa-user"></i>25</span> --}}
                                        <span><a href="{{ route('events.show', $event->id) }}">Details<i class="far fa-long-arrow-right"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
               
                 
               
                </div>
           
            </div>
        </section><!--====== End Places Section ======-->
        <!--====== Start Gallery Section ======-->
     
@include('front.footer2')

@include('front.bottom-layout')