<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ClientesRequest;

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
            $data = Cliente::select(['nome', 'apelido', 'telefone','endereco', 'id']);
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                     
                            $btn = '<a href="'.route('clientes.edit',['id' => $row->id]).'" class="edit btn btn-primary btn-sm" target="_blank"> Editar</a>';
                            $btn.= '<a href="'.route('clientes.delete',['id' => $row->id]).'" class="edit btn btn-primary btn-sm"> Deletar</a>';

      
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
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
       $cliente =  Cliente::findOrFail($id); 

       return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClientesRequest $request, string $id)
    {
        try{

            Cliente::findOrFail($id)->update(
                [
                    'nome' => $request->nome,
                    'apelido' => $request->apelido,
                    'endereco' => $request->endereco,
                    'telefone' => $request->telefone,
                ]
            );
            Session::flash('success', 'Cliente editado com sucesso.');
            
            return redirect()->back();

        } catch (\Exception $e){
            Session::flash('error', 'Erro ao atualizar cliente: ' . $e->getMessage());
        }
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Cliente::findOrFail($id)->delete();
        Session::flash('success', 'Cliente deletado com sucesso.');
        return redirect()->back();
    }
}
