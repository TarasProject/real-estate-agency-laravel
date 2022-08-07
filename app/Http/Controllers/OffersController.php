<?php

namespace App\Http\Controllers;
use App\Models\Currency;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class OffersController extends Controller
{
    public function index()
    {     $offers = Offer::with('user')->get();
    /*2 моделька Offer з user(метод створений у моделі Offer)*/

//    dd($offers);  /*це щоб перевірити*/
//        $offers = Offer::get();
//        $users = User::first();
//        dd($offers);
        return view('offers/index', compact('offers'));
    }

    public function makeValidator(array $data){
        return Validator::make($data,[
            'type_object'=> 'required|string|max:255',
            'price'=> 'required|numeric',
//            'type_price'=> 'required|string|max:255',
        ]);
    }

    public function add()
    {
        $users = User::get();
//    dd($users);
        return view('offers/add', compact('users'));
    }

    public function edit($id)
    {
        $offers=Offer::find($id);

        $typesObject = Offer::$typeObject;//1.1 selected
        $typesCurrency = Currency::get();
//        dd($offers['type_currency']);
//dd($typesCurrency);
        return view('offers/edit', compact('offers','typesObject','typesCurrency'));

    }



    public function submit(Request $request)
    {
        $this->makeValidator($request->all())->validate();
        Offer::create([
           'type_object' => $request->input('type_object'),
           'price' => $request->input('price'),
           'type_currency' => $request->input('type_currency'),
           'type_wolls' => $request->input('type_wolls'),
           'room_number' => $request->input('room_number'),
           'phone' => $request->input('phone'),
           'more_information' => $request->input('more_information'),
           'remember' => $request->input('remember'),
           'user_id' => $request->input('user_id'),
        ]);

        \Session::flash('flash_message', json_encode([
            'class' =>  'success',
            'message'=>'Оголошення успішно створено'
        ]));


        return redirect()->route('offer.index');
    }

    public function updateOffers($id, Request $request)
    {
        $offers = Offer::find($id);
//        $typesObject = Offer::$typeObject;
        $offers -> update([
           'type_object' => $request->input('type_object'),
           'price' => $request->input('price'),
           'type_currency' => $request->input('type_currency'),
           'type_wolls' => $request->input('type_wolls'),
           'room_number' => $request->input('room_number'),
           'phone' => $request->input('phone'),
           'more_information' => $request->input('more_information'),
           'remember' => $request->input('remember'),
           'user_id' => $request->input('user_id')
        ]);

        \Session::flash('flash_message', json_encode([
            'class' =>  'success',
            'message'=>'Оголошення успішно відредаговано'
        ]));

        return redirect()-> route('offer.index');
    }

    public function delete($id, Request $request){
        $offers = Offer::find($id);
        $offers->delete();

        return redirect('/');
    }

}