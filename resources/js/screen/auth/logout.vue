<template>
    <div id="global-loader">

    </div>

</template>

<script>
export default {
    name: "logout",
    mounted() {
        let self = this;
        axios.post(this.$root.$baseUrl+'/api/logout',  {msg: 'logout'}, self.$root.$header).then((res)=>{
            this.$AppStorage.clear();
            localStorage.removeItem('token');
            localStorage.removeItem('user');
            localStorage.removeItem('id');
            this.$router.push({name: 'login'});
        })
        .catch(err =>{
            console.log(err)
            if(err.response.data.message === "Unauthenticated."){
                this.$AppStorage.clear();
                setTimeout(() => {
                    this.$router.push({ name: "login" });
                }, 1000);
                successToast("Logout Successfully.");
            }
        })
    }
}
</script>

<style scoped>
#global-loader{
    display: block;
}
</style>
