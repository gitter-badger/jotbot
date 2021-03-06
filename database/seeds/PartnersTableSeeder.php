<?php

use App\Partner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('partners')->delete();

        Partner::create([
            'loan_id' => 1,
            'partner' => 'Pepper Potts',
            'title' => 'CFO',
            'percent_owned' => 28,
            'ssn' => '918273645',
            'address' => '1 Tower Road',
            'city' => 'Natural',
            'state_id' => 4,
            'zip' => '77631',
            'email' => 'ppotts@marvel.com',
            'phone' => '5125551020',
            'age' => 34
        ]);

        Partner::create([
            'loan_id' => 1,
            'partner' => 'James Rhodes',
            'title' => 'Colonel',
            'percent_owned' => 20,
            'ssn' => '991827364',
            'address' => '1 Patriot Blvd',
            'city' => 'Natural',
            'state_id' => 4,
            'zip' => '77631',
            'email' => 'warmachine@marvel.com',
            'phone' => '5125559999',
            'age' => 44
        ]);
    }
}
