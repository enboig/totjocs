<template>
    <div class="container-fluid height-100 bg-green">
        <div class="vmargins-auto" >
            <div class="row text-center p-3">
                <div class="col">
                    <img :src="require('./assets/logo.jpg')">
                </div>
            </div>
            <div class="row text-center">
                <div class="col p-3">
                    <router-link class="btn btn-lg bg-maroon" :to="{ name: 'games'}">Llista de jocs</router-link>
                    
                </div>
            </div>
            <div class="row text-center p-3">
                <div class="col">
                    <button type="button" class="btn btn-lg bg-maroon">Primary</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style >
.vmargins-auto {
    padding-top: 100px;
padding-bottom: auto;
}

.container-fluid > .row {
    margin-left: 0;
    margin-right: 0;
}
</style>
