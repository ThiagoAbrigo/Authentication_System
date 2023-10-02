<?php

namespace App\Http\Controllers;

use App\Models\client;
use GuzzleHttp\Client as GuzzleHttpClient;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Spatie\FlareClient\Http\Client as HttpClient;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = Client::paginate();

        return view('client.index', compact('client'))->with('i',(request()->input('page', 1)-1) * $client->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $client =  new Client();
        return view('client.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Client::$rules);

        $client = Client::create($request->all());

        return  redirect()->route('client.index')->with('success', 'Client created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $client = Client::find($id);

        return view('client.show', compact('client'));

    
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $client = Client::find($id);

        return  view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        request()->validate(Client::$rules);

        $client->update($request->all());

        return redirect()->route('client.index')->with('succes', 'Client update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = Client::find($id)->delete();

        return redirect()->route('client.index')->with('success', 'Client delete successfully');
    }
}
