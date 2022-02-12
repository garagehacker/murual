<?php

namespace App\Http\Controllers;

use App\Models\EquityFund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquityFundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $equity_funds = EquityFund::all();
       return view('admin.backend.equity_fund.index', compact('equity_funds'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.backend.equity_fund.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equity = new EquityFund();
        $equity->fund_name = $request->fund_name;
        $equity->fund_url = $request->fund_url;
        $equity->fund_risk = $request->fund_risk;
        $equity->fund_return = $request->fund_return;
        $equity->save();

        return redirect(url('/equity_funds'))->with('message', 'Equity successfully');
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
        $equity_fund = EquityFund::find($id);
        return view('admin.backend.equity_fund.edit', compact(['id','equity_fund']));

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
        $equity_fund = EquityFund::find($id);
        $equity_fund->fund_name	 = $request->fund_name;
        $equity_fund->fund_url	 = $request->fund_url;
        $equity_fund->fund_risk	 = $request->fund_risk;
        $equity_fund->fund_return = $request->fund_return;
        $equity_fund->update();
        return redirect(url('/equity_funds'))->with('message', 'Equity updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equity_fund = EquityFund::find($id);
        $equity_fund->delete();
        return redirect(url('/equity_funds'))->with('delete', 'Date Deleted');
    }

    public function equityApi()
    {
        $equity_funds = DB::table('equity_funds')->paginate(10);
        return $equity_funds;
    }
}
