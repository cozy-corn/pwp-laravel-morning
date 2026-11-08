<?php

namespace App\Services;

use App\Models\Tweet;

class TweetServices
{
    /**
     * Handle the incoming request.
     */
    public function getTweets()
    {
        return Tweet::query()->orderBy('created_at', 'DESC')->get();
    }
}