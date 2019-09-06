<section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Cars-For Rent</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>These car are availible in our fleet.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                            <!-- Single Car Start -->
                            @foreach ($cars as $car)
                                {{-- expr --}}
                            
                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
                                    <div class="car-list-thumb"><img src="{{ asset('images/'.$car->image) }}" width="510" height="300"></div>
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#">{{ $car->name }}</a></h2>
                                        <h5>{{ $car->rent }}$ Rent /per a day</h5>
                                        <p>{{ $car->descr }}</p>
                                        <ul class="car-info-list">
                                            <li>{{ $car->ac }}</li>
                                            <li>{{ $car->fuel }}</li>
                                            <li>{{ $car->transmission }}</li>
                                        </ul>
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star unmark"></i>
                                        </p>
                                        <a href="#" class="rent-btn fa fa-whatsapp">Book It</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Car End -->
@endforeach
                            <!-- Single Car Start -->
                          
                            <!-- Single Car End -->

                            <!-- Single Car Start -->
                            
                            <!-- Single Car End -->
                        </div>
                    </div>

                    <!-- Page Pagination Start -->
                    <div class="page-pagi">
                         {!! $cars->links(); !!}
                    </div>
                    <!-- Page Pagination End -->
                </div>
                <!-- Car List Content End -->
            </div>
        </div>
    </section>
    