# Form for creating repository


### Useful links on the development-time:
https://toster.ru/q/330662

https://toster.ru/q/342433

https://toster.ru/q/329308

### PHP-GitHub api:
https://github.com/KnpLabs/php-github-api


#### Documentation for api.github:
https://developer.github.com/v3/

https://developer.github.com/v3/guides/getting-started/

#### Documentation for php functions:
http://php.net/manual/ru/function.fwrite.php

http://php.net/manual/ru/function.shell-exec.php

http://php.net/manual/ru/function.popen.php

http://php.net/manual/ru/function.proc-open.php

http://php.net/manual/ru/ref.exec.php

http://php.net/manual/ru/function.curl-exec.php

### Errors what I get:

Fatal error: Uncaught RuntimeException: Error creating resource: [message] fopen(): Unable to find the wrapper &quot;https&quot; - did you forget to enable it when you configured PHP? [file] D:\Code\git_form_for_creating_repository\vendor\guzzlehttp\guzzle\src\Handler\StreamHandler.php [line] 324 [message] fopen(https://api.github.com/user/repos): failed to open stream: No such file or directory [file] D:\Code\git_form_for_creating_repository\vendor\guzzlehttp\guzzle\src\Handler\StreamHandler.php [line] 324 in D:\Code\git_form_for_creating_repository\vendor\guzzlehttp\guzzle\src\Handler\StreamHandler.php:252 Stack trace: #0 D:\Code\git_form_for_creating_repository\vendor\guzzlehttp\guzzle\src\Handler\StreamHandler.php(335): GuzzleHttp\Handler\StreamHandler->createResource(Object(Closure)) #1 D:\Code\git_form_for_creating_repository\vendor\guzzlehttp\guzzle\src\Handler\StreamHandler.php(52): GuzzleHttp\Handler\StreamHandler->createStream(Object(GuzzleHttp\Psr7\Request), Array) #2 D:\Code\git_form_for_creating_reposito in D:\Code\git_form_for_creating_repository\vendor\php-http\guzzle6-adapter\src\Promise.php on line 135

( ! ) Parse error: syntax error, unexpected '?', expecting variable (T_VARIABLE) in C:\wamp64\www\git_form_for_creating_repository\vendor\symfony\options-resolver\OptionsResolver.php on line 980
Call Stack
#	Time	Memory	Function	Location
1	0.0021	243800	{main}( )	...\action.php:0
2	0.0299	801480	Github\Client->__construct( )	...\action.php:11
3	0.0951	1919816	Http\Client\Common\Plugin\RedirectPlugin->__construct( )	...\Client.php:130
4	0.0952	1920280	spl_autoload_call ( )	...\Client.php:111
5	0.0952	1920352	Composer\Autoload\ClassLoader->loadClass( )	...\Client.php:111
6	0.0959	1920528	Composer\Autoload\includeFile( )	...\ClassLoader.php:322
