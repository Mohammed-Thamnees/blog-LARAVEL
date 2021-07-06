<?php
namespace Database\Seeders;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
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
                'heading'=>'this is a heading',
                'content'=>'this is a content posted by mohammed thamnees p',
                'user_id'=>1,
                'category_id'=>1,
            )
        );

        DB::table('articles')->insert($data);
    }
}
