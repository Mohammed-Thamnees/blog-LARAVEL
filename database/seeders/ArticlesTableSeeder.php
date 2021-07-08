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
                'heading'=>'About Classes in php',
                'content'=>'PHP 5 is very very flexible in accessing member variables and member functions. These access methods maybe look unusual and unnecessary at first glance; but they are very useful sometimes; specially when you work 
                            with SimpleXML classes and objects. I have posted a similar comment in SimpleXML function reference section, but this one is more comprehensive. ',
                'user_id'=>2,
                'category_id'=>1,
            ),
            array(
                'heading'=>'About Programming',
                'content'=>'We all have heard about Computer Programming gaining a lot of popularity in the past 3 decades. So many students these days want to opt for a Computer Science stream in order to get a job at their dream tech company - 
                            Google, Facebook, Microsoft, Apple, and whatnot. It is widely used for developing Java applications in laptops, data centers, game consoles, scientific supercomputers, cell phones, etc.
                            Java Platform is a collection of programs that help programmers to develop and run Java programming applications efficiently. It includes an execution engine, a compiler, and a set of libraries in it. 
                            It is a set of computer software and specifications. James Gosling developed the Java platform at Sun Microsystems, and the Oracle Corporation later acquired it.',
                'user_id'=>2,
                'category_id'=>2,
            ),
            array(
                'heading'=>'About Java',
                'content'=>'Java is a general-purpose, class-based, object-oriented programming language designed for having lesser implementation dependencies. It is a computing platform for application development. 
                            Java is fast, secure, and reliable, therefore. It is widely used for developing Java applications in laptops, data centers, game consoles, scientific supercomputers, cell phones, etc.
                            Java Platform is a collection of programs that help programmers to develop and run Java programming applications efficiently. It includes an execution engine, a compiler, and a set of libraries in it. 
                            It is a set of computer software and specifications. James Gosling developed the Java platform at Sun Microsystems, and the Oracle Corporation later acquired it.',
                'user_id'=>2,
                'category_id'=>3,
            ),
            array(
                'heading'=>'About Python',
                'content'=>'One of the amazing features of Python is the fact that it is actually one person’s work. Usually, new programming languages are developed and published by large companies employing lots of professionals, 
                and due to copyright rules, it is very hard to name any of the people involved in the project. Python is an exception.',
                'user_id'=>2,
                'category_id'=>4,
            ),
            array(
                'heading'=>'About PHP',
                'content'=>'What distinguishes PHP from something like client-side JavaScript is that the code is executed on the server, generating HTML which is then sent to the client. The client would receive the results of running that script,
                 but would not know what the underlying code was. You can even configure your web server to process all your HTML files with PHP, and then theres really no way that users can tell what you have up your sleeve. ',
                'user_id'=>2,
                'category_id'=>5,
            ),
        );

        DB::table('articles')->insert($data);
    }
}
