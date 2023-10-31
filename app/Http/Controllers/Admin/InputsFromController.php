<?php

namespace App\Http\Controllers\Admin;

use App\Models\InputsFrom;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInputsFromRequest;
use App\Http\Requests\UpdateInputsFromRequest;

class InputsFromController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $InputsFrom = InputsFrom::all();
        return view('admin.InputFrom.index', compact('InputsFrom'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $inputs = InputsFrom::all();
        return view('admin.InputFrom.create',compact('inputs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInputsFromRequest $request)
    {
        $inputs = $request->all();
        if($request->select_values)
        {
            $inputs['select_values'] = json_encode(explode(',', $inputs['select_values']));
        }
        InputsFrom::create($inputs);
        return to_route('admin.input-forms.index')->with('swal-success', 'اعلامیه ایمیلی جدید با موفقیت اد شد .');
    }

    /**
     * Display the specified resource.
     */
    public function show(InputsFrom $input_form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InputsFrom $input_form)
    {
        $inputsFrom = $input_form;
        if($input_form->select_values !== null) {
            $inputsFrom['select_values'] = implode(",",json_decode($inputsFrom->select_values));
        }
        return view('admin.InputFrom.edit',compact('inputsFrom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInputsFromRequest $request, InputsFrom $input_form)
    {
        $inputs = $request->all();
        if($request->select_values)
        {
            $inputs['select_values'] = json_encode(explode(',', $inputs['select_values']));
        }
        $input_form->update($inputs);
        return to_route('admin.input-forms.index')->with('swal-success', 'اطلاعیه ایمیلی با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InputsFrom $input_form)
    {
        $input_form->delete();
        return back()->with('swal-success', 'اینپوت فرم با موفقیت حذف شد');
    }
}
