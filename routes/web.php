<?php

use App\Models\Interview;
use App\Actions\ShowReport;
use App\Actions\ShowMainPage;
use App\Actions\ShowInterview;
use Illuminate\Support\Facades\Route;

Route::get('/', ShowMainPage::class);
Route::get('interview/{interview}/{slug?}', ShowInterview::class);
Route::get('story/{story}/{slug?}', ShowReport::class);
