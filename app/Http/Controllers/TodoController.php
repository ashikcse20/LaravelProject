<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Todo;
use Illuminate\Http\Request;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index()
    {
        $todos=  Todo::all();
       // return $todos;
        // return view('todos.index')->with(['todos'=>$todos]);
        return view('todos.index', compact('todos'));
    }

    public function create()
    {

        return view('todos.create');
    }
    
    public function store(TodoCreateRequest $request)
    {
        // if (!$request->title) {

        //     return redirect()->back()->with('error', 'Please enter todo title');
        // }
        
        // $request->validate([
        // 'title'=>'required|max:255'
        // ]);

        // $rules = [
        //     'title' => 'required|max:255'
        // ];
        //'title.required' => 'The title field is required.',
        // $messages = [

        //     'title.max' => 'The title field can be maximum 255 chars.',
        //     'title.required' => 'Title Required'

        // ];

        // $validator = Validator::make($request->all(), $rules, $messages);
        // if ($validator->fails()) {
        //     return redirect()->back()
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }


        Todo::create($request->all());
        //return view('todos.store');
        return redirect()->back()->with('message', 'Todo created successfully');
    }
    public function edit(Todo $todo)
    {
        //$todo = Todo::find($eidd);
        //dd($id->title);
       // return $id;
        //dd($id);
        return view('todos.edit', compact('todo'));
    }

   public function update(TodoCreateRequest $request, Todo $todo)
   {
      // dd($request->all());
      $todo->update(['title' => $request->title]);
    //   return redirect()->back()->with('message', 'Updated!');
      return redirect(route('todo.index'))->with('message', 'Updated!');
   }
}
