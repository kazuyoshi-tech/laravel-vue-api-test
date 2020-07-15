require("./bootstrap");
 
window.Vue = require("vue");
 
import Vue from "vue";
import router from "./router";
 
const r_app = new Vue({
    el: "#r_app",
    router: router
});
