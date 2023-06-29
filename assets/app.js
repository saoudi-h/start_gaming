/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
// import './styles/app.css';


import './styles/app.scss';
import './scripts/script';
require('bootstrap');
// start the Stimulus application
import './bootstrap';
import { registerVueControllerComponents } from '@symfony/ux-vue';
// registerVueControllerComponents(require.context('./vue/controllers', true, /\\.(j|t)sx?$/));
registerVueControllerComponents(require.context('./vue/controllers', true, /.vue$/));

require('@fortawesome/fontawesome-free/css/all.min.css');
require('@fortawesome/fontawesome-free/js/all.js');