<?php

namespace Database\Seeders;

use App\Models\FeedBack;
use App\Models\User;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
            "Title first",
            "Title second",
            "Title third",
            "Title fourth",
            "Title fifth",
            "Title sixth",
            "Title seventh",
            "Title eighth",
            "Title ninth",
            "Title tenth"
        ];
        $descriptions = [
            "Description for the first title.",
            "Description for the second title.",
            "Description for the third title.",
            "Description for the fourth title.",
            "Description for the fifth title.",
            "Description for the sixth title.",
            "Description for the seventh title.",
            "Description for the eighth title.",
            "Description for the ninth title.",
            "Description for the tenth title."
        ];
        $categories = [
            "Bug Report",
            "Feature Request",
            "Improvement"
        ];
        $users = User::all()->toArray();
        foreach (range(0, 9) as $i) {
            FeedBack::create([
                "title"=>$titles[$i],
                "user_id"=>$users[array_rand($users)]['id'],
                "description"=>$descriptions[$i],
                "category"=>$categories[array_rand($categories)],
            ]);
        }
    }
}
