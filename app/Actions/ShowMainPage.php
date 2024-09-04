<?php

namespace App\Actions;

use App\Models\Report;
use App\Models\Review;
use App\Models\Eternal;
use App\Models\Ondemand;
use App\Models\Interview;
use Lorisleiva\Actions\Concerns\AsAction;

class ShowMainPage
{
    use AsAction;

    public function handle()
    {
        $interviews = Interview::orderBy('id', 'desc')
            ->take(9)
            ->get();
        $reports = Report::orderBy('id', 'desc')
            ->take(20)
            ->get();
        $radioshows = Ondemand::orderBy('id', 'desc')
            ->take(20)
            ->get();
        $eternal = Eternal::orderBy('id', 'desc')
            ->take(8)
            ->get();
        $reviews = Review::orderBy('id', 'desc')
            ->take(3)
            ->get();

        return view('welcome', compact('interviews', 'reports', 'radioshows', 'eternal', 'reviews'));
    }

}
