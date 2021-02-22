<?php

use App\Company;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $newCompany = new Company();
            $newCompany->name = $faker->company();
            $newCompany->address = $faker->address();
            $newCompany->employees = $faker->numberBetween(10, 2000);
            $newCompany->foundation = $faker->dateTime();
            $newCompany->sector = $faker->bs();
            $newCompany->save();
        }
    }
}
