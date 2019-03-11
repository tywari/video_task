<?php
/**
 * Created by PhpStorm.
 * User: tywari
 * Date: 2019-03-11
 * Time: 16:11
 */

use Illuminate\Database\Seeder;

class UserVideosSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['user_name' => 'user1', 'video_id' => 'video1', 'video_name' => 'Test Video 1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['user_name' => 'user2', 'video_id' => 'video2', 'video_name' => 'Test Video 2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['user_name' => 'user3', 'video_id' => 'video3', 'video_name' => 'Test Video 3', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['user_name' => 'user4', 'video_id' => 'video4', 'video_name' => 'Test Video 4', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['user_name' => 'user5', 'video_id' => 'video5', 'video_name' => 'Test Video 5', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['user_name' => 'user6', 'video_id' => 'video6', 'video_name' => 'Test Video 6', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['user_name' => 'user7', 'video_id' => 'video7', 'video_name' => 'Test Video 7', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ];

        DB::table('user_videos')->insert($data);

    }
}
