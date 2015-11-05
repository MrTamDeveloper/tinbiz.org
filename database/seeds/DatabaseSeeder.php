<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Super Admin',
            'username' => 'admin',
            'user_type' => 0,
            'active' => 1,
            'email' => Config::get('myconfig.MAIL_INFO'),
            'password' => bcrypt('admin'),
        ]);

        Model::reguard();
    }
}
