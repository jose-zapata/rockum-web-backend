<?php

use App\Actions\ShowReport;
use App\Actions\ShowReview;
use App\Actions\ListArchive;
use App\Actions\ListEternal;
use App\Actions\ListReports;
use App\Actions\ListReviews;
use App\Actions\ShowArchive;
use App\Actions\ShowEternal;
use App\Actions\ListOndemand;
use App\Actions\ShowMainPage;
use App\Actions\ShowOndemand;
use App\Actions\ShowInterview;
use App\Actions\ListInterviews;
use Illuminate\Support\Facades\Route;

Route::get('/', ShowMainPage::class);
Route::get('stories', ListReports::class);
Route::get('interviews', ListInterviews::class);
Route::get('reviews', ListReviews::class);
Route::get('eternal', ListEternal::class);
Route::get('radio', ListOndemand::class);
Route::get('spanish', ListArchive::class);
Route::get('interview/{interview}/{slug?}', ShowInterview::class);
Route::get('story/{story}/{slug?}', ShowReport::class);
Route::get('spanish/{noticia}/{slug?}', ShowArchive::class);
Route::get('review/{review}/{slug?}', ShowReview::class);
Route::get('eternal/{eternal}/{slug?}', ShowEternal::class);
Route::get('radio/{ondemand}/{slug?}', ShowOndemand::class);
