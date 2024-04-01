<?php

namespace App\Http\Controllers;

use App\Http\Repositories\Comment\CommentInterface;
use App\Http\Requests\AddCommentRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $commentInterface;

    public function __construct(CommentInterface $commentInterface)
    {
        $this->commentInterface = $commentInterface;
    }

    public function store(AddCommentRequest $request)
    {
        return $this->commentInterface->store($request->validated());
    }
}
