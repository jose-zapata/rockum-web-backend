<?php

namespace App\Actions;

use App\Models\Eternal;
use Lorisleiva\Actions\Concerns\AsAction;

class ShowEternal
{
    use AsAction;

    public function handle($id)
    {
        // ...
    }

    public function asController(Eternal $eternal)
    {
        $more_rockum = Eternal::orderBy('id', 'desc')->take(6)->get();
        return view('eternal', compact('eternal', 'more_rockum'));
    }
}
