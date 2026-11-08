<?php

namespace App\Services;

use App\Models\Tweet;

class TweetService
{
    /**
     * Handle the incoming request.
     */
    public function getTweets()
    {
        return Tweet::query()->orderBy('created_at', 'DESC')->get();
    }
}