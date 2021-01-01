<div>
    @if(!$consentGiven)
        <x-cookie-consent::consent-modal />
        @if(config('cookie-consent.show_cookie_policy'))
            <x-cookie-consent::cookie-policy-modal />
        @endif
        @if((config('cookie-consent.show_privacy_policy')))
            <x-cookie-consent::privacy-modal />
        @endif
    @endif
</div>


