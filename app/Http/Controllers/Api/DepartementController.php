<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepartementRequest;
use App\Http\Resources\DepartementResource;
use App\Models\Departement;


class DepartementController extends Controller
{
    
    public function index()
    {
        return DepartementResource::collection(Departement::all());
    }

    public function store(DepartementRequest $request)
    {
        $departement = Departement::create($request->validated());

        return new DepartementResource($departement);
    }

    public function show(Departement $departement)
    {
        return new DepartementResource($departement);
    }

    public function update(DepartementRequest $request, Departement $departement)
    {
        $departement->update($request->validated());

        return new DepartementResource($departement);
    }

    public function destroy(Departement $departement)
    {
        $departement->delete();

        return response()->noContent();
    }
}
