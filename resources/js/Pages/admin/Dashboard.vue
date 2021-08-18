<template>
  <section>
      <p>página dashboard</p>
  </section>
</template>

<script>
export default {
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
