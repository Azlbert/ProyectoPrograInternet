<?php

use Illuminate\Database\Seeder;

class cancionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cancion = factory(App\Song::class, 100)->create();

    }
}
