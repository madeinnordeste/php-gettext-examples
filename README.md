# PHP Gettext Examples

Example of use gettext to translate strings

* [Gettext](http://www.gnu.org/software/gettext/)
* [PHP Gettext Manual](http://www.php.net/manual/pt_BR/book.gettext.php)


## generate messages.pot file


	xgettext --from-code=UTF-8 -o messages.pot *.php


# how to install locales	

	sudo aptitude install language-pack-pt_BR

Or reconfigure:

	sudo locale-gen pt_BR	



## References

* [POEDIT - Software to translate ](http://sourceforge.net/projects/poedit/?source=dlp)

* [Gettext - Distributing the Pot File](http://www.onlamp.com/pub/a/php/2002/06/13/php.html?page=2)

* [Traduzir uma aplicação web com gettext](http://blog.falci.me/php/traduzir-uma-aplicacao-web-com-gettext/)

* [Translate and Localize your web application with PHP and gettext](http://www.codeforest.net/translate-and-localize-your-web-application-with-php-and-gettext)

* [PHP internationalization with gettext tutorial](https://lingohub.com/blog/2013/07/php-internationalization-with-gettext-tutorial/)

* [PHP and Gettext don't work on my server - Stackoverflow](https://stackoverflow.com/questions/2915056/php-and-gettext-dont-work-on-my-server)