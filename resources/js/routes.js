
import dashboardScreen from "./screen/dashboard.vue";


import login from "./screen/auth/login";
import feedback from "./screen/Feedback/feedback"
import createFeedback from "./screen/Feedback/create-feedback"
import register from "./screen/auth/register.vue"
import logout from "./screen/auth/logout";
import VueRouter from 'vue-router'
import Vue from 'vue'




Vue.use(VueRouter)

var routes = [

    {
        name: "login",
        path: "/",
        component: login,
    },
    {
        name: "logout",
        path: "/logout",
        component: logout,
    },

    {
        name: "dashboard",
        path: "/dashboard",
        component: dashboardScreen,
    },
    {
        name: "feedback",
        path: "/feedback/:id",
        component: feedback,
    },
    {
        name: "create-feedback",
        path: "/feedback/new",
        component: createFeedback,
    },

]

const router = new VueRouter({
    mode: 'history',
    routes: routes
})

export {router}
