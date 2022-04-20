<?php

namespace App\Http\Controllers;

use App\Jobs\DataExport;
use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $data = Data::all();
        DataExport::dispatch($data);

        return 'done';
    }














    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Data $data)
    {
        //
    }

    public function edit(Data $data)
    {
        //
    }

    public function update(Request $request, Data $data)
    {
        //
    }

    public function destroy(Data $data)
    {
        //
    }
}
