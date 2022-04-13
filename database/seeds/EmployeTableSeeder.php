<?php

use App\Employe;
use Illuminate\Database\Seeder;

class EmployeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(config('dipendenti') as $employe){
            $newEmploy = new Employe();
            $newEmploy->nome = $employe['nome'];
            $newEmploy->cognome = $employe['cognome'];
            $newEmploy->save();
        }
    }
}
