@extends('main')
@section('title','| All Posts')

@section('content')
         
         <div class="row">
         	<div class="col-md-10"> <h1>All Posts</h1> </div>
  			
  			<div class="col-md-2"> 
  				<a href="{{ route('posts.create') }}" class="btn btn-primary btn-block btn-lg btn-h1-spacing"> Create new Post</a>
  			</div>
  			<hr>
  			<div class="col-md-12">
  				<hr>
  			</div>
         </div>

         <div class="row">
         	<div class="col-md-12">
         		<table class = "table">
         			<thead>
         				<th>#</th>
         				<th>Title</th>
         				<th>Body</th>
         				<th>created_at</th>
         				<th>updated_at</th>
         			</thead>

         			<tbody>
         				@foreach ($posts as $post)
         					 <tr>
         					 	<th>{{ $post->id }}</th>
         					 	<td>{{ $post->title }}</td>
         					 	<td>{{ substr($post->body, 0,30) }}  {{ strlen($post->body) > 15 ? "....":"" }}</td>
         					 	<td>{{ date('M j, Y',strtotime($post->updated_at)) }}</td>
         					 	<td><a href="{{ route('posts.show',$post->id) }}" class="btn btn-default btn-sm">Show </a>
         					 	 <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-default btn-sm"> Edit</a></td>
         					 </tr>
         				@endforeach
               

         			</tbody>


              </div>
         		</table>
            <div class="text-center">
                
            {!! $posts->links(); !!}
              </div>
         	</div>

         </div>

@endsection
