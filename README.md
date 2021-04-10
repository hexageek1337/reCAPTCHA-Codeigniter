# reCAPTCHA Codeigniter 4
Library reCAPTCHA v2 for Codeigniter 4 free to use.

# What is reCAPTCHA?

reCAPTCHA is a free service that protects your site from spam and abuse. It uses advanced risk analysis engine to tell humans and bots apart. With the new API, a significant number of your valid human users will pass the reCAPTCHA challenge without having to solve a CAPTCHA (See blog for more details). reCAPTCHA comes in the form of a widget that you can easily add to your blog, forum, registration form, etc.

See [the details][1].

# Sign up for an API key pair

To use reCAPTCHA, you need to [sign up for an API key pair][4] for your site. The key pair consists of a site key and secret. The site key is used to display the widget on your site. The secret authorizes communication between your application backend and the reCAPTCHA server to verify the user's response. The secret needs to be kept safe for security purposes.

# Installation

```bash
$ cp app/Config/Settings.php your_application_folder/Config/
$ cp app/Libraries/Recaptcha.php your_application_folder/Libraries/
```

# Usage

Set your site key and secret on `app/Config/Settings.php` file

```php
public $recaptcha_site_key = '';
public $recaptcha_secret_key = '';
public $recaptcha_lang = 'id';
```

### Render the reCAPTCHA widget

```php
echo $this->recaptcha->getWidget();
```

output:

```html
<div class="g-recaptcha" data-sitekey="xxxxx" data-theme="light" data-type="image" data-size="normal"  loading="lazy"></div>
```

change default theme by pass array parameter

```php
echo $this->recaptcha->getWidget(array('data-theme' => 'dark'));
```

change default type by pass array parameter

```php
echo $this->recaptcha->getWidget(array('data-theme' => 'dark', 'data-type' => 'audio'));
```

### Render Script Tag

```php
echo $this->recaptcha->getScriptTag();
```

output:

```html
<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=onload&hl=id" defer></script>
```

change render value by pass array parameter

```php
echo $this->recaptcha->getScriptTag(array('render' => 'explicit'));
```

change default language by pass array parameter

```php
echo $this->recaptcha->getScriptTag(array('render' => 'explicit', 'hl' => 'zh-TW'));
```

### Verify Response

Calls the reCAPTCHA siteverify API to verify whether the user passes `g-recaptcha-response` POST parameter.

```php
$captcha = $this->request->getPost('g-recaptcha-response');
$response = $this->recaptcha->verifyResponse($captcha);
```

check success or fail

```php
if (isset($response['success']) and $response['success'] === true) {
    echo "You got it!";
}
```

# Regards

- Bo-Yi Wu [@appleboy](https://twitter.com/appleboy)
- Denny Septian Panggabean [github.com/hexageek1337](https://github.com/hexageek1337)

[1]: https://www.google.com/recaptcha/intro/index.html
[2]: http://www.codeigniter.com/
[3]: https://developers.google.com/recaptcha/
[4]: http://www.google.com/recaptcha/admin
