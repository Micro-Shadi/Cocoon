<?php

namespace App\Http\Controllers;

use App\Models\hart;
use App\Models\Part;;
use Illuminate\Http\Request;
use App\Chart;
use DB;
class hartontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get users grouped by age
$groups = DB::table('parts')
->select('email', DB::raw('count(*) as total'))
->groupBy('email')
->pluck('total', 'email')->all();
// Generate random colours for the groups
for ($i=0; $i<=count($groups); $i++) {
$colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
}
// Prepare the data for returning with the view
$chart = new Chart;
$chart->labels = (array_keys($groups));
$chart->dataset = (array_values($groups));
$chart->colours = $colours;
return view('admindashboard.dashboard', compact('chart'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hart  $hart
     * @return \Illuminate\Http\Response
     */
    public function show(hart $hart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hart  $hart
     * @return \Illuminate\Http\Response
     */
    public function edit(hart $hart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hart  $hart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hart $hart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hart  $hart
     * @return \Illuminate\Http\Response
     */
    public function destroy(hart $hart)
    {
        //
    }
}
