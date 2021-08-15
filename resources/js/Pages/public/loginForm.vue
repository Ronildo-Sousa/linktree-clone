<template>
  <section class="flex justify-center">
    <div>
      <form @submit.prevent="submit">
        <div>
          <h3 class="text-3xl mb-2">Create an account for free</h3>
          <p>Free forever. No payment needed.</p>
        </div>
        <div class="flex flex-col">
          <input type="email" name="email" placeholder="email" v-model="form.email">
          <small v-if="errors.email">{{ errors.email }}</small>
          <input type="password" name="password" placeholder="password" v-model="form.password">
          <small v-if="errors.password">{{ errors.password }}</small>
          <button type="submit">enviar</button>
        </div>

      </form>
    </div>
  </section>
</template>

<script>
export default {
  name: "loginForm",
  props: {
      errors: Object
  },
  data() {
      return {
          form: {
              email: 'ronildo@email.com',
              password: '123'
          }
      }
  },
  methods: {
      submit() {
          this.$inertia.post(route('auth.login', this.form))
      }
  },
};
</script>

<style>
</style>
