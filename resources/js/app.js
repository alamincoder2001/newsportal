require('./bootstrap');

window.Vue = require('vue').default;


Vue.component('Dashboard', require('./components/Dashboard.vue').default);


const app = new Vue({
    el: '#app',
});
