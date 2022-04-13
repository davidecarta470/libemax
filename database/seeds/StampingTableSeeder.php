<?php

use App\Stamping;
use Illuminate\Database\Seeder;

class StampingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(config('bedgiature') as $stamping){
            $newStamping = new Stamping();
            $newStamping->dipendente_id = $stamping['dipendente_id'];
            $newStamping->data = $stamping['data'];
            $newStamping->ora = $stamping['ora'];
            $newStamping->verso = $stamping['verso'];
            $newStamping->turno = $stamping['turno'];
            $newStamping->save();
        }
    }
}
