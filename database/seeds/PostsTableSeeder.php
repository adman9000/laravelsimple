<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('posts')->insert([
            'title' => "My First Post",
            'body' => "Lorem Ipsum Dipsum",
        ]);
         DB::table('posts')->insert([
            'title' => "My Second Post",
            'body' => "Lorem Ipsum Dipsum",
        ]);
         DB::table('posts')->insert([
            'title' => "My Third Post",
            'body' => "Lorem Ipsum Dipsum",
        ]);
    }
}
