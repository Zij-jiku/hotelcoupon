<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\Getcoupon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class GetcouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.getcoupon.index' , [
            'getcoupons_all' => Getcoupon::all(),
            'getcoupons_totals' => Getcoupon::count(),
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $generator_user_id = Str::random(5).rand(2,1000);
        Cookie::queue('generator_user_id' , $generator_user_id , 1440);
        $coupon_code = Str::slug('UBH'.'-'.Str::random(6));
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|unique:getcoupons',
            'city' => 'required',
            'hotelname' => 'required',
        ]);
    
        Getcoupon::insert($request->except('_token') + [
          'created_at' => Carbon::now(),
          'user_id'  => $generator_user_id,
          'couponcode'  => $coupon_code,
          'date' => Carbon::now()
        ]);

        notify()->success('Getcoupon Insert Successfully!!');
        return redirect('coupon-page');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Getcoupon  $getcoupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Getcoupon $getcoupon)
    {
        return view('backend.getcoupon.edit' , [
            'getcoupon_info' => $getcoupon
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Getcoupon  $getcoupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Getcoupon $getcoupon)
    {
        $getcoupon->update($request->except('_token' , '_method'));
        return redirect('/getcoupon')->with('udpate_status' , 'Getcoupon Update Successfully!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Getcoupon  $getcoupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Getcoupon $getcoupon)
    {
        $getcoupon->delete();
        return back()->with('delete_status','Getcoupon Delete SuccessFully!!');
    }
}
