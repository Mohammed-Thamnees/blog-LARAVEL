<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
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
                'name' => 'Object Oriented Programming',
            ),

            array(
                'name' => 'Programming',
            )
        );

        DB::table('categories')->insert($data);
    }
}
