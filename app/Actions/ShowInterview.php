<?php

namespace App\Actions;

use App\Models\Interview;
use Lorisleiva\Actions\Concerns\AsAction;

class ShowInterview
{
    use AsAction;

    public function handle(Interview $interview, string $slug)
    {
        // ...
    }
}
