

require('./bootstrap');

window.Vue = require('vue');



Vue.component('customer', require('./components/CustomerComponent.vue').default);



const app = new Vue({
    el: '#app',
});
