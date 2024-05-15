<?php

namespace App\Domain\User\Authentication\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogoutController
{
    public function __invoke(Request $request): Response
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'You have been logged out!',
        ]);
    }
}
