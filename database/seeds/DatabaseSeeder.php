<?php

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
        $this->call(UsuarioSeeder::class);
        $this->call(AdministradorSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(LicenciaSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(OfertaSeeder::class);
        $this->call(PagoSeeder::class);
        $this->call(ProductoSeeder::class);
    }
}
