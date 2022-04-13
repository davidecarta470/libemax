<?php

use App\Stamping;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(EmployeTableSeeder::class);
         $this->call(StampingTableSeeder::class);
    }
}
