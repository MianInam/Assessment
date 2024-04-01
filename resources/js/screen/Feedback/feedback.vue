<template>
    <div>
        <div class="container mt-5 mb-5">
            <div class="d-flex justify-content-center row">
                <div class="d-flex flex-column col-md-8">
                    <div
                        class="d-flex flex-row align-items-center text-left comment-top p-2 bg-white border-bottom px-4">


                        <div class="d-flex flex-column ml-3">
                            <div class="d-flex flex-row post-title"><h5>{{ feedbackData.title }}</h5><span class="ml-2">({{ feedbackData.users.name }})</span>
                            </div>
                            <div class="d-flex flex-row post-title"><h5>{{ feedbackData.description }}</h5>
                            </div>
                            <div class="d-flex flex-row align-items-center align-content-center post-title"><span
                                class="mr-2 comments">{{
                                    (feedbackData.comments.length === 0) ? "No Comment" : feedbackData.comments.length
                                }} comments&nbsp;</span>
                                <span>{{ formatTimeAgo(feedbackData.created_at) }}</span></div>
                        </div>
                    </div>
                    <div class="coment-bottom bg-white p-2 px-4">
                        <div class="d-flex flex-row add-comment-section mt-4 mb-4">
                            <input type="text" class="form-control mr-3" v-model="comment" placeholder="Add comment">

                            <button class="btn btn-primary" @click="submitComment" type="button">Comment</button>
                        </div>

                        <div class="collapsable-comment">
                            <div class="d-flex flex-row justify-content-between align-items-center action-collapse p-2"
                                 data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1"
                                 href="#collapse-1"><span style="font-size: medium;">Comments</span>
                            </div>
                            <div id="collapse-1">
                                <div v-for="feedbackComment in feedbackData.comments" class="commented-section mt-2">
                                    <div class="d-flex flex-row align-items-center commented-user"><h5 class="mr-2">
                                        {{ feedbackComment.user.name }}</h5><span
                                        class="mb-1 ml-2">{{ formatTimeAgo(feedbackComment.created_at) }}</span>
                                    </div>
                                    <div class="comment-text-sm"><span
                                        style="    font-style: italic;">{{ feedbackComment.content }}</span>
                                    </div>
                                    <hr>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</template>

<!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
<script>
import {formatDistanceToNow} from 'date-fns';

export default {
    name: "feedback",
    data() {
        return {
            id: "",
            feedbackData: [],
            comment: ""
        };
    },
    methods: {

        fetchFeedbackbyId(id) {
            axios
                .get(
                    this.$root.$baseUrl + "/api/feedback/" + id,
                    this.$root.$header
                )
                .then((response) => {
                    this.feedbackData = response.data.data
                    console.log(response.data.data)
                })
                .catch((error) => {
                    if (error.response.data.message === "Unauthenticated.") {
                        this.$root.$checkToken();
                    }
                });
        },
        formatTimeAgo(timestamp) {
            return formatDistanceToNow(new Date(timestamp), {addSuffix: true});
        },
        submitComment() {
            let data = {}
            data.content = this.comment
            data.feedback_id = this.id
            if (data.content == "") {
                errorToast("Please Write a comment!");
            } else {
                axios
                    .post(this.$root.$baseUrl + "/api/comment/store", data,this.$root.$header)
                    .then((response) => {
                        successToast("success")
                        this.comment = ""
                        this.addCommentLocal(response.data.data)
                    })
                    .catch((error) => {
                        errorToast("Please add correct details!");
                    });
            }
        },
        addCommentLocal(data){
            let name = localStorage.getItem('user');
            let obj = {
                "content":data.content,
                "created_at":data.created_at,
                "user":{name:name}
            }
            this.feedbackData.comments.push(obj)
            console.log(this.feedbackData,"final")
        },

    },
    mounted() {
        this.id = this.$route.params.id;
        this.fetchFeedbackbyId(this.id);
    },
    created() {
        const parent = document.querySelector(".side-app");
        const child = parent.querySelector(".main-container");
        child.classList.add("container");
    },
};
</script>

<style scoped>

.bdge {
    height: 21px;
    background-color: orange;
    color: #fff;
    font-size: 11px;
    padding: 8px;
    border-radius: 4px;
    line-height: 3px
}

.comments {
    text-decoration: underline;
    text-underline-position: under;
    cursor: pointer
}

.dot {
    height: 7px;
    width: 7px;
    margin-top: 3px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block
}

.hit-voting:hover {
    color: blue
}

.hit-voting {
    cursor: pointer
}

.servicedrop {
    transition-delay: 1s
}

.action-collapse {
    cursor: pointer
}

.d-flex.flex-row.post-title {
    justify-content: space-between;
}

.d-flex.flex-row.align-items-center.align-content-center.post-title {
    justify-content: space-between;
}

.d-flex.flex-row.add-comment-section.mt-4.mb-4 {
    justify-content: space-between;
}

input.form-control.mr-3 {
    width: 80%;
}

.d-flex.flex-row.align-items-center.commented-user {
    justify-content: space-between;
}

.d-flex.flex-column.ml-3 {
    flex: 1
}
</style>

<script setup>
</script>
