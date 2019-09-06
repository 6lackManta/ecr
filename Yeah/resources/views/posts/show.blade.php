@extends('main')

@section('title',' | Show ')

@section('content')
<div class="row">
	<div class="col-md-8">
    <img src="{{ asset('images/'.$post->image) }}" width="400" height="400" />

		 <h1>{{ $post->title }}</h1>
	     <p class="lead">{{ $post->body }}</p>
	</div>
   
       <div class="col-md-4">
       	<div class="well">

            <dl class="dl-horizontal">
            
            <label>URL Slug</label>
            <p><a href="{{ url('blog/'.$post->slug) }}">{{ url($post->slug) }}</a></p>

          </dl>
                   

       		<dl class="dl-horizontal">
       			
       			<label>Created At:</label>
       			<p>{{ date('M j, Y h:ia',strtotime($post->created_at)) }}</p>

       		</dl>
                   
                <dl class="dl-horizontal">
       			
       			<label>Updated At:</label>
                <p>{{ date('M j, Y h:ia',strtotime($post->updated_at)) }}</p>

       		</dl>
           
           <hr>
             <div class="row">
           	 
       <div class="col-sm-6">{!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block')) !!}
          
          </div>
          {!! Form::open(['route'=>['posts.destroy',$post->id] , 'method'=>'DELETE']) !!}
          	 <div class="col-sm-6">
            {!! Form::submit('Delete',['class'=>'btn btn-danger btn-block']) !!}
</div>
            {!!Form::close() !!}
            </div>
            <div class="row">
            <div class="col-sm-12">{!! Html::linkRoute('posts.index','Show All',array(),array('class'=>'btn btn-primary btn-block btn-h1-spacing')) !!}
          
          </div>
            {!!Form::close() !!}
          </div>
       	</div>

       </div>
</div>
@endsection