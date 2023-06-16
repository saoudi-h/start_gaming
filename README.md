
*****************************************************
********* installation de l'application de Base  ****
*****************************************************

cd /PATH_TO_MY_PROJECT/PROJECT_NAME


composer install
npm install
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load





**********************************************
********* Mise en route de l'application  ****
**********************************************

cd /PATH_TO_MY_PROJECT/PROJECT_NAME
symfony serve

cd /PATH_TO_MY_PROJECT/PROJECT_NAME
npm run watch

cd /PATH_TO_MY_PROJECT/PROJECT_NAME
npm run dev-server

cd /PATH_TO_MY_PROJECT/PROJECT_NAME
npm run build



ROUTES
*************************************************
http://127.0.0.1:8000/
http://127.0.0.1:8000/login
http://127.0.0.1:8000/user/homepage
http://127.0.0.1:8000/admin/homepage
http://127.0.0.1:8000/product/



user:   user1   pass
admin:  admin1  pass














*********************************************************************
*********  Création from SCRATH   **********************************
*********************************************************************

symfony new my_project_directory --version="6.2.*" --webapp



*************************************
.env.local

DATABASE_URL="mysql://root:@127.0.0.1:3306/m2i_shop_square?serverVersion=8.0.32&charset=utf8mb4"
php bin/console doctrine:database:create 



*************************************
php bin/console make:controller
PublicHomepage



*************************************
composer require symfony/webpack-encore-bundle

npm install
npm run build
npm run dev-server





*************************************
\assets\scripts\script.js

app.js :
import './scripts/script.js';



*************************************
.enableSassLoader()
npm install sass-loader@^13.0.0 sass --save-dev



*************************************
npm install bootstrap --save-dev

// assets/styles/app.scss
@import "~bootstrap/scss/bootstrap";

app.js :
import './styles/app.scss';

// Il faut ajouter ça pour permettre les fonctionnalités de javascript de bootstrap.css fonctionnent !
require('bootstrap');



*************************************
npm install @popperjs/core --save-dev



*************************************
npm install jquery --save-dev

script.js :
import $ from 'jquery';

$('body').prepend('<h1>'+'Titi'+'</h1>');

webpack.config.js :
.autoProvidejQuery()

npm run build
npm run watch




*************************************
Requiring JavaScript Modules :

// assets/greet.js
export default function(name) {
    return `Yo yo ${name} - welcome to Encore!`;
};

import greet from './greet';

alert(greet)





*************************************
composer require symfony/ux-vue

.enableVueLoader()

npm install -D vue-loader --force

// assets/vue/controllers/MyComponent.vue
<template>
    <div>Hello {{ name }}!</div>
</template>

<script setup>
    defineProps({
        name: String
    });
</script>

{# templates/home.html.twig #}
<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
    <div class="card-body">
        <div {{ vue_component('MyComponent', { 'name': 'toto' }) }}></div>
    </div>
</div>

npm run build
npm run watch






*************************************
npm i bootswatch --save-dev

app.scss :
@import "~bootswatch/dist/superhero/_variables";





*************************************
npm install jquery --save-dev

app.js:
import $ from 'jquery';

$('body').prepend('<h1>'+'Titi'+'</h1>');





*************************************
.enableSassLoader()
npm install sass-loader@^13.0.0 sass --save-dev

npm install jquery @popperjs/core --save-dev






*************************************
npm i @fortawesome/fontawesome-free

app.js :
require('@fortawesome/fontawesome-free/css/all.min.css');
require('@fortawesome/fontawesome-free/js/all.js');







*************************************
php bin/console make:user

php bin/console make:migration
php bin/console doctrine:migrations:migrate





*************************************
composer require symfonycasts/verify-email-bundle
php bin/console make:registration-form




*************************************
composer require --dev symfony/profiler-pack




*************************************
https://symfony.com/doc/current/security.html#form-login

php bin/console make:controller Login




*************************************
https://symfony.com/doc/current/security.html#logging-out






*************************************
make:entity Product




*************************************
composer require --dev orm-fixtures
php bin/console doctrine:fixtures:load





*************************************
composer require annotations




*************************************
make:crud Product




*************************************
make:entity Commande




*************************************
make:entity CommandeProduct



*************************************
Commande Fixtures



*************************************
php bin/console make:crud
Commande





