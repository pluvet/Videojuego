<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();

        $user->name = "maria";
        $user->email = "local@example.com";
        $user->password = "dsgfs";

        $user->save();

        $user1 = new User();

        $user1->name = "felipe";
        $user1->email = "local1@example.com";
        $user1->password = "dsgfs";

        $user1->save();

        $user2 = new User();

        $user2->name = "mjulio";
        $user2->email = "local2@example.com";
        $user2->password = "dsgfs";

        $user2->save();
    }
}
