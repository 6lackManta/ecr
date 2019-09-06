@extends('main.partials._allcars')
<div class="tab-pane fade show active" id="popular_cars" role="tabpanel" aria-labelledby="home-tab">
<div class="popular-cars-wrap">
<!-- Filtering Menu -->
        <div class="popucar-menu text-center">
                <a href="#" data-filter="*" class="active">all</a>
                <a href="#" data-filter=".con">Conver</a>
                <a href="#" data-filter=".hat">Truck</a>
                <a href="#" data-filter=".mpv">MPV</a>
                <a href="#" data-filter=".sedan">Sedan</a>
                <a href="#" data-filter=".suv">SUV</a>
        </div>

<div class="row popular-car-gird">
<!-- Single Popular Car Start -->
<div class="col-lg-4 col-md-6 con suv mpv">
<div class="single-popular-car">
    <div class="p-car-thumbnails">
        <a class="car-hover" href="{{ asset('img/car/car-1.jpg') }}">
          <img src="{{ asset('img/car/car-1.jpg') }}" alt="JSOFT">
       </a>
    </div>

    <div class="p-car-content">
        <h3>
            <a href="#">Dodge Ram 1500</a>
            <span class="price"><i class="fa fa-tag"></i> $55/day</span>
        </h3>

        <h5>HATCHBACK</h5>

        <div class="p-car-feature">
            <a href="#">2017</a>
            <a href="#">manual</a>
            <a href="#">AIR CONDITION</a>
        </div>
    </div>
</div>
</div>
<!-- Single Popular Car End -->

<!-- Single Popular Car Start -->
<div class="col-lg-4 col-md-6 hat sedan">
<div class="single-popular-car">
    <div class="p-car-thumbnails">
        <a class="car-hover" href="{{ asset('img/car/car-2.jpg') }}">
          <img src="{{ asset('img/car/car-2.jpg') }}" alt="JSOFT">
       </a>
    </div>

    <div class="p-car-content">
        <h3>
            <a href="#">Dodge Ram 1500</a>
            <span class="price"><i class="fa fa-tag"></i> $55/day</span>
        </h3>

        <h5>HATCHBACK</h5>

        <div class="p-car-feature">
            <a href="#">2017</a>
            <a href="#">manual</a>
            <a href="#">AIR CONDITION</a>
        </div>
    </div>
</div>
</div>
<!-- Single Popular Car End -->

<!-- Single Popular Car Start -->
<div class="col-lg-4 col-md-6 suv con mpv">
<div class="single-popular-car">
    <div class="p-car-thumbnails">
        <a class="car-hover" href="{{ asset('img/car/car-3.jpg') }}">
          <img src="{{ asset('img/car/car-3.jpg') }}" alt="JSOFT">
       </a>
    </div>

    <div class="p-car-content">
        <h3>
            <a href="#">Dodge Ram 1500</a>
            <span class="price"><i class="fa fa-tag"></i> $55/day</span>
        </h3>

        <h5>HATCHBACK</h5>

        <div class="p-car-feature">
            <a href="#">2017</a>
            <a href="#">manual</a>
            <a href="#">AIR CONDITION</a>
        </div>
    </div>
</div>
</div>
<!-- Single Popular Car End -->

<!-- Single Popular Car Start -->
<div class="col-lg-4 col-md-6 con hat">
<div class="single-popular-car">
    <div class="p-car-thumbnails">
        <a class="car-hover" href="{{ asset('img/car/car-3.jpg') }}">
          <img src="{{ asset('img/car/car-4.jpg') }}" alt="JSOFT">
       </a>
    </div>

    <div class="p-car-content">
        <h3>
            <a href="#">Dodge Ram 1500</a>
            <span class="price"><i class="fa fa-tag"></i> $55/day</span>
        </h3>

        <h5>HATCHBACK</h5>

        <div class="p-car-feature">
            <a href="#">2017</a>
            <a href="#">manual</a>
            <a href="#">AIR CONDITION</a>
        </div>
    </div>
</div>
</div>
<!-- Single Popular Car End -->

<!-- Single Popular Car Start -->
<div class="col-lg-4 col-md-6 con sedan mpv">
<div class="single-popular-car">
    <div class="p-car-thumbnails">
        <a class="car-hover" href="assets/img/car/car-5.jpg">
          <img src="assets/img/car/car-5.jpg" alt="JSOFT">
       </a>
    </div>

    <div class="p-car-content">
        <h3>
            <a href="#">Dodge Ram 1500</a>
            <span class="price"><i class="fa fa-tag"></i> $55/day</span>
        </h3>

        <h5>HATCHBACK</h5>

        <div class="p-car-feature">
            <a href="#">2017</a>
            <a href="#">manual</a>
            <a href="#">AIR CONDITION</a>
        </div>
    </div>
</div>
</div>
<!-- Single Popular Car End -->

<!-- Single Popular Car Start -->
<div class="col-lg-4 col-md-6 hat suv mpv">
<div class="single-popular-car">
    <div class="p-car-thumbnails">
        <a class="car-hover" href="{{ asset('img/car/car-6.jpg') }}">
          <img src="{{ asset('img/car/car-6.jpg') }}" alt="JSOFT">
       </a>
    </div>

    <div class="p-car-content">
        <h3>
            <a href="#">Dodge Ram 1500</a>
            <span class="price"><i class="fa fa-tag"></i> $55/day</span>
        </h3>

        <h5>HATCHBACK</h5>

        <div class="p-car-feature">
            <a href="#">2017</a>
            <a href="#">manual</a>
            <a href="#">AIR CONDITION</a>
        </div>
    </div>
</div>
</div>
<!-- Single Popular Car End -->
</div>
<!-- PopularCars Tab Content End -->
</div>
<!-- Popular Cars Content Wrapper End -->
</div>
</div>