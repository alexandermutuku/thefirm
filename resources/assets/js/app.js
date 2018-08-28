
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.Slug = require('slug');
Slug.defaults.mode = 'rfc3986';

import Buefy from 'buefy';
import Vue from 'vue'
import Googlefonts from 'googlefonts';

Vue.use(Buefy)

Vue.component('slug-widget', require('./components/slugWidget.vue'));

//
// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */
//
// // Vue.component('example-component', require('./components/ExampleComponent.vue'));
//
var app = new Vue({
    el: '#app',
    data: {
    }

    });

require('./manage')
