@extends('todos.layout')
@section('content')
<h1 class="text-2xl">Update this todo list</h1>
<h2> {{$todo->title}} </h2>
<x-alert2 />
<form method="post" action="{{route('todo.update', $todo->id)}}" class="py-5 border">
    @method('patch')
    @csrf
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" value="{{$todo->title}}" class="py-2 px-2 border rounded"><br>
    <input type="submit" value="Update" class="p-2 border rounded ">
</form>
<a href="/todos" class="mx-5 py-1 px-2 bg-blue-400 border cursor-pointer rounded text-white"> Back</a>

@endsection