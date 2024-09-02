<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;

class ShowStory
{
    use AsAction;

    public function handle($id)
    {
        // ...
    }

    public function asController(Story $story)
    {
        dd($story);
    }
}
