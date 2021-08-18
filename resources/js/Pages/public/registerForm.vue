<template>
  <section class="grid grid-cols-1 sm:grid-cols-3">
    <div class="h-20  sm:h-screen  overflow-hidden">
      <img class="sm:w-full sm:h-full object-cover" src="https://images.ctfassets.net/9018yy2heipq/34xwDRZIMgGLw3M3EpV7My/b8df71455f6541d373ce0fb9c28d24ef/01-Create-Account-1920x1920.png?w=1440&fm=webp" alt="linktree" />
    </div>

    <div class="p-5 h-screen sm:overflow-scroll sm:col-span-2 sm:order-first">
        <div class="hidden sm:block ml-10  mb-10">
            <a href="#">
                <img style="width: 100px" src="https://logodownload.org/wp-content/uploads/2019/09/linktree-logo.png" alt="logo">
            </a>
        </div>
      <form @submit.prevent="submit" class="sm:pl-24 sm:pr-24 sm:mt-10">
        <div class="mb-12">
          <h3 class="text-3xl mb-2">Create an account for free</h3>
          <p class="text-gray-600">Free forever. No payment needed.</p>
        </div>
        <div class="flex flex-col">
          <input @keyup="clearErrors()" type="text" name="full_name" :class="errors.full_name ? '' : 'mb-5'" class="p-3 bg-gray-100 rounded" placeholder="Full Name" v-model="form.full_name">
          <small v-if="errors.full_name" class="text-red-500 mb-5 ml-3">{{ errors.full_name }}</small>

          <input @keyup="clearErrors()" type="text" name="user_name" :class="errors.user_name ? '' : 'mb-5'" class="p-3 bg-gray-100 rounded" placeholder="User Name" v-model="form.user_name">
          <small v-if="errors.user_name" class="text-red-500 mb-5 ml-3">{{ errors.user_name }}</small>

          <input @keyup="clearErrors" type="email" name="email" :class="errors.email ? '' : 'mb-5'" class="p-3 bg-gray-100 rounded" placeholder="email" v-model="form.email">
          <small v-if="errors.email" class="text-red-500 mb-5 ml-3">{{ errors.email }}</small>

          <input @keyup="clearErrors" type="password" name="password" :class="errors.password ? '' : 'mb-5'" class="p-3 bg-gray-100 rounded" placeholder="password" v-model="form.password">
          <small v-if="errors.password" class="text-red-500 mb-5 ml-3">{{ errors.password }}</small>

          <div class="flex items-center mb-6 mt-8">
            <input type="checkbox" class="p-2 mr-2" checked name="terms">
            <p class="text-md text-gray-600">By create an account you are agreeing to our <a href="#" class="underline">Terms and Conditions</a> and <a href="#" class="underline">Privacy Policy</a></p>
          </div>
          <button type="submit" :class="[formIsFilled ? 'bg-indigo-500 text-white' : 'bg-gray-300 text-gray-400 cursor-not-allowed']"  class="p-3  rounded-xl font-bold">Sign up with email</button>
        </div>
      </form>
      <div class="text-center mt-10 p-2 pb-6 text-sm  text-gray-600 md:border-t-2 md:border-gray-300">
        <a href="#">Already have an account ?</a>
      </div>
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
              full_name: 'ronildo',
              user_name: 'r0nildo',
              email: 'ronildo@email.com',
              password: '123'
          }
      }
  },
  methods: {
      submit() {
          if(this.formIsFilled){
            this.$inertia.post(route('auth.register', this.form))
          }
      },
      clearErrors(){
          this.errors.full_name = ''
          this.errors.user_name = ''
          this.errors.email = ''
          this.errors.password = ''
      }
  },
  computed: {
      formIsFilled(){
          if(this.form.full_name !== '' && this.form.user_name !== '' && this.form.email !== '' && this.form.password !== ''){
              return true;
          }
          return false;
      }
  }
};
</script>

<style>
</style>
