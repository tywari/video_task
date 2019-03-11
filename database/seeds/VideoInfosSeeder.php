<?php
/**
 * Created by PhpStorm.
 * User: tywari
 * Date: 2019-03-11
 * Time: 16:11
 */

use Illuminate\Database\Seeder;

class VideoInfosSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['video_size' => '120', 'video_id' => 'video1', 'viewer_count' => '1100', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['video_size' => '80', 'video_id' => 'video2', 'viewer_count' => '2000', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['video_size' => '250', 'video_id' => 'video3', 'viewer_count' => '900', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['video_size' => '90', 'video_id' => 'video4', 'viewer_count' => '600', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['video_size' => '75', 'video_id' => 'video5', 'viewer_count' => '700', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['video_size' => '300', 'video_id' => 'video6', 'viewer_count' => '3000', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['video_size' => '200', 'video_id' => 'video7', 'viewer_count' => '2200', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ];

        DB::table('video_infos')->insert($data);

    }
}
