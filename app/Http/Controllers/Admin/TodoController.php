<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Todo;

class TodoController extends Controller
{
    public function add()
    {
      return view('admin.todo.create');
    }

    public function create(Request $request)
    {
      $this->validate($request, Todo::$rules);
      $todo = new Todo;
      $form = $request->all();
      $todo->fill($form);
      $todo->save();

      return redirect('admin/todo/');
    }

    public function edit(Request $request)
    {
      $todo = Todo::find($request->id);
      if(empty($todo)) {
        abort(404);
      }

      return view('admin.todo.edit', ['todo_form' => $todo]);
    }

    public function update(Request $request)
    {
      $this->validate($request, Todo::$rules);
      $todo = Todo::find($request->id);
      $todo_form = $request->all();
      $todo->fill($todo_form)->save();
      return redirect('admin/todo/');
    }

    public function delete(Request $request)
    {
      $todo = Todo::find($request->id);
      $todo->delete();
      return redirect('admin/todo/');
    }

    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            $posts = Todo::where('content', $cond_title)->get();
        } else {
            $posts = Todo::all();
        }
        return view('admin.todo.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

}
