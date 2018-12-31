<?php

use Illuminate\Database\Seeder;

class ReplyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Reply::class, 50)->create()->each(function ($reply) {
            return $reply->like()->save(factory(\App\Models\Like::class)->make());
        });
    }
}
