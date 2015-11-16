# laravel5.1-training
    This is a repository with the best practices.

#Instalación:

    Run "composer install".
    Run "bower install".
    Create a ".env" file with the contet of "env.example".
    Run "php artisan key:generate" for change the corresponding data (Generate the key).
    Run "php artisan migrate".
    Run "php artisan migrate --seed" (default content).
    Run "npm install".

### Live Reload

    Despues de ejecutar todos los pasos anteriores
    Ejecutar `gulp watch` y activar livereload.

#Contributing

    Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the Laravel documentation.

#Security Vulnerabilities

    If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

#Blade change on Laravel
    RawTags "[!!", "!!]"
    ContentTags "[[", "]]"
    EscapedContentTags "[[[", "]]]"