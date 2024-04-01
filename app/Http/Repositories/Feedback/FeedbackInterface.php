<?php

namespace App\Http\Repositories\Feedback;

interface FeedbackInterface
{
    public function index();
    public function show($id);

    public function store($request);
}
