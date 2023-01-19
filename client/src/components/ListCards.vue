<script setup>
</script>

<template>
    <div class="row">
        <div class="col-6">
            <div class="card mb-3">
                <img src="../assets/img/promo1.jpg" class="card-img-top" alt="promo1">
                <div class="card-body">
                    <h5 class="card-title">Aprilia SR-GT 125</h5>
                    <p class="card-text">400 € d'avantages client sous forme d'aide à la reprise</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <img src="../assets/img/promo2.jpg" class="card-img-bottom" alt="promo2">
                <div class="card-body">
                    <h5 class="card-title">Aprilia Tuono V4 1100</h5>
                    <p class="card-text">750 € d'avantages client sous forme d'aide à la reprise</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <img src="../assets/img/promo3.jpg" class="card-img-bottom" alt="promo3">
                <div class="card-body">
                    <h5 class="card-title">Aprilia Tuono 660</h5>
                    <p class="card-text">660 € d'avantages client jusqu'au 31 mai 2022, soit 9 939 € au lieu de 10 599</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <img src="../assets/img/promo4.jpg" class="card-img-bottom" alt="promo4">
                <div class="card-body">
                    <h5 class="card-title">Aprilia Tuono V4 1100</h5>
                    <p class="card-text">Jusqu'au 30 septembre 2021, IMU et frais de mise à la route offerts, soit un cadeau d'une valeur de 500 à 750 € pour une moto affichée à 10 550 €</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.row{
    margin: 0;
    padding: 0;
}
.card {
    cursor: pointer;
    margin: 50px 100px 10px 100px;
    height: 500px;
    padding: 0;
    color: #000;
    box-shadow: 10px 5px 5px #000;
}
.card:hover {
    transition: all 1s ease;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}
.card img {
    height: 70%;
    transform: scale(1);
    transition: all 1s ease;
}
.card img:hover{
    transform: scale(0.8);
    transition: all 1s ease;
}
.card-body{
    height: 30%;
}
</style>