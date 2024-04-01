<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\FeedBack;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [
            "Example comment one.",
            "Example comment two.",
            "Example comment three.",
            "Example comment four.",
            "Example comment five.",
            "Example comment six.",
            "Example comment seven.",
            "Example comment eight.",
            "Example comment nine.",
            "Example comment ten.",
            "Example comment eleven.",
            "Example comment twelve.",
            "Example comment thirteen.",
            "Example comment fourteen.",
            "Example comment fifteen.",
            "Example comment sixteen.",
            "Example comment seventeen.",
            "Example comment eighteen.",
            "Example comment nineteen.",
            "Example comment twenty."
        ];

        $feedbacks = FeedBack::with('users')->get()->toArray();
        foreach ($comments as $comment) {
            $feedback = $feedbacks[array_rand($feedbacks)];
            Comment::create([
                "content"=>$comment,
                "user_id"=>$feedback['users']['id'],
                "feedback_id"=>$feedback['id'],
            ]);
        }
    }
}
