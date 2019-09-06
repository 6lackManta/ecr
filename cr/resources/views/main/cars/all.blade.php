
@extends('main')

@section('title','| Cars')


@section('content')
<div class="row">
          <div class="col-md-12" style="margin-top: 120px; text-align: center"> <h1>All Cars</h1> </div>
      <div class="col-md-2"> 
          <a href="{{ route('cars.create') }}" class="btn btn-info btn-lg " style="margin-left: 490%"> Add Car</a>
        </div>
        <hr>
        <div class="col-md-12">
          <hr>
        </div>
         </div>

         <div class="row">
          <div class="col-md-10">
            <table class = "table" style="margin-left: 80px;margin-top: 10px" >
              <thead>
                <th>#</th>
                <th>Name</th>
                <th>Model</th>
                <th>Type</th>
                <th>Rent</th>
                <th>Transmission</th>
                <th>Fuel</th>
              </thead>

              <tbody>
                @foreach ($cars as $car)
                   <tr>
                    <th>{{ $car->id }}</th>
                    <td>{{ $car->name }}</td>
                    <td>{{$car->model }}</td>
                    <td>{{ $car->type }}</td>
                    <td>{{ $car->rent }}</td>
                    <td>{{ $car->transmission }}</td>
                    <td>{{ $car->fuel }}</td>
                    <td><a href="{{ route('cars.show',$car->id) }}" class="btn btn-primary btn-md">Show </a>
                     <a href="{{ route('cars.edit',$car->id) }}" class="btn btn-warning btn-md"> Edit</a></td>
                   </tr>
                @endforeach
               

              </tbody>


              </div>
            </table>
            <div class="text-center">
                
            {!! $cars->links(); !!}
              </div>
          </div>

         </div>

@endsection

