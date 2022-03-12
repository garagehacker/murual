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
        $fund->fund_age = $request->fund_age;
        $fund->fund_nav = $request->fund_nav;
        $fund->fund_aum = $request->fund_aum;
        $fund->fund_goal = $request->fund_goal;
        $fund->fund_info = $request->fund_info;
        $fund->fund_entry_load = $request->fund_entry_load;
        $fund->fund_exit_load = $request->fund_exit_load;
        $fund->fund_min_sip = $request->fund_min_sip;
        $fund->fund_min_lumpsum = $request->fund_min_lumpsum;
        $fund->fund_manager_name = $request->fund_manager_name;
        $fund->fund_manager_total_exp = $request->fund_manager_total_exp;
        $fund->fund_manager_info = $request->fund_manager_info;
        $fund->fund_return_1_year = $request->fund_return_1_year;
        $fund->fund_return_3_year = $request->fund_return_3_year;
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
        $fund->fund_age = $request->fund_age;
        $fund->fund_nav = $request->fund_nav;
        $fund->fund_aum = $request->fund_aum;
        $fund->fund_goal = $request->fund_goal;
        $fund->fund_info = $request->fund_info;
        $fund->fund_entry_load = $request->fund_entry_load;
        $fund->fund_exit_load = $request->fund_exit_load;
        $fund->fund_min_sip = $request->fund_min_sip;
        $fund->fund_min_lumpsum = $request->fund_min_lumpsum;
        $fund->fund_manager_name = $request->fund_manager_name;
        $fund->fund_manager_total_exp = $request->fund_manager_total_exp;
        $fund->fund_manager_info = $request->fund_manager_info;
        $fund->fund_return_1_year = $request->fund_return_1_year;
        $fund->fund_return_3_year = $request->fund_return_3_year;
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
