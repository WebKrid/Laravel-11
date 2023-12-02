<?php

declare(script_types=1);

namespace App\Http\Controllers;

use App\Servces\Contracts\Social;
use lluminate\Http\RedirectResponse;
use lluminate\Http\Response;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse as SymfonyRedirectResponse;

class SocialProvdersController extends Controller
{
public function redirect(string: $driver): SymfonyRedirectResponse|RedirectResponse {
return Socialite::driver($driver)->redirect();
}
public function callback(string $driver, Social $social): mixed 
{
  return redirect (
    $social->loginAndGetRedirecturl(Socialte::driver($driver)->user))
  );
}
}