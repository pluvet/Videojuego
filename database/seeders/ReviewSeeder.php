<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $review = new Review();

        $review->videojuego_id = 1;
        $review->customer = "gamestop";
        $review->analysis = "bad game";
        $review->star = 2;

        $review->save();

        $review1 = new Review();

        $review1->videojuego_id = 1;
        $review1->customer = "y2k";
        $review1->analysis = "medium game";
        $review1->star = 5;

        $review1->save();

        $review2 = new Review();

        $review2->videojuego_id = 2;
        $review2->customer = "gamestop";
        $review2->analysis = "bad game";
        $review2->star = 3;

        $review2->save();

    }
}
