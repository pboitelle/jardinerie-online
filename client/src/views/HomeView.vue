<script setup>
import Login from '../components/Login.vue'
</script>

<template>
  <main class="main">

    <Login />
    
  </main>
</template>

<style scoped>
.main{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-image: url('../assets/img/background.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
