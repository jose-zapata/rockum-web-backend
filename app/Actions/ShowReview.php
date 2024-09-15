<?php

namespace App\Actions;

use App\Models\Review;
use Lorisleiva\Actions\Concerns\AsAction;

class ShowReview
{
    use AsAction;

    public function handle($id)
    {
        // ...
    }

    public function asController(Review $review)
    {
        $more_rockum = Review::orderBy('id', 'desc')->take(6)->get();
        return view('review', compact('review', 'more_rockum'));
    }
}
