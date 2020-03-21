Notes Symfony :

Need PHP, Composer and Symfony installed

Symfony includes a built in local server launcher, symfony serve. Use -d to lauch it in deamon mode and run server in the background
symfony server:status to check server status
symfony server:stop to stop it

New libraries via composer: composer require library

Symfony includes Flex, wich gives us a bunch of alliases for libraries, see https://flex.symfony.com/
When installing a library, symfony uses recipes to add everything needed for the library to work, no need for extra configuration
We can remove a library with composer remove library, this will undo all recipes for this library

php bin/console will display a lot af commands avaible with php bin/console command

When returning a view into a response, we can use twig to generate a base template. Twig documentation: https://twig.symfony.com/doc/3.x/