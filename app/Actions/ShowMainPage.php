<?php

namespace App\Actions;

use App\Models\Interview;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class ShowMainPage
{
    use AsAction;

    public function handle()
    {
        $mainInterviews = Interview::orderBy('id', 'desc')
            ->take(4)
            ->get();
        $interviews = Interview::orderBy('id', 'desc')
            ->skip(4)
            ->take(20)
            ->get();
        return view('welcome', compact('mainInteviews', 'interviews'));
    }

}
