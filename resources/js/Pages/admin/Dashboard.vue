<template>
  <section>
      <SideMenu />
  </section>
</template>

<script>
import SideMenu from '../components/SideMenu.vue'
export default {
  components: { SideMenu },
    name: 'Dashboard',
    props: {
      links: Object
    },
    mounted(){
      console.log(this.links)
    }
}
</script>

<style>

</style>
