<?php

use Illuminate\Database\Seeder;

class LicenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Licencia:: class, 20)->create();
    }
}
