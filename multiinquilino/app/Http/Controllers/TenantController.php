<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tenants.index', [
            'tenants' => Tenant::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tenants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([            
            'id' => 'required|unique:tenants',
        ]);

        $tenant = Tenant::create($request->all());

        $tenant->domains()->create([
            'domain' => $request->get('id') . '.' . 'multiinquilino.run',
        ]);

        return redirect()->route('tenants.index')
            ->with('success'.'tenant created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tenant $tenant)
    {
        return view('tenants.show', [
            'tenant' => $tenant,
        ]);       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tenant $tenant)
    {
        return view('tenants.edit', [
            'tenant' => $tenant,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tenant $tenant)
    {
        // return $request->all();
        $request->validate([
            'id' => 'required|unique:tenants,id,' . $tenant->id,//permite tomar el anterior id
            // 'id' => 'required|unique:tenants',
        ]);

        $tenant->update([
            'id' => $request->get('id'),
        ]);

        $tenant->domains()->update([
            'domain' => $request->get('id') . '.' . 'multiinquilino.run',
        ]);

        return redirect()->route('tenants.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tenant $tenant)
    {
        //return 'Destroy';
        $tenant->delete();

        return redirect()->route('tenants.index');
    }
}
