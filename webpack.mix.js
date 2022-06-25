const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .ts('source/_assets/js/main.ts', 'js')
    .sass('source/_assets/css/main.scss', 'css')
    .sass('source/_assets/css/icons.scss', 'css')
    .sass('source/_assets/css/colors.scss', 'css')
    .sass('source/_assets/css/fonts.scss', 'css')
    .options({
        processCssUrls: false,
    })
    .version();
