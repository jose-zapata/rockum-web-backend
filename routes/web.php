<?php

use App\Actions\ShowReport;
use App\Actions\ShowReview;
use App\Actions\ShowEternal;
use App\Actions\ShowMainPage;
use App\Actions\ShowInterview;
use Illuminate\Support\Facades\Route;

Route::get('/', ShowMainPage::class);
Route::get('interview/{interview}/{slug?}', ShowInterview::class);
Route::get('story/{story}/{slug?}', ShowReport::class);
Route::get('review/{review}/{slug?}', ShowReview::class);
Route::get('eternal/{eternal}/{slug?}', ShowEternal::class);
