<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "name"=>"Inam",
                "email"=>"inam@google.com",
                "password"=>Hash::make("password"),
                "created_at"=>Carbon::now(),
                "updated_at"=>Carbon::now()
            ],
            [
                "name"=>"Arshad",
                "email"=>"arshad@google.com",
                "password"=>Hash::make("password"),
                "created_at"=>Carbon::now(),
                "updated_at"=>Carbon::now()
            ]
        ];
        User::insert($users);
    }
}
