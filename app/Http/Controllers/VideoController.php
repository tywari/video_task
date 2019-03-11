<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserVideos;
use App\Models\VideoInfos;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    public function getVideoSize($userName)
    {
        if (isset($userName)) {
            $videoData = UserVideos::join('video_infos', 'video_infos.video_id', '=', 'user_videos.video_id')
                ->where('user_videos.user_name','=',$userName)
                ->select('video_infos.video_size as video_size')
                ->get()
                ->toArray();
            if ($videoData){
                return $videoData;
            }else
            {
                return response()->json(["code" => 1, "message" => "Invalid user id"]);
            }
            
        } else {
            return response()->json(["code" => 1, "message" => "Invalid user id"]);
        }

    }

    public function getVideoMetaData($videoId)
    {
        if (isset($videoId)) {
            $videoData = VideoInfos::join('user_videos', 'user_videos.video_id', '=', 'video_infos.video_id')
                ->where('video_infos.video_id','=',$videoId)
                ->select('video_infos.video_size as video_size','video_infos.viewer_count as viewers','user_videos.user_name as created_by')
                ->get()
                ->toArray();
            if ($videoData){
                return $videoData;
            }else
            {
                return response()->json(["code" => 1, "message" => "Invalid video id"]);
            }

        } else {
            return response()->json(["code" => 1, "message" => "Invalid video id"]);
        }

    }


    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(),
            [
                'video_size' => 'required|integer',
                'viewer_count' => 'required|integer'
            ],
            [
                'video_size.required' => 'please enter video size',
                'viewer_count.required' => 'please enter viewer counts',
            ]);

        if ($validator->fails()) {

            $data = $validator->getMessageBag()->toArray();

            $message = $validator->errors()->first();

            return response()->json(["code" => 1, "message" => $message, "data" => $data]);

        }else{
            $update = VideoInfos::where("video_id", $id)->update([
                "video_size" => $request->video_size,
                "viewer_count" => $request->viewer_count,
            ]);
            if (!$update)
                return response()->json(["code" => 1,"message" => "Request Failed"]);

            return response()->json(["code" => 0,"message" => "Request Success"]);
        }

    }
}
