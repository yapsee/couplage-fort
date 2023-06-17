<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function ajouter(Request $request)
    {
        $client = new Client();
        $client->nom = $request->input('nom');
        $client->prenom = $request->input('prenom');
        $client->save();

        return redirect()->back();
    }

    public function lister()
    {
        $clients = Client::all();

        return view('listClients', compact('clients'));
    }
}
