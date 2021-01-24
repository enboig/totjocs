require('./bootstrap');

import router from "./routes";
import VueRouter from "vue-router";
import Index from "./Index";

import { library } from '@fortawesome/fontawesome-svg-core'
import { faCoffee } from '@fortawesome/free-solid-svg-icons'
import { faDice } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faCoffee)
library.add(faDice)


window.Vue = require('vue');

Vue.component('font-awesome-icon', FontAwesomeIcon)


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
