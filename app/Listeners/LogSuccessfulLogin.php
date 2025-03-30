<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use App\Models\LoginHistory;
use Illuminate\Support\Facades\Request;

class LogSuccessfulLogin
{
    public function handle(Login $event): void
    {
        LoginHistory::create([
            'user_id'    => $event->user->id,
            'ip_address' => Request::ip(),
            'user_agent' => Request::userAgent(),
            'login_at'   => now(),
        ]);
    }
}
