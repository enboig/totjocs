<template>
    <div>
        <h1>{{title}}</h1>
        <p>Lorem ipsum</p>
    </div>
</template>

<script>
export default {
    props: {
        title: String,
        description: String,
        category: String
    },
    created() {
        console.log("carregant el joc");
        axios.get(`/api/games/${this.$route.params.id}`);
    },
    data() {
        return {
            game:null
        }
    }
    

};
</script>

<style scoped></style>
