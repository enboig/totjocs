<template>
    <div class="container-fluid height-100 pl-0 pr-0">

        <div class="container-fluid pl-0 pr-0">
            <nav
                class="navbar navbar-expand-lg  justify-content-between navbar-light navbar-green"
            >
                <router-link class="undecorated" :to="{ name: 'home' }"
                    ><i class="fa fa-home"></i
                ></router-link>

                Llista de Jocs

                <i class="fa fa-search"></i>
            </nav>
            <div class="row">
                <form class="form-inline">
                    <div class="col pl-0 pr-1">
                        <select class="custom-select">
                            <option selected value="0"
                                >Nombre de jugadors</option
                            >
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col pr-0 pl-1">
                        <select class="custom-select">
                            <option selected>Tipus de joc</option>
                            <option value="1">Dards</option>
                            <option value="2">Cartes</option>
                            <option value="3">Taulell</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid pl-0 pr-0">
            <div class="row justify-content-center">
                
                <div v-if="loading">
                    Data is coming ...
                </div>
                <div v-else>

                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"
                            v-for="(game) in games"
                            :key="game.id">
                            <router-link class="undecorated" :to="{ name: 'game', params: {id: game.id}}">{{ game.title }}</router-link>
                            </li>
                        </ul>
                    </div>
                </div>

                    <ul id="my-bubbles" class="nav navbar-nav">
                        <button type="button" class="btn btn-primary btn-rounded btn-icon">
                            <i class="bi bi-dice-5"><font-awesome-icon icon="dice" /></i>
                        </button>
                    </ul>
            </div>            
        </div>
    </div>
</template>

<script>
import Game from "./GameComponent";
export default {
    mounted() {
        console.log("Component mounted.");
    },
    data() {
        return {
            games: null,
            loading: false
        };
    },

    created() {
        this.loading = true;

        const p = new Promise((resolve, reject) => {
            console.log(resolve);
            console.log(reject);
            setTimeout(() => resolve("hello"), 3000);
        })
            .then(result => console.log(`Success ${result}`))
            .catch(result => console.log(`Error ${result}`));

        console.log(p);

        const request = axios.get("/api/games").then(response => {
            this.games = response.data;
            this.loading = false;
        });
        //        console.log(request,'request');
    },

    components: {
        Game
    }
};
</script>

<style scoped>
#my-bubbles {
        position: fixed;
        bottom: 10px;
        right: 10px;
        width: 50px;
}

#my-bubbles button i {
        font-size: 20px;

}
</style>
