<?php

namespace Database\Factories;

use App\Models\Tweet;
use Illuminate\Database\Eloquent\Factories\Factory;


class TweetFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => 1,
            'content' => $this->faker->realText(100),
        ];
    }
}
