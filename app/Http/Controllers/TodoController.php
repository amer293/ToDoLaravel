<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Todo;
use DB;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $todos = Todo::orderBy('id', 'desc')->paginate(5);
        return view('crud.index')->with('todos', $todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.creat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {
            DB::beginTransaction();

            // logica
            $todo = new Todo;
            $todo->body = $request->body;
            $todo->save();

            DB::commit();
            return redirect('crud')->with('success','Item created successfully!');
        
           
        }
        catch(Exception $e) {
            // later
            DB::rollback();
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $todos = Todo::findOrFail($id);
        return view('crud.edit')
            ->with('todos', $todos);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        try {
            DB::beginTransaction();

            // logica
            $todo = Todo::findOrFail($id);
            $todo->body = $request->body;
            $todo->save();

            DB::commit();
            return redirect('crud')->with('success','Item updated successfully!');
        
           
        }
        catch(Exception $e) {
            // later
            DB::rollback();
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect('crud')->with('success','Item deleted successfully!');;

    }
}
