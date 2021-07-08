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
                'name' => 'Classes in php',
            ),
            array(
                'name' => 'Programming',
            ),
            array(
                'name' => 'Java',
            ),
            array(
                'name' => 'Python',
            ),
            array(
                'name' => 'PHP',
            ),
        );

        DB::table('categories')->insert($data);
    }
}
