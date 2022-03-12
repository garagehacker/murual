<?php

namespace App\Http\Controllers;

use App\Exports\UsersFolioExport;
use App\Imports\UsersFolioImport;
use App\Models\Customer;
use App\Models\User;
use App\Models\UserFolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->except(Auth::user()->id);
        return view('admin.backend.user.index' ,compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $name = $request->first_name;
        $mobile = substr($request->mobile, 0, 4);
        $user->password = Hash::make($name.$mobile);
        $user->mobile = $request->mobile;
        $user->country = $request->country;
        $user->zip_code = $request->zip_code;
        $user->address = $request->address;
        $user->is_status = 1;
        $user->assignRole('user');
        $user->save();

        return redirect(route('users.index'))->with('message', 'User created successfully');
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
        $user = User::find($id);
        return view('admin.backend.user.edit', compact(['user','id']));
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
        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->country = $request->country;
        $user->zip_code = $request->zip_code;
        $user->address = $request->address;
        $user->update();

        return redirect(route('users.index'))->with('message', 'User updated successfully');
    }

    public function folio($id)
    {
        $user = User::where('id', $id)->first();
        $folios = UserFolio::where('user_id', $id)->get();
        return view('admin.backend.folio.index', compact(['id','folios','user']));
    }

    public function folioCreate($id)
    {
        return view('admin.backend.folio.create', compact('id'));
    }

    public function folioCreateStore($id, Request $request)
    {
        $user_folio = new UserFolio();
        $user_folio->user_id = $id;
        $user_folio->nfo_folio_no = $request->nfo_folio_no;
        $user_folio->nfo_folio_type = $request->nfo_folio_type;
        $user_folio->nfo_start_date = $request->nfo_start_date;
        $user_folio->nfo_product_name = $request->nfo_product_name;
        $user_folio->nfo_balance_unit = $request->nfo_balance_unit;
        $user_folio->nfo_avg_cost_price = $request->nfo_avg_cost_price;
        $user_folio->nfo_purchase_cost_price = '₹'." ". $request->nfo_purchase_cost_price;
        $user_folio->nfo_div_init_paid = $request->nfo_div_init_paid;
        $user_folio->nfo_div_init_reinv = $request->nfo_div_init_reinv;
        $user_folio->nfo_no_days = $request->nfo_no_days;
        $user_folio->nfo_current_nav = $request->nfo_current_nav;
        $user_folio->nfo_curret_value = '₹'." ". $request->nfo_curret_value;
        $user_folio->nfo_profile_plus_loss = '₹'." ". $request->nfo_profile_plus_loss;
        $user_folio->nfo_abs_percentage = $request->nfo_abs_percentage;
        $user_folio->nfo_cagr = $request->nfo_cagr;
        $user_folio->nfo_xirr = $request->nfo_xirr;
        $user_folio->save();

        return redirect(url('/folio',$id))->with('message', 'Folio successfully send');
    }

    public function folioEdit($id)
    {
        $user_folio = UserFolio::find($id);
        return view('admin.backend.folio.edit', compact(['user_folio','id']));



    }

    public function folioEditUpdate($id, Request $request)
    {
        $user_folio = UserFolio::find($id);
        $user_folio->nfo_folio_no = $request->nfo_folio_no;
        $user_folio->nfo_folio_type = $request->nfo_folio_type;
        $user_folio->nfo_start_date = $request->nfo_start_date;
        $user_folio->nfo_product_name = $request->nfo_product_name;
        $user_folio->nfo_balance_unit = $request->nfo_balance_unit;
        $user_folio->nfo_avg_cost_price = $request->nfo_avg_cost_price;
        $user_folio->nfo_purchase_cost_price = $request->nfo_purchase_cost_price;
        $user_folio->nfo_div_init_paid = $request->nfo_div_init_paid;
        $user_folio->nfo_div_init_reinv = $request->nfo_div_init_reinv;
        $user_folio->nfo_no_days = $request->nfo_no_days;
        $user_folio->nfo_current_nav = $request->nfo_current_nav;
        $user_folio->nfo_curret_value = $request->nfo_curret_value;
        $user_folio->nfo_profile_plus_loss = $request->nfo_profile_plus_loss;
        $user_folio->nfo_abs_percentage = $request->nfo_abs_percentage;
        $user_folio->nfo_cagr = $request->nfo_cagr;
        $user_folio->nfo_xirr = $request->nfo_xirr;
        $user_folio->update();

        return redirect(url('/folio',$user_folio->user_id))->with('message', 'Folio update successfully');
    }

    public function folioDelete($id)
    {
        $folio = UserFolio::find($id);
        $folio->delete();
        return redirect(url('/folio',$folio->user_id))->with('delete', 'Date Deleted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(url('/users'))->with('delete', 'Date Deleted');
    }


    public function fileImportExport()
    {
        return view('file-import');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function fileImport(Request $request)
    {
        Excel::import(new UsersFolioImport, $request->file('file')->store('temp'));
        return back();
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function fileExport()
    {
        return Excel::download(new UsersFolioExport, 'users-collection.xlsx');
    }


}
