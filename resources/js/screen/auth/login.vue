<template>
    <div class="page login">
        <div style="display: flex">
            <!-- CONTAINER OPEN -->
            <div class="container-login100">
                <div class="wrap-login100 p-0">
                    <div class="card-body">
                        <form action="#" @submit.prevent="login">
                            <span class="login100-form-title"> Login </span>
                            <div
                                class="wrap-input100 validate-input"
                                data-bs-validate="Valid email is required: ex@abc.xyz"
                            >
                                <input
                                    class="input100"
                                    type="text"
                                    name="email"
                                    placeholder="Email"
                                    v-model="form.email"
                                    required
                                />
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i
                                        class="zmdi zmdi-email"
                                        aria-hidden="true"
                                    ></i>
                                </span>
                            </div>
                            <div
                                class="wrap-input100 validate-input"
                                data-bs-validate="Password is required"
                            >
                                <input
                                    class="input100 profile_edit"
                                    type="password"
                                    name="password"
                                    placeholder="Password"
                                    v-model="form.password"
                                    required
                                />
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i
                                        class="zmdi zmdi-lock"
                                        aria-hidden="true"
                                    ></i>
                                </span>
                                <i
                                    style="position: absolute; top: 35%; right: 10px"
                                    onclick="edit_profile()"
                                    class="zmdi zmdi-eye-off"
                                    title="zmdi zmdi-eye-off"
                                    id="edit_profilebtn_01"
                                ></i>
                            </div>
                            <div
                                class="text-center"
                                v-if="Object.keys(this.error).length > 0"
                            >
                                <span class="text-danger-gradient">
                                    {{ error.error }}</span
                                >
                            </div>
                            <div class="container-login100-form-btn">
                                <button
                                    v-if="loading"
                                    class="login100-form-btn btn-dark"
                                    type="submit"
                                >
                                    <span class="spinner-border" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </span>
                                </button>
                                <button
                                    v-else
                                    class="login100-form-btn btn-dark"
                                    type="submit"
                                    @click="login"
                                >
                                    Login
                                </button>
                            </div>
                        </form>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
            <div class="container-login100">
                <div class="wrap-login100 p-0">
                    <div class="card-body">
                        <form action="#" @submit.prevent="signup">
                            <span class="login100-form-title"> Sign Up </span>
                            <div
                                class="wrap-input100 validate-input"
                                data-bs-validate="Valid email is required: ex@abc.xyz"
                            >
                                <input
                                    class="input100"
                                    type="text"
                                    name="name"
                                    placeholder="Name"
                                    v-model="registerForm.name"
                                    required
                                />
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i
                                        class="zmdi zmdi-email"
                                        aria-hidden="true"
                                    ></i>
                                </span>
                            </div>
                            <div
                                class="wrap-input100 validate-input"
                                data-bs-validate="Valid email is required: ex@abc.xyz"
                            >
                                <input
                                    class="input100"
                                    type="text"
                                    name="email"
                                    placeholder="Email"
                                    v-model="registerForm.email"
                                    required
                                />
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i
                                        class="zmdi zmdi-email"
                                        aria-hidden="true"
                                    ></i>
                                </span>
                            </div>
                            <div
                                class="wrap-input100 validate-input"
                                data-bs-validate="Password is required"
                            >
                                <input
                                    class="input100 profile_edit"
                                    type="password"
                                    name="password"
                                    placeholder="Password"
                                    v-model="registerForm.password"
                                    required
                                />
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i
                                        class="zmdi zmdi-lock"
                                        aria-hidden="true"
                                    ></i>
                                </span>
                                <i
                                    style="position: absolute; top: 35%; right: 10px"
                                    onclick="edit_profile()"
                                    class="zmdi zmdi-eye-off"
                                    title="zmdi zmdi-eye-off"
                                    id="edit_profilebtn_01"
                                ></i>
                            </div>
                            <div
                                class="wrap-input100 validate-input"
                                data-bs-validate="Password is required"
                            >
                                <input
                                    class="input100 profile_edit"
                                    type="password"
                                    name="password_confirmation"
                                    placeholder="Confirm Password"
                                    v-model="registerForm.password_confirmation"
                                    required
                                />
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i
                                        class="zmdi zmdi-lock"
                                        aria-hidden="true"
                                    ></i>
                                </span>
                                <i
                                    style="position: absolute; top: 35%; right: 10px"
                                    onclick="edit_profile()"
                                    class="zmdi zmdi-eye-off"
                                    title="zmdi zmdi-eye-off"
                                    id="edit_profilebtn_01"
                                ></i>
                            </div>
                            <div
                                class="text-center"
                                v-if="Object.keys(this.error).length > 0"
                            >
                                <span class="text-danger-gradient">
                                    {{ error.error }}</span
                                >
                            </div>
                            <div class="container-login100-form-btn">
                                <button
                                    v-if="registerloading"
                                    class="login100-form-btn btn-dark"
                                    type="submit"
                                >
                                    <span class="spinner-border" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </span>
                                </button>
                                <button
                                    v-else
                                    class="login100-form-btn btn-dark"
                                    type="submit"
                                    @click="signup"
                                >
                                    Sign Up
                                </button>
                            </div>
                        </form>
                        <div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>


export default {
    name: "login",
    data() {
        return {
            form: {
                email: "",
                password: "",
            },
            registerForm: {
                name:"",
                email: "",
                password: "",
                password_confirmation:""
            },
            error: [],
            loading: false,
            registerloading:false,
            baseUrl: "http://127.0.0.1:8000/api/",
        };
    },
    watch: {
        "form.email": function (val) {
            // console.log(val);
        },
        "form.password": function (val) {
            // console.log(val);
        },
    },
    created() {
        localStorage.getItem("token")
            ? this.$router.push({name: "dashboard"})
            : this.$router.push({name: "login"});
    },
    mounted() {
        const parent = document.querySelector(".side-app");
        const child = parent.querySelector(".main-container");
        child.classList.remove("container");

    },
    methods: {
        login(e) {
            e.preventDefault();
            e.stopPropagation();
            this.loading = true;
            localStorage.clear();

            axios
                .post(this.$root.$baseUrl + "/api/auth/login", this.form)
                .then((response) => {
                    if (response.data.message == "success") {
                        this.$AppStorage.store(response.data.data.token, response.data.data.user.name, response.data.data.user.id);

                        this.$router.push({name: "dashboard"});


                    }
                })
                .catch((error) => {
                    this.loading = false;
                    errorToast("Please add correct details!");
                });
        },
        signup(e) {
            e.preventDefault();
            e.stopPropagation();
            this.registerloading = true;
            localStorage.clear();

            axios
                .post(this.$root.$baseUrl + "/api/auth/register", this.registerForm)
                .then((response) => {
                    if (response.data.message == "success") {
                        this.$AppStorage.store(response.data.data.token, response.data.data.user.name, response.data.data.user.id);

                        this.$router.push({name: "dashboard"});



                    }
                })
                .catch((error) => {
                    this.registerloading = false;
                    console.log(error.response);
                    this.error = error.response.data.message
                    console.log(this.error)
                    if (this.error.email && this.error.email.length > 0) {
                        errorToast(this.error.email[0]);
                    }

                    if (this.error.password && this.error.password.length > 0) {
                        errorToast(this.error.password[0]);
                    }
                });
        },
    },
};
</script>

<style scoped>
.page.login {
    background: rgba(49, 49, 147, 0.8);
}

.zmdi-eye-off:before {
    content: '\f15b';
    position: absolute;
    right: 10%;
    z-index: 100;
}

.zmdi-eye:before {
    content: '\f15c';
    position: absolute;
    cursor: pointer;
    z-index: 100;
    right: 10%;
}
</style>
