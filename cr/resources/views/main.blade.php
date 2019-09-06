<!DOCTYPE html>
<html lang="en">

@include('main.partials._head')
     
        <body class="loader-active">
        	@include('main.partials._message')
          @include('main.partials._nav')
      
          
          @yield('content')
          @include('main.partials._testimonials')
          @include('main.partials._footer')    
      
          @include('main.partials._script')
          @yield('scripts')
      
        </body>
</html>