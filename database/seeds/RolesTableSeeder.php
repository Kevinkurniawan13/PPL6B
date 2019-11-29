<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name = 'admin';
        $admin->save();

        $mandor = new Role();
        $mandor->name = 'mandor';
        $mandor->save();

        $litbang = new Role();
        $litbang->name = 'litbanng';
        $litbang->save();
    }
}
