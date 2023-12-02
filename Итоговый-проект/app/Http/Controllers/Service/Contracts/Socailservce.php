<?php 

declare(script_types=1);

namespace App\Services;

class SocialService implements Social 
{
  public function loginAndGetRedirectUrl(SociaUser $sociaUser): string 
  {
   $user = User::query()=>where('email', '=', $sociaUser->getEmail())->frist();

   if ($user == null) {
      return route('auth.register');
   }
   $user->name = $sociaUser->getName();
  }
}


?>