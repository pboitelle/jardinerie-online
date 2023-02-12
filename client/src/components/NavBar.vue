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
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <div><RouterLink to="/" class="navbar-brand"><img src="../assets/img/logo.png" ></RouterLink></div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <RouterLink to="#" class="nav-link">Mon Jardin</RouterLink>
                    </li>
                    <li class="nav-item">
                        <RouterLink to="#" class="nav-link">Marché des plantes</RouterLink>
                    </li>
                    <li class="nav-item">
                        <RouterLink to="/blog" class="nav-link">Blog</RouterLink>
                    </li>
                    <li class="nav-item">
                        <RouterLink to="/coins" class="nav-link" style="color: yellow;">Acheter des coins</RouterLink>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mon Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Mon Profil</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Me Déconnecter</a></li>
                        </ul>
                    </li>
                 
                </ul>

                <!-- afficher le bouton se connecter ou le bouton deconnexion -->
                

            </div>
        </div>
    </nav>
</template>

<style scoped>
    .navbar{
        height: 8vh;
    }
    .navbar-brand img{
        width: 50px;
    }

    .navbar{
        padding: 0 10%;
        background-color: #28a745;  
    }

    .navbar-nav{
        margin-left: auto;
    }

    .nav-link{
        color: white;
    }

    .nav-link:hover{
        color: white;
    }

    .dropdown-menu{
        background-color: #28a745;
    }

    .dropdown-item{
        color: white;
    }

    .dropdown-item:hover{
        color: white;
    }

    .btn{
        margin-left: 10px;
    }

    .btn-outline-light{
        color: white;
        border-color: white;    
    }

    .btn-outline-light:hover{
        color: black;
        background-color: white;
        border-color: white;
    }

    .btn-light{
        color: #28a745;
        background-color: white;
    }

    .btn-light:hover{
        color: white;
        background-color: #28a745;
    }




</style>