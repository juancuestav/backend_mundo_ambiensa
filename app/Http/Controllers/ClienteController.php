<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Http\Resources\ClienteResource;
use App\Models\Cliente;
use Exception;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        // $results = $this->examenService->listar();
        $results = Cliente::filter()->get();
        $results = ClienteResource::collection($results);
        return response()->json(compact('results'));
    }

    public function store(ClienteRequest $request)
    {
        // Aquí puedes acceder a los datos validados
        $data = $request->validated();

        // Crear un nuevo cliente
        $modelo = Cliente::create($data);

        // Redirigir o devolver una respuesta
        $mensaje = 'Cliente guardado exitosamente!';
        return response()->json(compact('mensaje', 'modelo'));
    }

    public function update(ClienteRequest $request, Cliente $cliente)
    {
        // Actualizar cliente con los datos validados
        $modelo = $cliente->update($request->validated());

        // Redirigir o devolver una respuesta
        $mensaje = 'Cliente actualizado exitosamente!';
        return response()->json(compact('mensaje', 'modelo'));
    }
}
