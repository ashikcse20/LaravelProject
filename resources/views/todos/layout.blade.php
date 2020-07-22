<!DOCTYPE html>
 <html>
 <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --> 
 <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">
 <title>
     Todo
 </title>

 <body>

 
     <div class="text-center flex justify-center border rounded pt-10">
         <div class="w-1/3">
          @yield('content')
         </div>
     </div>


 </body>

 </html>