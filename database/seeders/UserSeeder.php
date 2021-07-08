<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array(
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('admin'),
                'role'=>'admin',
            ),
            array(
                'name'=>'Staff',
                'email'=>'staff@gmail.com',
                'password'=>Hash::make('staff'),
                'role'=>'staff',
            ),
            array(
                'name'=>'Aslam',
                'email'=>'aslam@gmail.com',
                'password'=>Hash::make('aslam'),
                'role'=>'staff',
            ),
            array(
                'name'=>'Thamnees',
                'email'=>'thamnees@gmail.com',
                'password'=>Hash::make('thamnees'),
                'role'=>'staff',
            ),
            array(
                'name'=>'suhail',
                'email'=>'suhail@gmail.com',
                'password'=>Hash::make('suhail'),
                'role'=>'staff',
            ),
            array(
                'name'=>'Althaf',
                'email'=>'althaf@gmail.com',
                'password'=>Hash::make('althaf'),
                'role'=>'staff',
            ),
        );

        DB::table('users')->insert($data);
    }
}
