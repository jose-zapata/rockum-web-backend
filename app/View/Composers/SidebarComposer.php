<?php

namespace App\View\Composers;

use App\Models\Report;
use App\Models\Review;
use App\Models\Eternal;
use App\Models\Ondemand;
use App\Models\Interview;
use Illuminate\View\View;

class SidebarComposer
{
    public function compose(View $view)
    {
        $view->with('stories', Report::orderBy('id', 'desc')->take(3)->get())
            ->with('interviews', Interview::orderBy('id', 'desc')->take(3)->get())
            ->with('radioshows', Ondemand::orderBy('id', 'desc')->take(3)->get())
            ->with('reviews', Review::orderBy('id', 'desc')->take(3)->get())
            ->with('eternal', Eternal::orderBy('id', 'desc')->take(3)->get());
    }
}
