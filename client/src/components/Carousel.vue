<script setup>
</script>

<template>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img id="moto1" src="../assets/img/garden1.jpg" class="d-block w-100" alt="moto1">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Explorez le monde !</h2>
                </div>
            </div>

            <div class="carousel-item">
                <img id="moto2" src="../assets/img/garden1.jpg" class="d-block w-100" alt="motos2">
            </div>

            <div class="carousel-item">
                <img id="moto3" src="../assets/img/garden1.jpg" class="d-block w-100" alt="moto3">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Moto en promotion</h2>
                    <p>Profitez-en tous l'été !</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
</template>

<style scoped>
    .carousel-item {
        height: 700px;
    }
    .carousel-item img{
        height: 100%;
        object-fit: cover;
        transition: all 0.5s ease;
    }
    .carousel-item img#moto1{
        height: 100%;
        object-fit: cover;
        object-position: bottom;
    }
    .carousel-item img#moto2{
        height: 100%;
        object-fit: cover;
    }
    .carousel-item img#moto3{
        height: 100%;
        object-fit: cover;
    }
</style>