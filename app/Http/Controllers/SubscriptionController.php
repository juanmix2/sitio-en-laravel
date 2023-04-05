<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
        $data ['subscriptions']=Subscription::paginate(10);
        return view('subscription')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('agregarsubscripcion');
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
        Subscription::insert($data);
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $subscripcion = Subscription::findOrFail($id);
        return view('editarsubscripcion', compact('subscripcion'));
 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosSubscripcion = request()->except(['_token','_method']);
        Subscription::where('id','=',$id)->update($datosSubscripcion);
        return $this->index();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {
        // //borrar el registro según el id u otro dato
        Subscription::where('clientfk',$id)->delete();
        return $this->index();
    }
}


