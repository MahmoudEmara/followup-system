<?php

use Illuminate\Database\Seeder;
use app\User;
use App\FollowupCategory;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(FollowupCategorySeeder::class);
    }
}
