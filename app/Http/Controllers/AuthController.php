<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\ActivationService;

class AuthController extends Controller
{
    protected $activationService;

    public function __construct(ActivationService $activationService)
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
        $this->activationService = $activationService;
    }

    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $user = $this->create($request->all());

        $this->activationService->sendActivationMail($user);

        return redirect('/login')->with('status', 'We sent you an activation code. Check your email.');
    }
    public function postRegister(Request $request)
    {
        $validator = $this->registrar->validator($request->all());
        if ($validator->fails())
        {
            $this->throwValidationException(
                $request, $validator
            );
        }
        $this->auth->login($this->registrar->create($request->all()));
        // Now you can redirect!
        return redirect('/login');
    }


}
