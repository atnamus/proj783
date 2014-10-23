<?php

Event::listen('auth.login', function($user) {
            $user->last_login = gmdate("Y-m-d H:i:s");
            $user->save();
            $browser = Agent::browser();
            LoginDetails::create([
                'user_id' => $user->id,
                'device' => Agent::isMobile() ? "mobile" : Agent::isTablet() ? "tablet" : "desktop",
                'platform' => Agent::platform(),
                'browser' => $browser,
                'browser_version' => Agent::version($browser),
                'ip' => Request::getClientIp(true),
                'created_at' => gmdate("Y-m-d H:i:s"),
            ]);
        });