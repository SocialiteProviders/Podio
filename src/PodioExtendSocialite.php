<?php
namespace SocialiteProviders\Podio;

use SocialiteProviders\Manager\SocialiteWasCalled;

class PodioExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('podio', __NAMESPACE__.'\Provider');
    }
}
