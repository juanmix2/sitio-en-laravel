<?php

namespace App\Http\Controllers;

use App\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //leer la bd y cargar los datos en @instructors
        $data ['instructors']=Instructor::paginate(10);
        return view('instructor')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('agregarinstructor');
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
        $data = $request->except('_token');
        Instructor::insert($data);
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show(Instructor $instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 
        $instructor = Instructor::findOrFail($id);
    return view('editarinstructor', compact('instructor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosInst = request()->except(['_token','_method']);
        Instructor::where('id','=',$id)->update($datosInst);
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //borrar el registro segun id u otro dato
        Instructor::where('id',$id)->delete();
        return $this->index();
    }
}
