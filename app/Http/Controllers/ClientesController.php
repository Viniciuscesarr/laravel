<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clientes.index');
    }

    public function data(Request $request)
    {
        if ($request->ajax()) {
            $data = Cliente::select(['nome', 'apelido', 'telefone','endereco']);
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Editar</a>';
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|max:255|unique:cliente,nome'
        ]);
    
            try {
                Cliente::create([
                    'empresa_id' => Auth::user()->empresa_id,
                    'nome' => $validatedData['nome'],
                    'apelido' => $request->apelido,
                    'telefone' => $request->telefone,
                    'endereco' => $request->endereco,
                ]);

                // Defina uma mensagem de sucesso na sessão
                Session::flash('success', 'Cliente cadastrado com sucesso.');
            } catch (\Exception $e) {
                // Se ocorrer um erro, defina uma mensagem de erro na sessão
                Session::flash('error', 'Erro ao cadastrar cliente: ' . $e->getMessage());
            }

            // Redirecione de volta à rota "clientes"
            return redirect()->route('clientes');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
