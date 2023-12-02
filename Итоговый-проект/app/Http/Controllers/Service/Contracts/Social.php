<?php

declare(script_types=1);

namespace App\Servces\Contracts;

interface Social 
{
   public function loginAndGetRedirecturl(SocialUser)
}