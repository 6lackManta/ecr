
<!DOCTYPE html>
<html lang="en">
<head>
@include('pages._head')	
</head>
        <body>
          @include('pages._nav')
      
          <div class="container">  
          	@include('pages._messages')
       
          @yield('content');  

          @include('pages._footer')    
      
          @include('pages._scripts')
          @yield('scripts')
      
        </body>
</html>