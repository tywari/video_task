<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }


    /* @test */
    public function testGetVideoSizeHttpStatus()
    {
        $response =  $this->call('get','/v1/user-videos/user1');
        $response->assertStatus(200);
    }
    
    /* @test */

    public function testGetVideoSizeDataType()
    {
        $response =  $this->call('get','/v1/user-videos/user1');
        $res = json_decode($response->getContent(), true);

        $video_size = (int)$res['video_size'];
        $this->assertEquals('integer', gettype($video_size));

    }

    /* @test */
    public function testGetVideoMetaDataHttpStatus()
    {
        $response =  $this->call('get','/v1/video-info/video1');
        $response->assertStatus(200);
    }

    /* @test */
    public function testGetVideoMetaDataVideoSizeDataType()
    {
        $response =  $this->call('get','/v1/video-info/video1');
        $res = json_decode($response->getContent(), true);

        $video_size = (int)$res['video_size'];
        $this->assertEquals('integer', gettype($video_size));
    }

    /* @test */
    public function testGetVideoMetaDataViewersType()
    {
        $response =  $this->call('get','/v1/video-info/video1');
        $res = json_decode($response->getContent(), true);

        $viewers = (int)$res['viewers'];
        $this->assertEquals('integer', gettype($viewers));
    }

    /* @test */
    public function testGetVideoMetaDataCreatedByDataType()
    {
        $response =  $this->call('get','/v1/video-info/video1');
        $res = json_decode($response->getContent(), true);

        $created_by = (int)$res['created_by'];
        $this->assertEquals('string', gettype($created_by));
    }

    /* @test */
    public function testUpdateHttpsStatus()
    {
        $data = [
            "video_size" => 2342,
	        "viewer_count" => 23123
        ];
        $response =  $this->call('patch','/v1/users/video1',$data);
        $response->assertStatus(200);
    }
}
