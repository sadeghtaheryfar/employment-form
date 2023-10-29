<?php

namespace App\Http\Controllers\Admin;

use App\Models\Recruitments;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreRecruitmentsRequest;
use App\Http\Requests\UpdateRecruitmentsRequest;

class RecruitmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecruitmentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Recruitments $recruitments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recruitments $recruitments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecruitmentsRequest $request, Recruitments $recruitments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recruitments $recruitments)
    {
        //
    }
}
