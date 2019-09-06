@extends('main')
@section('title',' | Home')
@section('Home','active')
@section('content')
            <div class="container">
                  <dir class="row">
                      <div class="row-md-12">
                              <div class="jumbotron">
                                  <h1>Welcome, John Snow!</h1>
                                  <p class="lead">You know nothing</p>
                                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                            </div>
                      </div>
                  </dir><!--- End of ROW ---->
        
              <div class="row">
                   
                   
                   
                   <div class="col-md-8">
                          @foreach ($posts as $post)
                          <div class="post"> 
                           
                           <h2>{{$post->title}}</h2>
                           <p>{{substr($post->body, 0,90)}} {{strlen($post->body)>90 ? "...":""}}</p>
                              <a href="{{ url('blog/'.$post->slug)}}" class="btn btn-primary">Read More</a>
                          </div>
                          <hr>
                        
             @endforeach 
                  </div>

                  <div class="col-md-3 col-md-offset-1">
                    <h2>Sidebar</h2>
                  </div>

             </div>
           </div>

    @endsection