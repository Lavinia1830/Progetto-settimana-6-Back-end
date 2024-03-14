<?php

namespace App\Http\Controllers;

use App\Models\Attivita;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Progetto;
use App\Http\Requests\UpdateProgettoRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class ProgettoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $progettos = Progetto::orderBy('id');
        return view('progettos', ['progettos' => $progettos->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createProgetto', ['title' => 'Add Progetto']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->request);
        // Validazione dei dati
        $validatedData = $request->validate([
            'name' => 'required|string',
            'year' => 'required|integer',
        ]);

        // Ottieni un id utente casuale solo se esiste almeno un utente nel database
        $randomUserId = User::inRandomOrder()->value('id');

        if (!$randomUserId) {
            return 'Nessun utente trovato!!!';
        }

        try {
        
            // Creazione del progetto
            $progetto = Progetto::create([
                'name' => $validatedData['name'],
                'year' => $validatedData['year'],
                'user_id' => $randomUserId,
                'attivita_id' => Attivita::get()->random()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        
            return $progetto ? 'Progetto Creato' : 'Progetto non trovato!!!';
        } catch (\Exception $e) {
            // Gestione degli errori generici
            return response()->json(['error' => 'Qualcosa è andato storto'], 500);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Progetto $progetto)
    {
        return view('progettodetail', ['progettos' => $progetto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Progetto $progetto)
    {
        if($progetto->user_id != Auth::user()->id){ //tramite Auth accedo sempre in qualunque punto in qualunque posto della mia App all'utente loggato
            abort(401); //401 non autorizzato (pagina)
        }
        return $progetto;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgettoRequest $request, Progetto $progetto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Progetto $progetto)
    {
        //
    }
}
