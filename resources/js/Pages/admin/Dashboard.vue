<template>
  <section class="flex">
      <!-- <SideMenu  /> -->

      <LinkArea class="w-full h-screen overflow-y-scroll" :links="links" />

      <!-- <LinkDetails class="w-8/12"  :links="active_links" :user="user" /> -->
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
      links: Object,
      active_links: Object,
      user: Object,
    }
}
</script>

<style>

</style>
