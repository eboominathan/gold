<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        $users = array(
            array(
                'id' => 1,             
                "first_name" => "Admin",
                "last_name" => "Admin",
                "email" => "superadmin@gold.com",
                "password" => Hash::make('admin@123'),
                "hidden" => "",
                "type" => "superadmin",
                "sale_point_id" => 0,
                "referal_id" => 0,
                "email_sent" => 0,
                "loggedin" => 0,
                "remember_token" => "0ihiuPGhuonekBFvojGR55j1hmILMJ1MMBFyLNQPw3HrQGxE3pRNC3RojNKf",
                "status" => 1                     
                
            ),
            array(
                'id' => 2,
                "first_name" => "Salepoint",
                "last_name" => "User",
                "email" => "salepoint@gold.com",
                "password" => Hash::make('admin@123'),
                "hidden" => "",
                "type" => "salepoint",
                "sale_point_id" => 0,
                "referal_id" => 0,
                "email_sent" => 0,
                "loggedin" => 0,
                "remember_token" => "",
                "status" => 1,
                "created_by" => 1,
                "updated_by" => 1 
            ),
            array(
                'id' => 3,
                "first_name" => "Member",
                "last_name" => "User",
                "email" => "member@gold.com",
                "password" => Hash::make('admin@123'),
                "hidden" => "",
                "type" => "member",
                "sale_point_id" => 0,
                "referal_id" => 0,
                "email_sent" => 0,
                "loggedin" => 0,
                "remember_token" => "",
                "status" => 1,
                "created_by" => 1,
                "updated_by" => 1
                
            ),
        );
        foreach($users as $user){
            User::updateOrCreate($user,['id' => $user['id']]);
        }     
         Schema::enableForeignKeyConstraints();       
    }
}
