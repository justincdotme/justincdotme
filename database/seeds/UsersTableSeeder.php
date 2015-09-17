<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'Justin Christenson',
            'email'     => 'info@justinc.me',
            'password'  => Hash::make(env('DEFAULT_ADMIN_PASS'))
        ]);
    }
}
