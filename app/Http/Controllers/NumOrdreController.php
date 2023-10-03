<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Client;

use Illuminate\Http\Request;

class NumOrdreController extends Controller
{
    // public function index()
    // {
    //     return view('show.showorder');
    // }

    public function index(Request $request)
    {
        // Obtén el nombre del cliente desde la solicitud (puedes pasarlo como un parámetro en la URL).
        $nameClient = $request->input('client');

        // Busca el cliente en la base de datos por el campo 'name'.
        $client = Client::where('name', $nameClient)->first();

        if (!$client) {
            // Manejo del caso en el que el cliente no existe.
            return redirect()->route('error.page');
        }

        // Obtén las órdenes relacionadas con el cliente.
        $order = Order::where('client_id', $client->id)->get();

        return view('show.showorder', compact('client', 'order'));
    }
    
}
