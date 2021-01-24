<?php

use Illuminate\Database\Seeder;

// use App\Article;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conversations')->insert([
            'user_id' => 1,
            'title' => Str::random(),
            'body' => Str::random(),
            'best_reply_id' => 1
        ]);

        DB::table('replies')->insert([
            'id' => 1,
            'user_id' => 1,
            'conversation_id' => 1
        ]);
    }
}
