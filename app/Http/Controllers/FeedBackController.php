<?php

namespace App\Http\Controllers;

use App\Http\Repositories\Feedback\FeedbackInterface;
use App\Http\Requests\AddFeedbackRequest;
use App\Models\FeedBack;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    protected $feedbackInterface;

    public function __construct(FeedbackInterface $feedbackInterface)
    {
        $this->feedbackInterface=$feedbackInterface;
    }

    public function index()
    {
        return $this->feedbackInterface->index();
    }

    public function store(AddFeedbackRequest $request)
    {
        return $this->feedbackInterface->store($request->validated());

    }

    public function show($id)
    {
        return $this->feedbackInterface->show($id);
    }
}
