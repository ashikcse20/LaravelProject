@extends('todos.layout')
@section('content')
<h1 class="text-2xl">Enter tile</h1>
    <x-alert2 />
    <form method="post" action='/todos/create' class="py-5 border" >
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" class="py-2 px-2 border rounded"><br>
        <input type="submit" value="Create" class="p-2 border rounded ">
    </form>
    <a href="/todos" class="mx-5 py-1 px-2 bg-blue-400 border cursor-pointer rounded text-white"> Back</a>
 
@endsection

<!-- <!DOCTYPE html>
<html>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<title>
    Todo
</title>

<body>


<div class="text-center pt-10">
    <h1 class="text-2xl">Enter tile</h1>
    <x-alert2 />
    <form method="post" action='/todos/create' class="py-5 border" >
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" class="py-2 px-2 border rounded"><br>
        <input type="submit" value="Create" class="p-2 border rounded ">
    </form>
</div>


</body>

</html> -->