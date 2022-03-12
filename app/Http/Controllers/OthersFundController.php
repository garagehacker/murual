<?php

namespace App\Http\Controllers;

use App\Models\OthersFund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OthersFundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $other_funds = OthersFund::all();
        return view('admin.backend.others_fund.index', compact('other_funds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.backend.others_fund.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $other_fund = new OthersFund();
        $other_fund->fund_name = $request->fund_name;
        $other_fund->fund_url = $request->fund_url;
        $other_fund->fund_risk = $request->fund_risk;
        $other_fund->fund_return = $request->fund_return;
        $other_fund->fund_age = $request->fund_age;
        $other_fund->fund_nav = $request->fund_nav;
        $other_fund->fund_aum = $request->fund_aum;
        $other_fund->fund_goal = $request->fund_goal;
        $other_fund->fund_info = $request->fund_info;
        $other_fund->fund_entry_load = $request->fund_entry_load;
        $other_fund->fund_exit_load = $request->fund_exit_load;
        $other_fund->fund_min_sip = $request->fund_min_sip;
        $other_fund->fund_min_lumpsum = $request->fund_min_lumpsum;
        $other_fund->fund_manager_name = $request->fund_manager_name;
        $other_fund->fund_manager_total_exp = $request->fund_manager_total_exp;
        $other_fund->fund_manager_info = $request->fund_manager_info;
        $other_fund->fund_return_1_year = $request->fund_return_1_year;
        $other_fund->fund_return_3_year = $request->fund_return_3_year;
        $other_fund->save();

        return redirect(url('/others_funds'))->with('message', 'Other Fund successfully');
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
        $other_fund = OthersFund::find($id);
        return view('admin.backend.others_fund.edit', compact(['id','other_fund']));
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
        $other_fund = OthersFund::find($id);
        $other_fund->fund_name = $request->fund_name;
        $other_fund->fund_url = $request->fund_url;
        $other_fund->fund_risk = $request->fund_risk;
        $other_fund->fund_return = $request->fund_return;

        $other_fund->fund_age = $request->fund_age;
        $other_fund->fund_nav = $request->fund_nav;
        $other_fund->fund_aum = $request->fund_aum;
        $other_fund->fund_goal = $request->fund_goal;
        $other_fund->fund_info = $request->fund_info;
        $other_fund->fund_entry_load = $request->fund_entry_load;
        $other_fund->fund_exit_load = $request->fund_exit_load;
        $other_fund->fund_min_sip = $request->fund_min_sip;
        $other_fund->fund_min_lumpsum = $request->fund_min_lumpsum;
        $other_fund->fund_manager_name = $request->fund_manager_name;
        $other_fund->fund_manager_total_exp = $request->fund_manager_total_exp;
        $other_fund->fund_manager_info = $request->fund_manager_info;
        $other_fund->fund_return_1_year = $request->fund_return_1_year;
        $other_fund->fund_return_3_year = $request->fund_return_3_year;
        $other_fund->update();
        return redirect(url('/others_funds'))->with('message', 'Other Fund updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $other_fund = OthersFund::find($id);
        $other_fund->delete();
        return redirect(url('/others_funds'))->with('delete', 'Data Deleted Successfully');
    }

    public function otherApi()
    {
        $other_funds = DB::table('others_funds')->paginate(10);
        return $other_funds;
    }
}
