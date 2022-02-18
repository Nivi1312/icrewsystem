<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\mark;

class Markseeder extends Seeder
{
    public $markData=[];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();
        for($i=0;$i<10000;$i++){
            $markData[]=[
                'mark1'=>$faker->randomDigitNotZero(2),
                'mark2'=>$faker->randomDigitNotZero(2),
                'mark3'=>$faker->randomDigitNotZero(2),

            ];
        }
        foreach($markData as $mark){
            Mark::create($mark);
        }
        //
    }
}
