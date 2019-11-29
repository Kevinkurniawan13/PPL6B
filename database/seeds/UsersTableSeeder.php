<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('name', 'admin')->first();
        $mandor = Role::where('name', 'mandor')->first();
        $litbang = Role::where('name', 'litbang')->first();

        // $admin = new User();
        // $admin->name = 'admin';
        // $admin->email = 'admin@gmail.com';
        // $admin->password = bcrypt('rahasia');
        // $admin->save();
        // $admin->roles()->attach($admin);

        $mandor = new User();
        $mandor->name = 'mandor';
        $mandor->email = ' mandor@gmail.com';
        $mandor->password = bcrypt('rahasia');
        $mandor->save();
        $mandor->roles()->attach($mandor);

        // $litbang = new User();
        // $litbang->name = 'litbang';
        // $litbang->email = 'litbang@gmail.com';
        // $litbang->password = bcrypt('rahasia');
        // $litbang->save();
        // $litbang->roles()->attach($litbang);
    }
}
