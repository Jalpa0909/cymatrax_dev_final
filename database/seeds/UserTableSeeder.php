<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert(["email"=>"admin@cymatrax.com","password"=>Hash::make(12345678),"user"=>1,"name"=>"Master Admin","is_admin"=>1]);
    }
}
