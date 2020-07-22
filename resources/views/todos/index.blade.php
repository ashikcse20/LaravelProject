 @extends('todos.layout')
 @section('content')
 <div class="flex justify-center border-b pb-4">
     <h1 class="text-2xl">All your Todos</h1>
     <a href="/todos/create" class="mx-5 py-1 px-2 bg-blue-400 cursor-pointer rounded text-white"> Create New</a>
 </div>
 <ul class="my-5">

     <x-alert2 />
     @foreach($todos as $todo)
     <li class="flex justify-between py-2">
         <p>
             {{$todo->title}}
             <p>
                 <a href="{{'/todos/'.$todo->id.'/edit'}}"
                     class="mx-5 py-1 px-2 bg-orange-400 cursor-pointer rounded text-white"> Edit</a>

     </li>
     @endforeach
 </ul>
 @endsection







 <!--


 <!DOCTYPE html>
 <html>
 <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
 <title>
     Todo
 </title>

 <body>


     <div class="text-center pt-10">
         <h1 class="text-2xl">All your Todos</h1>
         <ul>
             @foreach($todos as $todo)
             <li>
                 {{$todo->title}}
             </li>
             @endforeach
         </ul>
     </div>


 </body>

 </html> -->