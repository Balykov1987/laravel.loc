<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @include('styles')
        
    </head>
    <body class="antialiased">

    		@yield('content')
   
    		@include('footer') 
   	
   	</body>
</html>
