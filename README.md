# Add a Cookie Consent modal to your Laravel application

**Cookie consent modal and notification for laravel**

This package adds a cookie consent notification and method of setting the cookie to your Laravel application.

- [Installation](#installation)
- [Usage](#usage)
- [License](#license)

## Installation

The package views and components are based on TailwindCSS and Livewire, so please make sure these are included in your App and Layout.
For installation instructions please see:

- [TailwindCCS](https://tailwindcss.com/)
- [Livewire](https://laravel-livewire.com/)

Require this package with composer using the following command:

```bash
composer require jorgb/cookie-consent
```

This package makes use of Laravels package auto-discovery mechanism

## Usage
Add the following code to your App Layout file before the closing body tag

```html
<livewire:cookie-consent />
```

You can also publish the config file to change the default cookie name and duration.

```bash
php artisan vendor:publish --provider="Jorgb\CookieConsent\CookieConsentServiceProvider" --tag=config
```

### Customizing the modal contents

To be able to change the contents of the Consent modal, you can publish the package views:

```bash
php artisan vendor:publish --provider="Jorgb\CookieConsent\CookieConsentServiceProvider" --tag=views
```

The published modal view will be copied to the following folder:
```xpath
resources/views/vendor/cookie-consent/components/consent-modal.php
```

