<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//usamos el objetos necesarios
use App\Models\Ticket;
use App\Models\TicketType;
use App\Models\Train;

use DB;//usamos la database

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();

        return view('tickets/index',[
            'tickets' => $tickets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ticketTypes = TicketType::all();
        $trains = Train::all();
        return view('tickets/create',['ticketTypes'=> $ticketTypes, 'trains'=> $trains]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket = new Ticket;
        $ticket -> date = $request -> input('date');
        $ticket -> price = $request -> input('price');
        $ticket -> train_id = $request -> input('train_id');
        $ticket -> ticket_type_id = $request -> input('ticket_type_id');
        $ticket -> save(); /* inserta la info del formulario en la database */

        return redirect('/ticket');//te manda al index de ticket
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticket = Ticket::find($id);
        return view('tickets/show',['ticket'=> $ticket]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ticketTypes = TicketType::all();
        $trains = Train::all();
        $ticket = Ticket::find($id);
        return view('tickets/edit',['ticket'=> $ticket],['ticketTypes'=> $ticketTypes, 'trains'=> $trains]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticket = Ticket::find($id);
        $ticket -> date = $request -> input('date');
        $ticket -> price = $request -> input('price');
        $ticket -> train_id = $request -> input('select_train_id');
        $ticket -> ticket_type_id = $request -> input('select_ticket_type_id');
        $ticket -> save(); /* inserta la info del formulario en la database */

        return redirect('/ticket');//te manda al index de ticket
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tickets')-> where('id','=',$id)->delete();
        return redirect('/ticket');
    }
}
