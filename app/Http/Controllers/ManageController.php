<?php

namespace App\Http\Controllers;

use App\Models\ManageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ManageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
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
    public function show(LoginAuth $loginAuth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LoginAuth $loginAuth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LoginAuth $loginAuth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LoginAuth $loginAuth)
    {
        //
    }
}
