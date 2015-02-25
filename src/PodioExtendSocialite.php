<?php
namespace SocialiteProviders\Podio;

use SocialiteProviders\Manager\SocialiteWasCalled;

class PodioExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'podio', __NAMESPACE__.'\Provider'
        );
    }
}
