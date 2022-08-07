<?php

namespace App\Http\Controllers;
use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ContactController extends Controller
{
    public function index() {
        return view('contact/index');
    }

    public function submit(Request $request)
    {


//        $types = Currency::create([
//            'currency' => $request->input('currency'),
//        ]);
//
//        $types->save();
//        dd('type');






        $types = Currency::get();

        $input = $request->input('input_currency');

        foreach ($types as $type){
            if ($input == $type['name']) {
                return view('contact.index');
            }
        }

        $typePrice =  Currency::create([
            'name' => $request ->input('input_currency')
        ]);

        $typePrice->save();

        return redirect()->route('offer.index');
    }


}
