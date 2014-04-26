Hivelogic Email Encoder WordPress Plugin
========================================

Anti-spam Using [Hivelogic Enkoder](http://hivelogic.com/enkoder/) helps protect
email addresses by converting them into encrypted JavaScript code as a simple
*drop-in* WordPress plugin.

Installation
------------

[Unzip release][releases] into `wp-content/plugins` or clone `git clone --recursive git@github.com:HackingWP/hivelogic-email-encoder.git`
subdirectory and activate in administration.

`the_content()` is filtered by default. Add more filters (or call directly)
to protect other content.

```php
// Filter excerpt using filters:
add_filter('the_excerpt', 'str_hivelogic_email_encoder', 10, 1);

// Calling directly in your scripts:
$str = 'John Doe <john.doe@generi.co>';
$str = str_hivelogic_email_encoder($str);
```

Enjoy!

[@martin_adamko](http://twitter.com/martin_adamko)

[releases]: https://github.com/HackingWP/hivelogic-email-encoder/releases
