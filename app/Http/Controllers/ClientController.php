<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contract;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('clientes.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput = $request->except('image');

        $formInput['password'] = bcrypt($request->contact1);
        $formInput['email'] = $request->surname."@bkm.com";
        $user = User::create($formInput);

        if($user->id < 10)
        {
            $formInput['nid'] = "bkm00".$user->id;
        }
        else if($user->id > 9)
        {
            $formInput['nid'] = "bkm0".$user->id;
        }
        else if($user->id > 99)
        {
            $formInput['nid'] = "bkm".$user->id;
        }

        $formInput['user_id'] = $user->id;
        Client::create($formInput);
        $formInput['to'] = "";
        Contract::create($formInput);
        return redirect()->route('clients.index')->with('info','Acaba de registar com sucesso o cliente '.$user->name."!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id)->delete();
        return redirect()->route('clients.index')->with('info','Removeu com sucesso o cliente '.$user."!");
    }
}
