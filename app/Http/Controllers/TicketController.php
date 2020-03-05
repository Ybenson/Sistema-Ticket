<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function index()
    {
        $tickets = Ticket::latest()->paginate(5);


        return view('tickets.index', compact('tickets'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {

//dd (Cliente::all());
        return view('tickets.create')
            ->with('clientes', Cliente::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required',
            'numero_do_ticket'=>'required',
            'numero_do_pedido' => 'required|unique:tickets',
            'titulo' => 'required',
            'conteudo' => 'required',
        ]);

        Ticket::create($request->all());

        return redirect()->route('tickets.index')->with('success','ticket created successfully.');
    }

    public function show(Ticket $ticket)
    {
        return view('tickets.show',compact('ticket'));
    }


    public function edit(Ticket $ticket)
    {
        return view('tickets.edit',compact('ticket'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'numero_do_pedido' => 'required|unique:tickets',
            'titulo' => 'required',
            'conteudo' => 'required',
        ]);

        $ticket->update($request->all());
        return redirect()->route('tickets.index')->with('success','ticket updated successfully.');
    }


    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index')->with('success','Ticket deleted successfully.');
    }
}