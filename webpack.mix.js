const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js/app.js')
    .js('resources/js/books.js', 'public/js/books.js')
    .react()
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ]);
