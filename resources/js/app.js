/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue").default;
import AppStorage from "./screen/Helpers/AppStorage";
import login from "./screen/auth/login";
import {router} from './routes.js'


// Components
Vue.component("login-page", require("./screen/auth/login").default);

Vue.prototype.$AppStorage = AppStorage;
Vue.prototype.$baseUrl = window.location.origin;


Vue.prototype.$refresh = function refresh() {
    this.refreshComponent()
}
Vue.prototype.$checkToken = function checkToken() {
    this.$AppStorage.clear();
    setTimeout(() => {
        this.$router.push({name: "login"});
    }, 1000);
    errorToast("Unauthorized.");
};


// Create a local mixin object
const myLocalMixin = {
    created() {
        Vue.prototype.$header = {
            headers: {
                Authorization: `Bearer ${localStorage.getItem("token")}`,
                "Content-Type": "application/json",
            },
        };


            if (!localStorage.getItem("token")) {

                this.$router.push({name: "login"});


        }
    }
};

// Register the mixin globally
Vue.mixin(myLocalMixin);

// Create the excluded component
Vue.component("excluded-component", {
    login,
});

// Create a base component that applies the mixin to all components
Vue.component("base-component", {
    mixins: [myLocalMixin],
});

const app = new Vue({
    el: "#app",

    data() {
        return {
            //
        };
    },
    router: router,

    methods: {
        refreshComponent() {
            this.componentKey++; // Increment the key to force component re-render
        },
    },
    mounted() {
        if (this.$route.name !== "login" && this.$route.name !== "register") {
            const parent = document.querySelector(".side-app");
            const child = parent.querySelector(".main-container");
            child.classList.add("container");
        } else {
            const parent = document.querySelector(".side-app");
            const child = parent.querySelector(".main-container");
            child.classList.remove("container");
        }
    },
});
