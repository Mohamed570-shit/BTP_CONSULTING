Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('pages', 'App\Http\Controllers\Api\PageController');
});