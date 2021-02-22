<?php

use App\Employee;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        \Bezhanov\Faker\ProviderCollectionHelper::addAllProvidersTo($faker);

        for ($i = 0; $i < 100; $i++) {
            $newEmployee = new Employee();
            $newEmployee->name = $faker->name();
            $newEmployee->lastname = $faker->lastName();
            $newEmployee->age = $faker->numberBetween(18, 75);
            $newEmployee->role = $faker->jobTitle();
            $newEmployee->education = $faker->educationalAttainment;
            $newEmployee->gender = $faker->gender;
            $newEmployee->hiring_date = $faker->dateTime();
            $newEmployee->save();
        }
    }
}
