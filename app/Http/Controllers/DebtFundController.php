<?php

namespace App\Http\Controllers;

use App\Models\DebtFund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DebtFundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $debt_funds = DebtFund::all();
        return view('admin.backend.debt_fund.index', compact('debt_funds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.backend.debt_fund.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $debt_fund = new DebtFund();
        $debt_fund->fund_name = $request->fund_name;
        $debt_fund->fund_url = $request->fund_url;
        $debt_fund->fund_risk = $request->fund_risk;
        $debt_fund->fund_return = $request->fund_return;
        $debt_fund->fund_age = $request->fund_age;
        $debt_fund->fund_nav = $request->fund_nav;
        $debt_fund->fund_aum = $request->fund_aum;
        $debt_fund->fund_goal = $request->fund_goal;
        $debt_fund->fund_info = $request->fund_info;
        $debt_fund->fund_entry_load = $request->fund_entry_load;
        $debt_fund->fund_exit_load = $request->fund_exit_load;
        $debt_fund->fund_min_sip = $request->fund_min_sip;
        $debt_fund->fund_min_lumpsum = $request->fund_min_lumpsum;
        $debt_fund->fund_manager_name = $request->fund_manager_name;
        $debt_fund->fund_manager_total_exp = $request->fund_manager_total_exp;
        $debt_fund->fund_manager_info = $request->fund_manager_info;
        $debt_fund->fund_return_1_year = $request->fund_return_1_year;
        $debt_fund->fund_return_3_year = $request->fund_return_3_year;
        $debt_fund->save();

        return redirect(url('/debt_funds'))->with('message', 'Debt Fund successfully');
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
        $debt_fund = DebtFund::find($id);
        return view('admin.backend.debt_fund.edit', compact(['id','debt_fund']));
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
        $debt_fund = DebtFund::find($id);
        $debt_fund->fund_name = $request->fund_name;
        $debt_fund->fund_url = $request->fund_url;
        $debt_fund->fund_risk = $request->fund_risk;
        $debt_fund->fund_return = $request->fund_return;
        $debt_fund->fund_age = $request->fund_age;
        $debt_fund->fund_nav = $request->fund_nav;
        $debt_fund->fund_aum = $request->fund_aum;
        $debt_fund->fund_goal = $request->fund_goal;
        $debt_fund->fund_info = $request->fund_info;
        $debt_fund->fund_entry_load = $request->fund_entry_load;
        $debt_fund->fund_exit_load = $request->fund_exit_load;
        $debt_fund->fund_min_sip = $request->fund_min_sip;
        $debt_fund->fund_min_lumpsum = $request->fund_min_lumpsum;
        $debt_fund->fund_manager_name = $request->fund_manager_name;
        $debt_fund->fund_manager_total_exp = $request->fund_manager_total_exp;
        $debt_fund->fund_manager_info = $request->fund_manager_info;
        $debt_fund->fund_return_1_year = $request->fund_return_1_year;
        $debt_fund->fund_return_3_year = $request->fund_return_3_year;
        $debt_fund->update();
        return redirect(url('/debt_funds'))->with('message', 'Debt Fund updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $debt_fund = DebtFund::find($id);
        $debt_fund->delete();
        return redirect(url('/debt_funds'))->with('delete', 'Data Deleted Successfully');
    }

    public function debtApi()
    {
        $debt_funds = DB::table('debt_funds')->paginate(10);
        return $debt_funds;
    }
}
