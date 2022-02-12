<?php

namespace App\Http\Controllers;

use App\Models\HybridFund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HybridFundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hybrid_funds = HybridFund::all();
        return view('admin.backend.hybrid_fund.index', compact('hybrid_funds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.backend.hybrid_fund.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hybrid_fund = new HybridFund();
        $hybrid_fund->fund_name = $request->fund_name;
        $hybrid_fund->fund_url = $request->fund_url;
        $hybrid_fund->fund_risk = $request->fund_risk;
        $hybrid_fund->fund_return = $request->fund_return;
        $hybrid_fund->save();

        return redirect(url('/hybrid_funds'))->with('message', 'Hybrid Fund successfully');
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
        $hybrid_fund = HybridFund::find($id);
        return view('admin.backend.hybrid_fund.edit', compact(['id','hybrid_fund']));
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
        $hybrid_fund = HybridFund::find($id);
        $hybrid_fund->fund_name = $request->fund_name;
        $hybrid_fund->fund_url = $request->fund_url;
        $hybrid_fund->fund_risk = $request->fund_risk;
        $hybrid_fund->fund_return = $request->fund_return;
        $hybrid_fund->update();
        return redirect(url('/hybrid_funds'))->with('message', 'Hybrid Fund updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hybrid_fund = HybridFund::find($id);
        $hybrid_fund->delete();
        return redirect(url('/hybrid_funds'))->with('delete', 'Data Deleted Successfully');
    }

    public function hybridApi()
    {
        $hybrid_funds = DB::table('hybrid_funds')->paginate(10);
        return $hybrid_funds;
    }
}
