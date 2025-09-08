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
        $this->authorize('viewAny', Company::class);

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
        $this->authorize('update', $company);
        
        $validated = $request->validated();
        
        $company->update($validated);
        
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

    return Company::whereHas('user', function ($query) use ($meetupSessionId) {
        $query->where('meetup_session_id', $meetupSessionId);
    })
    ->orderBy('number')
    ->get(['id', 'name', 'number']);
}
}
