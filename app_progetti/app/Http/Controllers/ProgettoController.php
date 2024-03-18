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
        /* $progettos = Progetto::orderBy('id');
        return view('progettos', ['progettos' => $progettos->get()]); */
        //return Progetto::get();
        //return Auth::user();
        $progettos = Progetto::where('user_id', Auth::user()->id)
                      ->orderBy('id')
                      ->get();
        return view('progettos', ['progettos' => $progettos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createProgetto');
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
            'description' => 'required|string',
            'type' => 'required|string',
            'language' => 'required|string',
            'state' => 'required|string',
        ]);

        

        try {
            // Creazione del progetto
            $progetto = Progetto::create([
                'name' => $validatedData['name'],
                'description' => $validatedData['description'],
                'type' => $validatedData['type'],
                'language' => $validatedData['language'],
                'state' => $validatedData['state'],
                'user_id' => Auth::id(), // Ottenere l'ID dell'utente autenticato
                'attivita_id' => Attivita::get()->random()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
            //return $progetto ? 'Progetto Creato' : 'Progetto non trovato!!!';
            return redirect()->action([ProgettoController::class, 'index']);
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
        return view('progettodetail', ['progetto' => $progetto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Progetto $progetto)
    {
        /* if($progetto->user_id != Auth::user()->id){ //tramite Auth accedo sempre in qualunque punto in qualunque posto della mia App all'utente loggato
            abort(401); //401 non autorizzato (pagina)
        }
        return $progetto; */
        return view('editProgetto', ['progetto' => $progetto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgettoRequest $request, Progetto $progetto)
    {
        $progetto['name'] = $request->name;
        $progetto['description'] = $request->description;
        $progetto['type'] = $request->type;
        $progetto['language'] = $request->language;
        $progetto['state'] = $request->state;

        $progetto->update();
        return redirect('/progettos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Progetto $progetto)
    {
        $progetto->delete();
        return redirect('/progettos');
    }
}