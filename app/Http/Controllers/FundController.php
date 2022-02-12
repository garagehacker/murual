<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use App\Models\UserFolio;
use Illuminate\Http\Request;

class FundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funds = Fund::all();
        return view('admin.backend.fund.index' ,compact('funds'));
    }

    public function fundApi()
    {
        $funds = Fund::all();
        return $funds;
    }
    public function folioApi($id)
    {
        $folios = UserFolio::where('user_id', $id)->get();
        return $folios;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.backend.fund.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fund = new Fund();
        $fund->nfo_name = $request->nfo_name;
        $fund->nfo_type = $request->nfo_type;
        $fund->nfo_url = $request->nfo_url;
        $fund->nfo_start_date = $request->nfo_start_date;
        $fund->nfo_end_date = $request->nfo_end_date;
        $fund->save();

        return redirect(route('funds.index'))->with('message', 'Fund created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fund = Fund::find($id);
        return view('admin.backend.fund.edit', compact(['fund','id']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fund = Fund::find($id);
        $fund->nfo_name = $request->nfo_name;
        $fund->nfo_type = $request->nfo_type;
        $fund->nfo_url = $request->nfo_url;
        $fund->nfo_start_date = $request->nfo_start_date;
        $fund->nfo_end_date = $request->nfo_end_date;
        $fund->update();

        return redirect(route('funds.index'))->with('message', 'Fund update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fund = Fund::find($id);
        $fund->delete();
        return redirect(route('funds.index'))->with('delete', 'Fund deleted successfully');
    }


}
