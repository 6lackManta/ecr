<!DOCTYPE html>
<html lang="en">
@yield('head')   
        <body class="loader-active">
          @include('main.partials._nav')
      
          
          @yield('content')
      
          @include('main.partials._footer')    
      
          @include('main.partials._script')
          @yield('scripts')
      
        </body>
</html>