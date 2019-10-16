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
        DB::table('posts')->insert([
            
        [
            'title' => '最初の記事',
            'body' => '最初の記事のテキストです。',
            'created_at' => '2019-07-22 14:28:19',
            'updated_at' => '2019-05-22 14:28:19'
        ],
        [
            'title' => '2番目の記事',
            'body' => '2番目の記事のテキストです。',
            'created_at' => '2019-07-22 14:28:19',
            'updated_at' => '2019-07-22 14:28:19'
        ]


        ]);


    }
}
