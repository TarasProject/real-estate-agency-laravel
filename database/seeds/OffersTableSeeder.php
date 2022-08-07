<?php

use Illuminate\Database\Seeder;
use App\Models\Offer;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Offer::create([
            'type_object' => 'srf',
            'price' => '30000',
            'type_currency'=>'dolar',
            'type_wolls' => 'Долар',
            'room_number' => '3',
//          'name' => 'Igor',
            'phone' => '1234567891011',
            'more_information' => 'Ок',
            'user_id' => 1,

        ]);

        factory(Offer::class,10)->create();
    }
}
