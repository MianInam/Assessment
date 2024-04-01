<?php

namespace App\Http\Repositories\Comment;


use App\Models\Comment;
use App\Traits\CommonTrait;
use Illuminate\Support\Facades\Auth;

class CommentRepository implements CommentInterface
{
    use CommonTrait;
    public function store($request)
    {
        try {
            $user_id = Auth::id();
            $request['user_id'] = $user_id;
            $comment = Comment::create($request);
            return $this->sendSuccess('Comment created',$comment);
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), false);
        }
    }
}
