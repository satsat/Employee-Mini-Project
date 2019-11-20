<?php

use Illuminate\Database\Seeder;
use App\Salary;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Salary::class, 20)->create(); 
    }
}
