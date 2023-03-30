require('./bootstrap');

window.Vue = require('vue').default;

import VueGoodTablePlugin from 'vue-good-table';
// import the styles
import 'vue-good-table/dist/vue-good-table.css'
Vue.use(VueGoodTablePlugin);

// v-select
import vSelect from "vue-select";
import "vue-select/dist/vue-select.css";
Vue.component("v-select", vSelect);

// ck editor
import CKEditor from '@ckeditor/ckeditor5-vue2';
Vue.use( CKEditor );


Vue.component('Dashboard', require('./components/Dashboard.vue').default);
Vue.component('Category', require('./components/Category.vue').default);
Vue.component('Subcategory', require('./components/Subcategory.vue').default);
Vue.component('News', require('./components/News.vue').default);
Vue.component('Setting', require('./components/Setting.vue').default);


const app = new Vue({
    el: '#app',
});
