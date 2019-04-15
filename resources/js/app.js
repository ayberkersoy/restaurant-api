import Vue from 'vue'
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// import ExampleComponent from './components/ExampleComponent'
import CampaignsIndex from './components/campaigns/CampaignsIndex.vue'
import CreateCampaign from './components/campaigns/CreateCampaign.vue'
import EditCampaign from './components/campaigns/EditCampaign.vue'
import IndexCategories from './components/categories/IndexCategories.vue'
import CreateCategories from './components/categories/CreateCategories.vue'
import EditCategories from './components/categories/EditCategories.vue'
import IndexComments from './components/comments/IndexComments.vue'
import CreateEmployees from './components/employees/CreateEmployees'
import EditEmployees from './components/employees/EditEmployees'
import IndexEmployees from './components/employees/IndexEmployees'
import EditMessages from './components/messages/EditMessages'
import IndexMessages from './components/messages/IndexMessages'
import EditOrders from './components/orders/EditOrders'
import IndexOrders from './components/orders/IndexOrders'
import CreatePaymentTypes from './components/paymentTypes/CreatePaymentTypes'
import EditPaymentTypes from './components/paymentTypes/EditPaymentTypes'
import IndexPaymentTypes from './components/paymentTypes/IndexPaymentTypes'
import CreateProducts from './components/products/CreateProducts'
import EditProducts from './components/products/EditProducts'
import IndexProducts from './components/products/IndexProducts'
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('campaigns-index', require('./components/campaigns/CampaignsIndex.vue').default);
// Vue.component('create-campaign', require('./components/campaigns/CreateCampaign.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// import ExampleComponent from  './components/ExampleComponent.vue';
// import CampaignsIndex from  './components/campaigns/CampaignsIndex.vue';
// import CampaignsCreate from  './components/campaigns/CampaignsCreate.vue';
const app = new Vue({
    el: '#app',
    components: { CampaignsIndex, CreateCampaign, EditCampaign, IndexCategories,
        CreateCategories, EditCategories, IndexComments, CreateEmployees, EditEmployees,
        IndexEmployees, EditMessages, IndexMessages, EditOrders, IndexOrders, CreatePaymentTypes,
        EditPaymentTypes, IndexPaymentTypes, CreateProducts, EditProducts, IndexProducts
    }
});
