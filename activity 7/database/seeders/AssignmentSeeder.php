<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\assignment;

class AssignmentSeeder extends Seeder
{
    public $assignmentData=[];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i <10000; $i++) {
            $assignmentData[] = [
                'assignmentname' => Str::random(10),
                'submissionstatus' => $faker->boolean,
            ];
        }

        foreach ($assignmentData as $assignment) {
            assignment::create($assignment);
        }
    }
}
