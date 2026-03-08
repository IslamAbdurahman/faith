<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->per_page){
            $per_page = $request->per_page;
        }else{
            $per_page = 10;
        }
        if ($request->search){
            $search = $request->search;
            $clients = Client::where('name','like','%'.$request->search.'%')->paginate(10);
        }else{
            $search = '';
            $clients = Client::paginate($per_page);
        }

        return view('admin.clients.index',compact('clients','per_page','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'url'=>'required',
            'date'=>'required',
            'limit'=>'required',
        ]);

        $client = new Client();
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->url = $request->url;
        $client->date = $request->date;
        $client->limit = $request->limit;
        $client->save();

        return redirect()->route('clients.index');
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
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'url'=>'required',
            'date'=>'required',
            'limit'=>'required',
        ]);

        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->url = $request->url;
        $client->date = $request->date;
        $client->limit = $request->limit;
        $client->update();

        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {

        $client->delete();

        return redirect()->route('clients.index');
    }
}
