<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Esta línea llamaría al método `viewAny` de tu policy.
        $this->authorize('viewAny', Company::class);

        // Si tiene permiso, muestra todas las compañías.
        $companies = Company::all();
        return CompanyResource::collection($companies);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
        $this->authorize('view', $company);
        $company->load(['participants', 'counselors']);
        return new CompanyResource($company); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        // 1. Verificamos con el Policy si el usuario puede actualizar ESTA compañía.
        $this->authorize('update', $company);
        
        // 2. Obtenemos los datos validados.
        $validated = $request->validated();
        
        // 3. Actualizamos el modelo.
        $company->update($validated);
        
        // 4. Devolvemos la compañía actualizada.
        return new CompanyResource($company);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }

    public function list(Request $request)
{
    $meetupSessionId = $request->user()->meetup_session_id;

    // Le decimos: "Traeme las compañías que TIENEN un usuario
    // cuya meetup_session_id sea la del usuario actual."
    return Company::whereHas('user', function ($query) use ($meetupSessionId) {
        $query->where('meetup_session_id', $meetupSessionId);
    })
    ->orderBy('number')
    ->get(['id', 'name', 'number']);
}
}
