<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketType;//usamos el objeto serie
use DB;//usamos la database

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticketTypes = ticketType::all();
        return view('ticketTypes/index',['ticketTypes' => $ticketTypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ticketTypes/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticketType = new ticketType;
        $ticketType -> type = $request -> input('type');
        $ticketType -> save(); /* inserta la info del formulario en la database */

        return redirect('/ticketType');//te manda al index de series
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticketType = ticketType::find($id);
        return view('ticketTypes/show', ['ticketType' => $ticketType]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ticketType = ticketType::find($id);
        return view('ticketTypes/edit',['ticketType'=> $ticketType]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticketType = ticketType::find($id);
        $ticketType -> type = $request -> input('type');
        $ticketType -> save(); /* inserta la info del formulario en la database */

        return redirect('/ticketType');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('ticket_types')-> where('id','=',$id)->delete();
        return redirect('/ticketType');
    }
}
