<?php

use Illuminate\Database\Seeder;
use App\generos;
use Illuminate\Database\Eloquent\Model;

class generosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(generos::class, 10)->create();
    
    }
}
