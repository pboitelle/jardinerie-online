<script>
import NavBar from '@/components/NavBar.vue'
import ListCards from '@/components/ListCards.vue'

export default {
  name: 'AchatCoinsView',
  components: {
    NavBar,
    ListCards
  },
  data () {
    return {
      title: 'Achat de coins',
      items1: [
        { id: 1, text: "Achat de 10 coins", img: "/src/assets/img/coin.png" },
        { id: 2, text: "Achat de 20 coins", img: "src/assets/img/coin.png" },
        { id: 3, text: "Achat de 30 coins", img: "src/assets/img/coin.png" }
      ],
    }
  },
  methods: {
    
  }
}
</script>

<template>
  
  <NavBar />
 
  <div class="container">
    <h1>{{ title }}</h1>
    <ListCards :items="items1" />
  </div>


</template>

<style scoped>
</style>
