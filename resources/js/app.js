require('./bootstrap');

import router from "./routes";
import VueRouter from "vue-router";
import Index from "./Index";

window.Vue = require('vue');

// Vue.component(
//     'games-list',
//     require('./components/GamesListComponent.vue').default
// );

// Vue.component(
//     'home-component',
//     require('./components/HomeComponent.vue').default
//);


Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router,
    components: {
        "index" : Index
    }
});
