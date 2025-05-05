<?php
namespace App\Http\Controllers\Assistant;

use App\Http\Controllers\Controller;

class AssistantDashboardController extends Controller
{
    public function index()
    {
        return view('assistant.dashboard'); // cré cette vue
    }
}
