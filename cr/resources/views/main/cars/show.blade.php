@extends('main')

@section('title','Car')


@section('content')

<section id="choose-car" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>{{ $car->name }} {{ $car->model }}</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>{{ $car->descr }}</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Choose Area Content Start -->
                <div class="col-lg-12">
                    <div class="choose-content-wrap">
                        <!-- Choose Area Tab Menu -->
                      

                        <!-- Choose Area Tab content -->
                        <div class="tab-content" id="myTabContent">
                            <!-- Popular Cars Tab Start -->
                            <div class="tab-pane fade show active" id="popular_cars" role="tabpanel" aria-labelledby="home-tab">
                                <!-- Popular Cars Content Wrapper Start -->
                                <div class="popular-cars-wrap">
                                    <!-- Filtering Menu -->
                                    <div class="popucar-menu text-center" style="margin-top: 10px">
                                        <a href="#" data-filter="*" >{{ $car->type }}</a>

       
                                        
                                    </div>

                                    <!-- Filtering Menu -->

                                    <!-- PopularCars Tab Content Start -->
                                    <div class="row popular-car-gird" style="margin-top: 10px">
                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 con suv mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="{{ $car->image }}">
                                                      <img src="{{ asset('images/'.$car->image) }}" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">{{ $car->name }}</a>
                                                        <span class="price"><i class="fa fa-tag"></i> ${{ $car->rent }}/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">{{ $car->model }}</a>
                                                        <a href="#">{{ $car->transmission }}</a>
                                                        <a href="#">{{ $car->ac }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                       
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                    
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                   
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                      
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->


                                        <!-- Single Popular Car End -->

                                    </div>
                                    <br>
{!! Form::open(['route'=>['cars.destroy',$car->id] , 'method'=>'DELETE']) !!}
          	 <div class="col-sm-5" style="margin-top: -15px;margin-left: -35px">
                {!! Html::linkRoute('cars.edit','Edit',array($car->id),array('class'=>'btn btn-primary btn-block')) !!}
            {!! Form::submit('Delete',['class'=>'btn btn-danger btn-block']) !!}
                                </div>
                                <!-- Popular Cars Content Wrapper End -->
                            </div>
                            <!-- Popular Cars Tab End -->

                            <!-- Newest Cars Tab Start -->
                            

                            <!-- Office Map Tab -->
                          
                            <!-- Office Map Tab -->
                        </div>
                        <!-- Choose Area Tab content -->
                    </div>
                </div>
                <!-- Choose Area Content End -->
            </div>
        </div>
    </section>
    

@endsection