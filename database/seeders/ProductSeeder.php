<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //
        DB::table('products')->insert([

        [
            'Product_Name'          => "Headset",
            'Product_Description'   =>  "RGB LED gaming Headset",
            'Price'                 =>  700,
            'Status'                =>  TRUE
            
        ],

        [
            'Product_Name'          => "LED 24inch",
            'Product_Description'   =>  "LED curve gaming monitor ",
            'Price'                 =>  2500,
            'Status'                =>  TRUE
            
        ],

        [
            'Product_Name'          => "Gaming Keyboard RGB",
            'Product_Description'   =>  "RGB gaming keyboard ",
            'Price'                 =>  1500,
            'Status'                =>  TRUE
            
        ],
    
    
        ]);
    }

}

