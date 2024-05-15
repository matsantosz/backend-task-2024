<?php

namespace App\Domain\User\Authentication\Http\Controllers;

use App\Domain\User\Authentication\Http\Requests\LoginRequest;
use App\Domain\User\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class LoginController
{
    public function __invoke(LoginRequest $request): Response
    {
        $request->validated();

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'credentials' => 'The provided credentials are incorrect.',
            ]);
        }

        $token = $user->createToken($request->email)->plainTextToken;

        return response()->json([
            'message' => 'Welcome back! Use the following Bearer Token for authentication.',
            'bearer_token' => $token,
        ]);
    }
}
