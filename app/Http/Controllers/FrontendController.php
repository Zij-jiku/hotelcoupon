<?php

namespace App\Http\Controllers;


use App\Models\Getcoupon;
use Illuminate\Support\Facades\Cookie;
use PDF;


class FrontendController extends Controller
{

    public function couponpage(){

        $generator_user_id = Cookie::get('generator_user_id');

        return view('couponpage' , [

            'coupondata'  => Getcoupon::where('user_id' , $generator_user_id)->first() 
        ]);
    }

    public function homepage(){
        return view('homepage');
    }


    public function downloadinvoice($user_id){
        $coupon_info = Getcoupon::where('user_id' , $user_id)->first();
        $pdf = PDF::loadView('pdf.invoice' , compact('coupon_info'));

        return $pdf->download('Unibox (ID'.$user_id.').pdf');
  
      }


}
