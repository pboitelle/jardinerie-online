<script>
import NavBar from '@/components/NavBar.vue'

export default {
  name: 'GardenView',
  components: {
    NavBar
  },
  data () {
    return {
      title: 'Garden'
    }
  },
  methods: {
    searchPlants () {
      this.displayedPlants = this.displayedPlants.filter(plant =>
        plant.title.toLowerCase().includes(this.searchTerm.toLowerCase())
      )
    }
  }
}
</script>

<template>
  
  <NavBar />
 

</template>

<style scoped>
</style>
