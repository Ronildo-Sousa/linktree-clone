<template>
  <section class="flex justify-center">
    <div>
      <form @submit.prevent="submit">
        <div>
          <h3 class="text-3xl mb-2">Create an account for free</h3>
          <p>Free forever. No payment needed.</p>
        </div>
        <div class="flex flex-col">
          <input type="text" name="full_name" placeholder="Full Name" v-model="form.full_name">
          <small v-if="errors.full_name">{{ errors.full_name }}</small>
          <input type="text" name="user_name" placeholder="User Name" v-model="form.user_name">
          <small v-if="errors.user_name">{{ errors.user_name }}</small>
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
  name: "registerForm",
  props: {
      errors: Object
  },
  data() {
      return {
          form: {
              full_name: 'ronildo sousa',
              user_name: 'r0nildo',
              email: 'ronildo@email.com',
              password: '123'
          }
      }
  },
  methods: {
      submit() {
          this.$inertia.post(route('auth.register', this.form))
      }
  },
};
</script>

<style>
</style>
