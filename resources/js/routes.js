import VueRouter from "vue-router";
import HomeComponent from "./components/HomeComponent";
import GamesListComponent from "./components/GamesListComponent";
import Game from "./components/GameComponent";

const routes = [
    {
        path: "/",
        component: HomeComponent,
        name: "home",
    },
    {
        path: "/games",
        component: GamesListComponent,
        name: "games",
    },
    {
        path: "/game/:id",
        compoment: Game,
        name: "game"
    }
];

const router = new VueRouter({
    routes,
    mode: "history",
});

export default router;
