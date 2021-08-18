<template>
  <section class="grid grid-cols-1 sm:grid-cols-3">
    <div class="h-20  sm:h-screen sm:w-80  overflow-hidden">
      <img class="sm:w-full sm:h-full object-cover" src="https://images.ctfassets.net/9018yy2heipq/34xwDRZIMgGLw3M3EpV7My/b8df71455f6541d373ce0fb9c28d24ef/01-Create-Account-1920x1920.png?w=1440&fm=webp" alt="linktree" />
    </div>

    <div class="p-5 h-screen overflow-scroll sm:col-span-2 sm:order-first">
      <form @submit.prevent="submit">
        <div class="mb-12">
          <h3 class="text-3xl mb-2">Create an account for free</h3>
          <p>Free forever. No payment needed.</p>
        </div>
        <div class="flex flex-col">
          <input type="text" name="full_name" class="p-3 mb-5 bg-gray-100 rounded" placeholder="Full Name" v-model="form.full_name">
          <small v-if="errors.full_name">{{ errors.full_name }}</small>
          <input type="text" name="user_name" class="p-3 mb-5 bg-gray-100 rounded" placeholder="User Name" v-model="form.user_name">
          <small v-if="errors.user_name">{{ errors.user_name }}</small>
          <input type="email" name="email" class="p-3 mb-5 bg-gray-100 rounded" placeholder="email" v-model="form.email">
          <small v-if="errors.email">{{ errors.email }}</small>
          <input type="password" name="password" class="p-3 mb-5 bg-gray-100 rounded" placeholder="password" v-model="form.password">
          <small v-if="errors.password">{{ errors.password }}</small>
          <div class="flex items-center mb-6 mt-8">
            <input type="checkbox" class="p-2 mr-2" name="terms">
            <p class="text-md text-gray-600 font-medium">By create an account you are agreeing to our <a href="#" class="underline">Terms and Conditions</a> and <a href="#" class="underline">Privacy Policy</a></p>
          </div>
          <button type="submit" class="p-3 bg-indigo-500 text-white rounded-xl font-bold">Sign up with email</button>
        </div>
      </form>
      <div class="text-center mt-10 p-2 text-sm font-medium text-gray-600 md:border-t-2 md:border-gray-300">
        <a href="#">Already have an account ?</a>
      </div>
    </div>
  </section>

  <!-- <div class="grid grid-cols-1 sm:grid-cols-3">
  <div class="bg-black h-20  sm:h-screen sm:w-80  overflow-hidden" style="max-width: 650px">
    <img class="sm:w-full sm:h-full object-cover" src="https://images.ctfassets.net/9018yy2heipq/34xwDRZIMgGLw3M3EpV7My/b8df71455f6541d373ce0fb9c28d24ef/01-Create-Account-1920x1920.png?w=1440&fm=webp" alt="linktree" />
  </div>
  <div class="bg-blue-500 sm:col-span-2 sm:order-first">
    <form action="">
      <h1 class="text-2xl">Create an account for free</h1>
      <input type="text">
      <input type="text">
      <input type="text">
      <input type="text">
    </form>
  </div>
</div> -->
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
