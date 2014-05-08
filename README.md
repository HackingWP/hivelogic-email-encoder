Hivelogic Email Encoder WordPress Plugin
========================================

Anti-spam Using [Hivelogic Enkoder](http://hivelogic.com/enkoder/) helps protect
email addresses by converting them into encrypted JavaScript code as a simple
*drop-in* WordPress plugin.

### Changes

- v0.1.1 - Use subtree instead of submodule
- v0.1.0 - Initial release

Installation
------------

[Download ZIP][zip] and extract into `wp-content/plugins` or clone `git clone git@github.com:HackingWP/hivelogic-email-encoder.git`
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

[zip]: https://github.com/jnicol/standalone-phpenkoder/archive/master.zip
