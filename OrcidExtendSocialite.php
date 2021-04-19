<?php

namespace SocialiteProviders\PublicOrcid;

use SocialiteProviders\Manager\SocialiteWasCalled;

class OrcidExtendSocialite
{
    /**
     * Register the OrcidPublicProvider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('PublicOrcid', OrcidPublicProvider::class);
    }
}
