import Vue from "vue";
import VueRouter from "vue-router";
 
Vue.use(VueRouter);
 
import index from "./components/routerproject/index.vue";
import add from "./components/routerproject/add.vue";
import edit from "./components/routerproject/edit.vue";
 
const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/books/index",
            name: "index",
            component: index
        },
        {
            path: "/books/add",
            name: "add",
            component: add
        },
        {
            path: "/books/:id/edit",
            name: "edit",
            component: edit
        }
    ]
});
 
export default router;