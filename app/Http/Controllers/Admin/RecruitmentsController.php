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
        $Recruitments = Recruitments::all()->reverse();
        return view('admin.recruitments.index', compact('Recruitments'));
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
    public function show(Recruitments $recruitment)
    {
        $recruitments = json_decode($recruitment->data_form, true);
        unset($recruitments["_token"]);
        $keys = array_keys($recruitments);
        return view('admin.recruitments.show', compact('recruitment', 'keys', 'recruitments'));
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
    public function destroy(Recruitments $recruitment)
    {
        $recruitment->delete();
        return back()->with('swal-success', 'درخواست با موفقیت حذف شد');
    }
}