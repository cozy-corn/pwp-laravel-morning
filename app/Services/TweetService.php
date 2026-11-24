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
    public function checkOwnTweet(int $userId, int $tweetId): bool
    {
        $tweet = Tweet::query()->where('id', $tweetId)->first();
        if (!$tweet) {
            return false;
        }

        return $tweet->user_id === $userId;
    }
}