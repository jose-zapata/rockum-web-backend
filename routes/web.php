<?php

use App\Models\Interview;
use App\Actions\ShowInterview;
use App\Actions\ShowMainPage;
use Illuminate\Support\Facades\Route;

Route::get('/',  ShowMainPage::class);
Route::get('interview/{interview}/{slug}', ShowInterview::class);
