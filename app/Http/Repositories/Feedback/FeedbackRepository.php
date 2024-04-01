<?php

namespace App\Http\Repositories\Feedback;

use App\Models\FeedBack;
use App\Traits\CommonTrait;

class FeedbackRepository implements FeedbackInterface
{
    use CommonTrait;

    public function index()
    {
        try {
            $data = FeedBack::with('users')->latest('created_at')->get();
            return $this->sendSuccess("Feedbacks fetched successfully",$data);
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), false);
        }
    }

    public function store($request)
    {
        try {
            $data = FeedBack::create($request);
            return $this->sendSuccess("Feedbacks fetched successfully",$data);
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), false);
        }
    }

    public function show($id)
    {
        try {
            $data = Feedback::where('id',$id)->with('users','comments.user')->get();
            if (count($data) == 0){
                return $this->sendSuccess("No feedback found",null);
            }
            return $this->sendSuccess("Feedbacks fetched successfully",$data[0]);
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), false);
        }
    }
}
