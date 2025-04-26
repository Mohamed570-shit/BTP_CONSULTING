<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
{
    $user = auth()->user();

    // Get all unread notifications
    $unread = $user->unreadNotifications;

    // Mark as read and delete them
    foreach ($unread as $notification) {
        $notification->markAsRead();
        $notification->delete();
    }

    // Get all notifications (now only read ones remain, but we deleted unread)
    $notifications = $user->notifications()->latest()->get();

    return view('admin.notifications', compact('notifications'));
}
}