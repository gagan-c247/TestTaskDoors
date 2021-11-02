<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Countries;
use File;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Countries::truncate();
        $json = File::get("database/data/country.json");
        $countries = json_decode($json);
        $stripe_available =
        [   
           [   
                'country_code' => 'AU', 
                'currency_name' => 'Australian Dollar', 
                'currency' => 'AU$', 
                'currency_code' => 'aud' 
            ],  //Australia
            [   
                'country_code' => 'AT', 
                'currency_name' => 'Euro',
                'currency' => '€', 
                'currency_code' => 'eur'  
            ], //Austria
            [   
                'country_code' => 'BE', 
                'currency_name' => 'Euro',
                'currency' => '€', 
                'currency_code' => 'eur'  
            ], //Belgiumeur
           [   
                'country_code' => 'BE', 
                'currency_name' => 'Brazilian Real', 
                'currency' => 'R$', 
                'currency_code' => 'brl'  
            ], //Brazil
            [   
                'country_code' => 'BG', 
                'currency_name' => 'Bulgarian Lev', 
                'currency' => 'BGN', 
                'currency_code' => 'bgn'  
            ], //Bulgaria
            [   
                'country_code' => 'CA', 
                'currency_name' => 'Canadian Dollar', 
                'currency' => 'CA$', 
                'currency_code' => 'cad'  
            ], //Canada
            [   
                'country_code' => 'CZ', 
                'currency_name' => 'Czech Republic Koruna', 
                'currency' => 'Kč', 
                'currency_code' => 'czk'  
            ], //the Czech Republic
           [   
                'country_code' => 'DK', 
                'currency_name' => 'Danish Krone', 
                'currency' => 'Dkr', 
                'currency_code' => 'dkk'  
            ], //Denmark
            [   
                'country_code' => 'CY', 
                'currency_name' => 'Euro', 
                'currency' => '€', 
                'currency_code' => 'eur'  
            ], //Cyprus
            [   
                'country_code' => 'EE', 
                'currency_name' => 'Euro', 
                'currency' => '€', 
                'currency_code' => 'eur'  
            ], //Estonia
           [   
                'country_code' => 'FI', 
                'currency_name' => 'Euro', 
                'currency' => '€', 
                'currency_code' => 'eur'  
            ], //Finland
            [   
                'country_code' => 'FR', 
                'currency_name' => 'Euro', 
                'currency' => '€', 
                'currency_code' => 'eur'  
            ], //France 
            [   
                'country_code' => 'DE', 
                'currency_name' => 'Euro', 
                'currency' => '€', 
                'currency_code' => 'eur' 
             ], //Germany 
            [   
                'country_code' => 'GR', 
                'currency_name' => 'Euro', 
                'currency' => '€', 
                'currency_code' => 'eur'  
            ], //Greece 
            [   
                'country_code' => 'HK', 
                'currency_name' => 'Hong Kong Dollar', 
                'currency' => 'HK$', 
                'currency_code' => 'hkd'  
            ], //Hong Kong
            [   
                'country_code' => 'HU', 
                'currency_name' => 'Forint', 
                'currency' => 'Ft', 
                'currency_code' => 'huf'  
            ], //Hungary
            [   
                'country_code' => 'IN', 
                'currency_name' => 'Indian Rupee', 
                'currency' => 'Rs', 
                'currency_code' => 'inr' 
            ], //India
            [   
                'country_code' => 'IE', 
                'currency_name' => 'Euro', 
                'currency' => '€', 
                'currency_code' => 'eur'  
            ], //Ireland
            [   
                'country_code' => 'IT', 
                'currency_name' => 'Euro', 
                'currency' => '€', 
                'currency_code' => 'eur' 
            ], //Italy
            [   
                'country_code' => 'JP', 
                'currency_name' => 'Yen',
                'currency' => '¥', 
                'currency_code' => 'jpy' 
            ], //Japan
            [   
                'country_code' => 'LV', 
                'currency_name' => 'Euro', 
                'currency' => '€', 
                'currency_code' => 'eur' 
            ], //Latvia
             [   
                'country_code' => 'LT', 
                'currency_name' => 'Euro', 
                'currency' => '€', 
                'currency_code' => 'eur'  
            ], //Lithuania
             [   
                'country_code' => 'LU', 
                'currency_name' => 'Euro', 
                'currency' => '€', 
                'currency_code' => 'eur'  
            ], //Luxembourg
              [   
                'country_code' => 'MT', 
                'currency_name' => 'Euro', 
                'currency' => '€', 
                'currency_code' => 'eur'  
            ], //Malta
            [   
                'country_code' => 'MX', 
                'currency_name' => 'Mexican Peso', 
                'currency' => 'MX$', 
                'currency_code' => 'mxn'  
            ], //Mexico
             [   
                'country_code' => 'NL', 
                'currency_name' => 'Euro', 
                'currency' => '€', 
                'currency_code' => 'eur'  
            ], //the Netherlands
              [   
                'country_code' => 'NZ', 
                'currency_name' => 'New Zealand Dollar', 
                'currency' => 'NZ$', 
                'currency_code' => 'nzd'  
            ], //New Zealand
             [   
                'country_code' => 'NO', 
                'currency_name' => 'Norwegian Krone', 
                'currency' => 'Nkr', 
                'currency_code' => 'nok'  
            ], //Norway
            [   
                'country_code' => 'PL', 
                'currency_name' => 'Zloty', 
                'currency' => 'zł', 
                'currency_code' => 'pln'  
            ], //Poland
            [   
                'country_code' => 'PT', 
                'currency_name' => 'Euro', 
                'currency' => '€', 
                'currency_code' => 'eur'  
            ], //Portugal
            [   
                'country_code' => 'RO', 
                'currency_name' => 'Romanian Leu', 
                'currency' => 'ron', 
                'currency_code' => 'ron'  
            ], //Romania
            [   
                'country_code' => 'SG', 
                'currency_name' => 'Singapore Dollar', 
                'currency' => 'S$', 
                'currency_code' => 'sgd'  
            ], //Singapore
            [   
                'country_code' => 'SK', 
                'currency_name' => 'Euro', 
                'currency' => '€', 
                'currency_code' => 'eur'  
            ], //Slovakia
            [   
                'country_code' => 'SL', 
                'currency_name' => 'Euro', 
                'currency' => '€', 
                'currency_code' => 'eur'  
            ], //Slovenia
            [   
                'country_code' => 'ES', 
                'currency_name' => 'Euro', 
                'currency' => '€', 
                'currency_code' => 'eur'  
            ], //Spain
            [   
                'country_code' => 'SE', 
                'currency_name' => 'Swedish Krona', 
                'currency' => 'Skr', 
                'currency_code' => 'sek'  
            ], //Sweden
            [   
                'country_code' => 'CH', 
                'currency_name' => 'Swiss Franc', 
                'currency' => 'CHF', 
                'currency_code' => 'chf'  
            ], //Switzerland
            [   
                'country_code' => 'GB', 
                'currency_name' => 'Pound Sterling', 
                'currency' => '£', 
                'currency_code' => 'gbp'  
            ], //the United Kingdom
            [
                'country_code' => 'US', 
                'currency_name' => 'US Dollar', 
                'currency' => '$', 
                'currency_code' => 'usd'  
            ] //the United States
        ];



        foreach ($countries as $key => $value) {
            $status = '0';
            $currency_name = null;
            $currency = null;
            $currency_code = null;

            foreach ($stripe_available as $codeKey => $code) {
                if($code['country_code'] == $value->code){
                    $status = '1';
                    $currency_name = $code['currency_name'];
                    $currency = $code['currency'];
                    $currency_code = $code['currency_code'];
                }
            }
            
            Countries::create([
                "name" => $value->name,
                "code" => $value->code,
                "status" => $status, //Stripe Status
                'currency_name' => $currency_name,
                'currency' => $currency,
                'currency_code' => $currency_code
            ]);
        }
    }
}
