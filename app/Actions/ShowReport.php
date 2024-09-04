<?php

namespace App\Actions;

use App\Models\Report;
use Lorisleiva\Actions\Concerns\AsAction;

class ShowReport
{
    use AsAction;

    public function handle($id)
    {
        // ...
    }

    public function asController(Report $story)
    {
        $more_rockum = Report::orderBy('id', 'desc')->take(6)->get();
        return view('story', compact('story', 'more_rockum'));
    }
}
