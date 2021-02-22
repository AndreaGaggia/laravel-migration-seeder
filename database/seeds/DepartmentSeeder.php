<?php

use App\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $depts = config('dept');
        foreach ($depts as $dept) {
            $newDept = new Department();
            $newDept->name = $dept['name'];
            $newDept->address = $dept['address'];
            $newDept->employees = $dept['employees'];
            $newDept->open_since = $dept['open_since'];
            $newDept->save();
        }
    }
}
