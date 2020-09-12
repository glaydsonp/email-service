<?php

namespace App\Http\Controllers;

use App\Jobs\SendZeniteEmail;
use App\Models\ZeniteContato;
use Carbon\Carbon;
use Dotenv\Validator;
use Illuminate\Http\Request;

class ZeniteContatoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone_number' => 'required'
        ]);

        $contato = new ZeniteContato();
        $contato->name = $request->name;
        $contato->phone_number = $request->phone_number;
        $contato->save();

        SendZeniteEmail::dispatch($contato);

        return array("message" => "Contato salvo com sucesso.");
    }
}
