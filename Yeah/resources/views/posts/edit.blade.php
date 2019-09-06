@extends('main')

@section('title',' | Edit Post ')

@section('content')


<div class="row">
	{!! Form::model($post,['route'=> ['posts.update',$post->id],'method' => 'PUT' ,'files' => true]) !!}
	<div class="col-md-8">
	     {{ Form::label('title','Title:') }}
        {{ Form::text('title',null,array('class'=>'form-control input-lg','required'=>'','maxlength'=>'255')) }} 
        
         {{ Form::label('slug','Slug:',['class'=>'form-spacing-top']) }}
        {{ Form::text('slug',null,array('class'=>'form-control input-lg ','required'=>'','maxlength'=>'255')) }} 

         {{ Form::label('image','Edit Image', ['class'=>'form-spacing-top']) }}
        {{ Form::file('image') }}

        {{ Form::label('body','Body:',['class'=>'form-spacing-top']) }}
        {{ Form::textarea('body',null,array('class'=>'form-control','required'=>'')) }} 
	</div>
   
       <div class="col-md-4">
       	<div class="well">
       		<dl class="dl-horizontal">
       			
       			<dt>Created At:</dt>
       			<dd>{{ date('M j, Y h:ia',strtotime($post->created_at)) }}</dd>

       		</dl>
                   
                <dl class="dl-horizontal">
       			
       			<dt>Updated At:</dt>
                <dd>{{ date('M j, Y h:ia',strtotime($post->updated_at)) }}</dd>

       		</dl>
           
           <hr>
             <div class="row">
           	 
       <div class="col-sm-6">{!! Html::linkRoute('posts.show','Cancel',array($post->id),array('class'=>'btn btn-danger btn-block')) !!}
          
          </div>
          	 <div class="col-sm-6">
          	 	{!! Form::submit('Save',['class'=>'btn btn-success btn-block']) !!}
          	 </div>
            </div>
       	</div>

       </div>
{!! Form::close() !!}

</div>
	
@endsection