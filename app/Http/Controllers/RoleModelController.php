<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleModelRequest;
use App\Http\Requests\UpdateRoleModelRequest;
use App\Models\RoleModel;

class RoleModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoleModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoleModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoleModel  $roleModel
     * @return \Illuminate\Http\Response
     */
    public function show(RoleModel $roleModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoleModel  $roleModel
     * @return \Illuminate\Http\Response
     */
    public function edit(RoleModel $roleModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoleModelRequest  $request
     * @param  \App\Models\RoleModel  $roleModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoleModelRequest $request, RoleModel $roleModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoleModel  $roleModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoleModel $roleModel)
    {
        //
    }
}
