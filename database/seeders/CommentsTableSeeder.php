<?php
namespace Database\Seeders;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
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
                'content'=>'This a good comment',
                'article_id'=>1,
                'user_id'=>1,
            )
        );

        DB::table('comments')->insert($data);
    }
}
