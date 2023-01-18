<script setup>
import { RouterLink } from 'vue-router'

// const logout = () => {
//     axios.post('http://localhost:9000/api/logout', {}, {
//         headers: {
//             'Authorization': 'Bearer ' + localStorage.getItem('token')
//         }
//     }).then(res => {
//         console.log(res)
//         localStorage.removeItem('token')
//         localStorage.removeItem('user')
//         window.location.href = '/'
//     })
// }

</script>

<template>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
            <RouterLink to="/" class="navbar-brand"><img src="../assets/logo.png" ></RouterLink>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <RouterLink to="/" class="nav-link active">Accueil</RouterLink>
                    </li>

                    <li class="nav-item">
                        <RouterLink to="/about" class="nav-link">Marché des plantes</RouterLink>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tous nos modèles
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                    <!--<li class="nav-item" v-if="!loggedIn">
                        <RouterLink to="/contact" class="nav-link">Contacter un conseiller</RouterLink>
                    </li>
                    <li class="nav-item" v-else>
                        <button @click="logout" class="nav-link">Déconnexion</button>
                    </li>-->
                 
                </ul>

                <!-- afficher le bouton se connecter ou le bouton deconnexion -->
                

                <RouterLink to="/login" class="btn btn-outline-light">Se connecter</RouterLink>
                <RouterLink to="/register" class="btn btn-light">S'inscrire</RouterLink>

            </div>
        </div>
    </nav>
</template>

<style scoped>
    .navbar-brand img{
        width: 50px;
    }
</style>