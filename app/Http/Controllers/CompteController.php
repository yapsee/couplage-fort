<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompteRequest;
use App\Http\Requests\UpdateCompteRequest;
use App\Models\Compte;

class CompteController extends Controller
{
    public function creer(Request $request)
    {
        $client = Client::find($request->input('client'));

        $compte = new Compte();
        $compte->numero = 
        $compte->solde = 1000;
        $client->comptes()->save($compte);

        return redirect()->back();
    }

    public function listerParClient(Client $client)
    {
        $comptes = $client->comptes;

        return view('listClientAccounts', compact('client', 'comptes'));
    }

}
