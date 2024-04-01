<script>
export default {
    name: "create-feedback",
    data() {
        return {
            feedbacks: {
                "title": "",
                "description": "",
                "category": "",
                "user_id": ""
            },
            errors: []
        };
    },
    methods: {
        back(){
            this.$router.push({ name: "dashboard" });
        },
        create_feedback() {
            console.log(this.feedbacks)
            if (this.feedbacks.title == "" || this.feedbacks.description == "" || this.feedbacks.category == ""){
                errorToast("Please fill all fields")
            }else{
                axios
                    .post(this.$root.$baseUrl + "/api/feedback/store", this.feedbacks, this.$root.$header)
                    .then((response) => {
                        successToast("success")
                        this.$router.push({ name: "dashboard" });
                    })
                    .catch((error) => {
                        errorToast("Please add correct details!");
                    });
            }
        }
    },
    mounted() {
        this.feedbacks.user_id = localStorage.getItem('id')
    }
}
</script>

<template>
    <div>

        <!--ROW OPENED-->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div
                        class="card-header border-bottom justify-content-between"
                    >
                        <h4 class="mb-0">Add Feedback</h4>

                    </div>
                    <div class="card-body p-0 create-project-main">
                        <div class="row p-5 border-bottom">
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <div class="form-group">
                                    <label
                                        for="fname"
                                        class="form-label text-muted"
                                    >First Name:</label
                                    >
                                    <div class="input-group">
                                        <input
                                            id="fname"
                                            type="text"
                                            class="form-control text-dark"
                                            placeholder="Enter Title"
                                            v-model="feedbacks.title"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <div class="form-group">
                                    <label
                                        for="school-year"
                                        class="form-label text-muted"
                                    >Role:</label
                                    >

                                    <select
                                        class="form-control form-select select2-show-search"
                                        name="year"
                                        id="role"
                                        data-placeholder="Choose Type..."
                                        v-model="feedbacks.category"
                                        required
                                    >
                                        <option
                                            label="Choose one"
                                            value=""
                                            selected
                                        ></option>
                                        <option
                                            label="Bug Report"
                                            value="Bug Report"
                                        ></option>
                                        <option
                                            label="Feature Request"
                                            value="Feature Request"
                                        ></option>
                                        <option
                                            label="Improvement"
                                            value="Improvement"
                                        ></option>
                                    </select>
                                    <p class="error role"></p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-6">
                                <div class="form-group">
                                    <label
                                        for="lname"
                                        class="form-label text-muted"
                                    >Description:</label
                                    >
                                    <div class="input-group">
                                        <textarea
                                            id="lname"
                                            type="text"
                                            class="form-control text-dark"
                                            placeholder="Enter Description"
                                            v-model="feedbacks.description"
                                        />
                                    </div>
                                    <p class="error lname"></p>
                                </div>
                            </div>


                        </div>
                        <div class="row p-5">
                            <div class="btn-list text-end">
                                <button
                                    class="btn btn-outline-danger"
                                    @click="back"
                                >
                                    <i class="fe fe-x-circle"></i>
                                    Back
                                </button>
                                <button
                                    class="btn btn-primary"
                                    @click="create_feedback"
                                >
                                    <i class="fe fe-check-circle"></i>
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--ROW CLOSED-->
    </div>
</template>

<style scoped>

</style>
