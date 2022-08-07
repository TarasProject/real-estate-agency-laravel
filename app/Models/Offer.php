<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Offer extends Model
{
    const OBJECT_FLAT = 'flat';
    const OBJECT_HOUSE = 'house';

    public static $typeObject = [
        self::OBJECT_FLAT, self::OBJECT_HOUSE,
    ]; //1.2 selected

//    const CURRENCY_UAH = 'UAH';
//    const CURRENCY_USD = 'USD';
//    const CURRENCY_EUR = 'EUR';
//
//    public static $typeCurrency = [
//        self::CURRENCY_UAH, self::CURRENCY_USD, self::CURRENCY_EUR,
//    ];

    const REMEMBER_FALSE = 'OFF';
    const REMEMBER_TRUE = 'ON';

    protected $table = 'offers';
    protected $fillable = [
        'type_object','price','type_currency','type_wolls', 'room_number','name','phone', 'more_information', 'user_id','remember'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }           /*1 ця функція робить зв'язок між таблицями у laravely*/
}
