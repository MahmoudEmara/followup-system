<?php

use Illuminate\Database\Seeder;
use App\FollowupCategory;
class FollowupCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FollowupCategory::create([
            "category_name" => "Complain"
        ]);

        FollowupCategory::create([
            "category_name" => "Request"
        ]);
    }
}
