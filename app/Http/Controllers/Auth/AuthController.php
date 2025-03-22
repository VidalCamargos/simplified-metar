<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class AuthController
{
    public function __construct(private User $user)
    {
    }

    public function register(RegisterRequest $request)
    {
        $input = $request->validated();

        if ($input['secret_code'] !== config('services.secret_code.code')) {
            return response()->json(['Erro' => 'O código secreto informado está incorreto!'])
                ->setStatusCode(Response::HTTP_UNAUTHORIZED);
        }

        $user = $this->user->create($input);
    }

    public function login()
    {
    }
}
