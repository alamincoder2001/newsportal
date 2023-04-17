require("./bootstrap");

window.Vue = require("vue").default;

//Vform import
import Form from "vform";
//vform globally register
window.Form = Form;

import VueGoodTablePlugin from "vue-good-table";
// import the styles
import "vue-good-table/dist/vue-good-table.css";
Vue.use(VueGoodTablePlugin);

// v-select
import vSelect from "vue-select";
import "vue-select/dist/vue-select.css";
Vue.component("v-select", vSelect);

// ck editor
import CKEditor from "@ckeditor/ckeditor5-vue2";
import Vue from "vue";
Vue.use(CKEditor);

Vue.component("Dashboard", require("./components/Dashboard.vue").default);
Vue.component("Category", require("./components/Category.vue").default);
Vue.component("Subcategory", require("./components/Subcategory.vue").default);
Vue.component("Designation", require("./components/Designation.vue").default);
Vue.component("Department", require("./components/Department.vue").default);
Vue.component("UploadNews", require("./components/UploadNews.vue").default);
Vue.component("ManageNews", require("./components/ManageNews.vue").default);
Vue.component("Setting", require("./components/Setting.vue").default);
Vue.component("CreateUser", require("./components/CreateUser.vue").default);
//advertise
Vue.component("Advertise_one", require("./components/advertise/AdvertiseOne.vue").default);
Vue.component("Advertise_two", require("./components/advertise/AdvertiseTwo.vue").default);
Vue.component("Advertise_three", require("./components/advertise/AdvertiseThree.vue").default);
Vue.component("Advertise_four", require("./components/advertise/AdvertiseFour.vue").default);
Vue.component("Advertise_five", require("./components/advertise/AdvertiseFive.vue").default);

Vue.component( "EmployeeEntry", require("./components/EmployeeEntry.vue").default);
Vue.component("EmployeeList", require("./components/EmployeeList.vue").default);
Vue.component("EmployeeEntry", require("./components/EmployeeEntry.vue").default);

const app = new Vue({
    el: "#app",
});
