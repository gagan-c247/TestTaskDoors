<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\LookUp;

class LookUpSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        LookUp::truncate();

        LookUp::create([
            'resin_type'        => 'HIPS/ABS/ASA', 
            'filler_type'       => 'No Filler', 
            'filler_percentage' => 'Neat No filler', 
            'color'             => 'Natural', 
            'character_a'       => 'V-0 Flame Rating', 
            'character_b'       => 'V-0 Flame Rating',
            'character_c'       => 'V-0 Flame Rating',        
            'brand'             => 'No brand'
        ]);
        LookUp::create([
            'resin_type'        => 'PolyPro/PE', 
            'filler_type'       => 'Glass Fiber', 
            'filler_percentage' => '0-9% filled', 
            'color'             => 'General Black ', 
            'character_a'       => 'V-2 Flame Rating', 
            'character_b'       => 'V-2 Flame Rating',
            'character_c'       => 'V-2 Flame Rating',
            'brand'             => 'Taitalic'
        ]);
        LookUp::create([
            'resin_type'        => 'PPO/PPE', 
            'filler_type'       => 'Carbon Fiber', 
            'filler_percentage' => '10%-14% filled', 
            'color'             => 'Clear', 
            'character_a'       => 'High Heat', 
            'character_b'       => 'High Heat',
            'character_c'       => 'High Heat', 
            'brand'             => 'Polylac'
        ]);
        LookUp::create([
            'resin_type'        => 'Nylon 6/6 or 6 or 6/6&6', 
            'filler_type'       => 'Glass & Mineral', 
            'filler_percentage' => '15%-19% filled', 
            'color'             => 'Gerenal Gray', 
            'character_a'       => 'Release Agent', 
            'character_b'       => 'Release Agent',
            'character_c'       => 'Release Agent', 
            'brand'             => 'Magnum'
            
        ]);
        LookUp::create([
            'resin_type'        => 'Nylon 6/12 & others', 
            'filler_type'       => 'PTFE', 
            'filler_percentage' => '20%-24%  filled', 
            'color'             => 'General White', 
            'character_a'       => 'Weatherable Agent', 
            'character_b'       => 'Weatherable Agent',
            'character_c'       => 'Weatherable Agent',
            'brand'             => 'LG ABS'
        ]);
        LookUp::create([
            'resin_type'        => 'PBT/Blends', 
            'filler_type'       => 'Glass Bead', 
            'filler_percentage' => '25%-29% filled', 
            'color'             => 'Beige', 
            'character_a'       => 'High Impact', 
            'character_b'       => 'High Impact',
            'character_c'       => 'High Impact',
            'brand'             => 'Toyolac'
        ]);
        LookUp::create([
            'resin_type'        => 'PMMA/PC/Blends', 
            'filler_type'       => 'Milled Glass Fiber', 
            'filler_percentage' => '30%-34% filled', 
            'color'             => 'Blue', 
            'character_a'       => 'Medium Impact ', 
            'character_b'       => 'Medium Impact ',
            'character_c'       => 'Medium Impact ',
            'brand'             => 'Novodur'
        ]);
        LookUp::create([
            'resin_type'        => 'Acetal', 
            'filler_type'       => 'Aramid Fiber', 
            'filler_percentage' => '35%-39% filled', 
            'color'             => 'Green', 
            'character_a'       => 'High Flow', 
            'character_b'       => 'High Flow',
            'character_c'       => 'High Flow',
            'brand'             => 'Exylac'
        ]);
        LookUp::create([
            'resin_type'        => 'PEEK/PEI/PPS', 
            'filler_type'       => 'Mineral', 
            'filler_percentage' => '40%-44% filled', 
            'color'             => 'Red', 
            'character_a'       => 'Medium Flow', 
            'character_b'       => 'Medium Flow',
            'character_c'       => 'Medium Flow',
            'brand'             => 'Terluran' 
        ]);
        LookUp::create([
            'resin_type'        => 'TPV/TPU', 
            'filler_type'       => 'custom combination of above fillers', 
            'filler_percentage' => '45%-50% filled', 
            'color'             => 'Custom Color', 
            'character_a'       => 'FDA Compliant', 
            'character_b'       => 'FDA Compliant',
            'character_c'       => 'FDA Compliant',
            'brand'             => 'Techno'
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Thermocomp'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Anoflex'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Guardian'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Kingfa Abs'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'LubriOne'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Edgetek'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Denka Abs'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Luran'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'RTP ABS'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Celcon/Ticona'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Elix'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Stylac'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Exxonmobil PP'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Flint Hill PP'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Wintec'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'El-Pro'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Cosmoplene'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Taiporo'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Pro-fax'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Maxxam'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Titanpro'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Hostacom'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Yungsox'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Polyfill'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Polystyrol/Styrol'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Ineos HIPS'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Idemitsu HIPS'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Polystar'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Idemitsu GPPS'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Denka GPPS'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Exxonmobil HDPE'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Titanzex'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Titanlene'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Dowlex'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Grilamid'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Hefei PA10L'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Ultramid'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Grilon'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Leona'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Kingfa PA'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'RTP PA'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Durethan'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Zytel'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Bergamid'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Hefei PA66'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Akulon'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Vydyne'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Celanex'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Valox'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Novaduran'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Crastin'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Xenoy'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Gromat'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Perloy'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Makrolon'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Iupilon'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Lexan'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Lubriloy'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Cycoloy'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Panlite'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Multilon'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Novalloy'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Stat-kon'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Infino'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Stat-loy'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Bayblend'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Lupoy'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Wonderloy'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Ultem'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Vypet'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Easter'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Deplet'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Plexiglas'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Tritan'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Iupital'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Lubricom'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Tenac'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Delrin'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Duracon'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Hostaform'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Xyron'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Noryl'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Kingfa PPE'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'DIC PPS'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Ryton'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Fortron'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Xytron'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Versaflex'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Santoprene'    
        ]);
        LookUp::create([
            'resin_type'        => null, 
            'filler_type'       => null, 
            'filler_percentage' => null, 
            'color'             => null, 
            'character_a'       => null, 
            'character_b'       => null,
            'character_c'       => null,
            'brand'             => 'Desmopan'
        ]);
    }
}
