<?php

namespace App\Actions;

use App\Models\Interview;
use Lorisleiva\Actions\Concerns\AsAction;

class ShowInterview
{
    use AsAction;

    public function handle($id)
    {
        // ...
    }

    public function asController(Interview $interview)
    {
        $more_rockum = Interview::orderBy('id', 'desc')->whereNot('id', $interview->id)->take(6)->get();
        return view('interview', compact('interview', 'more_rockum'));
    }
}
