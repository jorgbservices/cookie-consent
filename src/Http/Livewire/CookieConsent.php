<?php

namespace Jorgb\CookieConsent\Http\Livewire;

use Cookie;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use URL;

class CookieConsent extends Component
{
    public $consentGiven;

    public $openModal;
    public $openPrivacyModal = false;
    public $openCookieModal = false;

    public function mount()
    {
        $this->consentGiven = $this->consentGiven();
        $this->openModal = !$this->consentGiven();
    }

    public function toggleCookieModal()
    {
        $this->openCookieModal = !$this->openCookieModal;
        $this->openModal = !$this->openModal;
    }

    public function togglePrivacyModal()
    {
        $this->openPrivacyModal = !$this->openPrivacyModal;
        $this->openModal = !$this->openModal;
    }

    public function toggleOpenModal()
    {
        $this->openModal = !$this->openModal;
    }


    public function setConsentCookie()
    {
        Cookie::queue(config('cookie-consent.cookie_name'), config('cookie-consent.cookie_value'), config('cookie-consent.cookie_lifetime'));
    }

    public function giveConsent()
    {
        $this->setConsentCookie();

        $this->openModal = false;
    }

    public function consentGiven()
    {
        if(request()->cookie(config('cookie-consent.cookie_name')) == config('cookie-consent.cookie_value')){
            return true;
        }
        else{
            return false;
        }
    }

    public function render()
    {
        return view('cookie-consent::livewire.cookie-consent');
    }
}
