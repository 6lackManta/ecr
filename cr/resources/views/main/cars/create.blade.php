<!DOCTYPE html>
<html>
<head>
    <title> Add new Car</title>
    @include('main.partials._head')
</head>
<body>
@include('main.partials._nav')

     <div class="row">
    <div class="col-md-4 col-md-offset-3  form-spacing-top">
        <h1> Add New Car</h1>
        <hr>

        {!! Form::open(array('route' => 'cars.store','data-parsley-validate'=>'','files'=>true)) !!}

        {{ Form::label('name','Name:') }}
        {{ Form::text('name',null,array('class'=>'form-control','required'=>'','maxlength'=>'255')) }} 

        {{ Form::label('model','Model:') }}
        {{ Form::text('model',null,array('class'=>'form-control','required'=>'','maxlength'=>'255')) }} 

       
        {{ Form::label('type','Type') }}
        {{ Form::select('type', ['4 wheels' => '4-wheels Drive', 'Sports' => 'Sports', 'Luxurious' => 'economy', 'Economy' => 'Sports', ],null,array('class'=>'form-control')) }} 

        {{ Form::label('rent','Rent:') }}
        {{ Form::text('rent',null,array('class'=>'form-control','required'=>'','maxlength'=>'255')) }} 

        <br>
        {{ Form::label('transmission','Transmission') }}
        {{ Form::select('transmission', ['Automatic' => 'Automatic', 'Manual' => 'Manual'],null,array('class'=>'form-control')) }} 
        <br>
         {{ Form::label('descr','Short Description:') }}
        {{ Form::text('descr',null,array('class'=>'form-control','required'=>'','maxlength'=>'255')) }} 


        <br>
     {{ Form::label('ac','AC facility:') }}
        {{ Form::select('ac', ['AirConditioner' => 'Yes', 'no' => 'NoAC'],null,array('class'=>'form-control')) }} 
        <br>
  <br>
     {{ Form::label('fuel','FUEL:') }}
        {{ Form::select('fuel', ['diesel' => 'Diesel', 'patrol' => 'Patrol','gas' => 'Gas'],null,array('class'=>'form-control')) }} 
        <br>
        {{ Form::label('image','Upload Image',['class'=>'form-spacing-form']) }}
        {{ Form::file('image') }}

        {{ Form::submit('Add Car',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px')) }}
       
        {!! Form::close() !!}
    </div>

  </div>

@include('main.partials._script')
</body>
</html>