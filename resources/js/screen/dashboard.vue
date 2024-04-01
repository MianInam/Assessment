<template>
    <div>
        <div class="inner-body" id="dashboard">
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Feedback</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <RouterLink :to="{name:'create-feedback'}"><button
                        type="button"
                        class="btn btn-dark"
                    >
                        Add New
                        <span class="caret"></span>
                    </button>
                    </RouterLink>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <!-- ROW-1 -->
            <vue-good-table
                :columns="columns"
                :rows="feedbackData"
                :line-numbers="true"
                            :search-options="{
                                enabled: true,
                            }"
                            :pagination-options="{
                            enabled: true,
                            perPage: 10,}"
            >

                <template slot="table-row" slot-scope="props">

                    <!--                DropDown        -->
                    <span v-if="props.column.field == 'options'">
                                    <div class="btn-group mt-2 mb-2">
                                <RouterLink :to="{name:'feedback',params:{id:props.row.id}}"><button
                                    type="button"
                                    class="btn btn-dark"
                                >
                                    View
                                    <span class="caret"></span>
                                </button>
                                    </RouterLink>
                            </div>
                                </span>

                </template>

            </vue-good-table>
        </div>


    </div>
</template>

<!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
<script>

import "vue-good-table/dist/vue-good-table.css";
import { VueGoodTable } from "vue-good-table";
export default {
    name: "dashboard",
    components:{
        VueGoodTable
    },

    data() {
        return {
            isLoading: true,
            feedbackData:[],
            columns: [
                {
                    label: 'Title',
                    field: 'title',
                    type: 'string',
                },
                {
                    label: 'Category',
                    field: 'category',
                    type: 'string',
                },
                {
                    label: 'User',
                    field: 'users.name',
                    type: 'string',
                },
                {
                    label: 'Action',
                    field: 'options',
                    type: 'string',
                },
            ],

        };
    },
    methods: {
        fetchFeedbacks(){
            axios
                .get(
                    this.$root.$baseUrl + "/api/feedback/list",
                    this.$root.$header
                )
                .then((response) => {
                    this.feedbackData = response.data.data
                })
                .catch((error) => {
                    if (error.response.data.message === "Unauthenticated.") {
                        this.$root.$checkToken();
                    }
                });
        }
    },
    mounted() {
        this.fetchFeedbacks();
    },
    created() {
        const parent = document.querySelector(".side-app");
        const child = parent.querySelector(".main-container");
        child.classList.add("container");
    },
};
</script>

<style scoped>

</style>

<script setup>
</script>
