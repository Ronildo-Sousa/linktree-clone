<template>
  <section class="flex">
      <SideMenu  />

      <LinkArea class="w-full h-screen overflow-y-scroll" :links="links" />

      <LinkDetails class="w-10/12" />
  </section>
</template>

<script>
import LinkArea from '../components/LinkArea.vue'
import SideMenu from '../components/SideMenu.vue'
import LinkDetails from '../components/LinkDetails.vue'

export default {
  components: { SideMenu, LinkArea, LinkDetails },
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
