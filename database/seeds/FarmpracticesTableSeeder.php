<?php

use App\Farmpractice;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FarmpracticesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('farmpractices')->delete();

        Farmpractice::create([
            'crop_year' => '2015',
            'loan_id' => 1,
            'farm_id' => 9,
            'crop_id' => 6,
            'towhom_market' => 'CropsRUs',
            'share_rent' => 20,
            'gin_mill' => '',
            'acres' => 350,
            'irrigated' => 0,
            'ins_price' => 0.6300,
            'ins_level' => 70,
            'aph' => 850,
            'ins_premium' => -19.82,
            'ins_share' => 80,
            'prod_share' => 80,
            'mill_share' => 80,
            'prod_yield' => 1050,
            'prod_price' => 0.6000,
            'bkqty' => 0,
            'bkprice' => 0,
            'harvest' => -0.0900,
            'rebates' => 0.1000,
            'crop_disc' => 50,
            'fsa_disc' => 20,
            'cropins_disc' => 20,
            'nonrp_disc' => 20,
            'sco_disc' => 50
        ]);

        //123 - Cotton I
        Farmpractice::create([
            'crop_year' => '2015',
            'loan_id' => 1,
            'farm_id' => 9,
            'crop_id' => 6,
            'towhom_market' => 'CropsRUs',
            'share_rent' => 20,
            'gin_mill' => '',
            'acres' => 1000,
            'irrigated' => 1,
            'ins_price' => 0.6300,
            'ins_level' => 70,
            'aph' => 925,
            'ins_premium' => -19.82,
            'ins_share' => 80,
            'prod_share' => 80,
            'mill_share' => 80,
            'prod_yield' => 1200,
            'prod_price' => 0.6000,
            'bkqty' => 0,
            'bkprice' => 0,
            'harvest' => -0.0900,
            'rebates' => 0.1000,
            'crop_disc' => 50,
            'fsa_disc' => 20,
            'cropins_disc' => 20,
            'nonrp_disc' => 20,
            'sco_disc' => 50
        ]);

        //123 - Corn NI
        Farmpractice::create([
            'crop_year' => '2015',
            'loan_id' => 1,
            'farm_id' => 9,
            'crop_id' => 1,
            'towhom_market' => 'CropsRUs',
            'share_rent' => 20,
            'gin_mill' => '',
            'acres' => 1000,
            'irrigated' => 0,
            'ins_price' => 4.05,
            'ins_level' => 75,
            'aph' => 150,
            'ins_premium' => -20.00,
            'ins_share' => 100,
            'prod_share' => 100,
            'mill_share' => 100,
            'prod_yield' => 200,
            'prod_price' => 4.0000,
            'bkqty' => 0,
            'bkprice' => 0,
            'harvest' => 0,
            'rebates' => 0,
            'crop_disc' => 50,
            'fsa_disc' => 20,
            'cropins_disc' => 20,
            'nonrp_disc' => 20,
            'sco_disc' => 50
        ]);

        //123 - Soybeans NI
        Farmpractice::create([
            'crop_year' => '2015',
            'loan_id' => 1,
            'farm_id' => 9,
            'crop_id' => 2,
            'towhom_market' => 'CropsRUs',
            'share_rent' => 20,
            'gin_mill' => '',
            'acres' => 1000,
            'irrigated' => 0,
            'ins_price' => 9.6200,
            'ins_level' => 80,
            'aph' => 50,
            'ins_premium' => -20.00,
            'ins_share' => 80,
            'prod_share' => 80,
            'mill_share' => 80,
            'prod_yield' => 50,
            'prod_price' => 9.25,
            'bkqty' => 0,
            'bkprice' => 0,
            'harvest' => 0,
            'rebates' => 0,
            'crop_disc' => 50,
            'fsa_disc' => 20,
            'cropins_disc' => 20,
            'nonrp_disc' => 20,
            'sco_disc' => 50
        ]);

        //456 - Cotton NI
        Farmpractice::create([
            'crop_year' => '2015',
            'loan_id' => 1,
            'farm_id' => 10,
            'crop_id' => 6,
            'towhom_market' => 'CropsRUs',
            'share_rent' => 0,
            'gin_mill' => '',
            'acres' => 50,
            'irrigated' => 0,
            'ins_price' => 0.6300,
            'ins_level' => 75,
            'aph' => 900,
            'ins_premium' => -21,
            'ins_share' => 100,
            'prod_share' => 100,
            'mill_share' => 100,
            'prod_yield' => 1050,
            'prod_price' => 0.6000,
            'bkqty' => 0,
            'bkprice' => 0,
            'harvest' => -0.0900,
            'rebates' => 0.1000,
            'crop_disc' => 50,
            'fsa_disc' => 20,
            'cropins_disc' => 20,
            'nonrp_disc' => 20,
            'sco_disc' => 50
        ]);

        //567 - Cotton I
        Farmpractice::create([
            'crop_year' => '2015',
            'loan_id' => 1,
            'farm_id' => 11,
            'crop_id' => 6,
            'towhom_market' => 'CropsRUs',
            'share_rent' => 20,
            'gin_mill' => '',
            'acres' => 200,
            'irrigated' => 1,
            'ins_price' => 0.6300,
            'ins_level' => 75,
            'aph' => 950,
            'ins_premium' => -21,
            'ins_share' => 100,
            'prod_share' => 80,
            'mill_share' => 80,
            'prod_yield' => 1050,
            'prod_price' => 0.6000,
            'bkqty' => 0,
            'bkprice' => 0,
            'harvest' => -0.0900,
            'rebates' => 0.1000,
            'crop_disc' => 50,
            'fsa_disc' => 20,
            'cropins_disc' => 20,
            'nonrp_disc' => 20,
            'sco_disc' => 50
        ]);

        //789 - Cotton I
        Farmpractice::create([
            'crop_year' => '2015',
            'loan_id' => 1,
            'farm_id' => 12,
            'crop_id' => 6,
            'towhom_market' => 'CropsRUs',
            'share_rent' => 0,
            'gin_mill' => '',
            'acres' => 400,
            'irrigated' => 1,
            'ins_price' => 0.6300,
            'ins_level' => 75,
            'aph' => 1000,
            'ins_premium' => -21,
            'ins_share' => 100,
            'prod_share' => 100,
            'mill_share' => 100,
            'prod_yield' => 1050,
            'prod_price' => 0.6000,
            'bkqty' => 0,
            'bkprice' => 0,
            'harvest' => -0.0900,
            'rebates' => 0.1000,
            'crop_disc' => 50,
            'fsa_disc' => 20,
            'cropins_disc' => 20,
            'nonrp_disc' => 20,
            'sco_disc' => 50
        ]);
    }
}
