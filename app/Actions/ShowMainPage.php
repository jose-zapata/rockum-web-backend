<?php

namespace App\Actions;

use App\Models\Report;
use App\Models\Interview;
use Lorisleiva\Actions\Concerns\AsAction;

class ShowMainPage
{
    use AsAction;

    public function handle()
    {
        $mainReports = Report::orderBy('id', 'desc')
            ->take(6)
            ->get();
        $interviews = Interview::orderBy('id', 'desc')
            ->take(12)
            ->get();
        $reports = Report::orderBy('id', 'desc')
            ->skip(6)
            ->take(12)
            ->get();
        return view('welcome', compact('mainReports', 'interviews', 'reports'));
    }

}
