<template>
  <section>
    <div
      class="w-screen flex justify-center mt-6 mb-10 sm:justify-start sm:ml-24"
    >
      <a :href="route('home')">
        <img
          style="width: 100px"
          src="https://logodownload.org/wp-content/uploads/2019/09/linktree-logo.png"
          alt="logo"
        />
      </a>
    </div>
    <div class="sm:p-10 sm:mx-auto" style="max-width: 700px">
      <form
        @submit.prevent="submit"
        class="
          flex flex-col
          p-4
          sm:p-16
          sm:rounded-xl
          sm:border sm:border-gray-300
        "
      >
        <h3 class="text-3xl mb-5 text-center sm:mb-14">
          Sign in to your Linktree account
        </h3>
        <span
          v-if="errors.credentials"
          class="
            bg-red-400
            text-white text-center
            rounded
            p-2
            font-medium
            mb-5
            -mt-5
          "
          >{{ errors.credentials }}</span
        >
        <input
          @keyup="clearErrors"
          type="email"
          name="email"
          :class="errors.email ? '' : 'mb-5'"
          class="p-3 bg-gray-100 rounded"
          placeholder="Email"
          v-model="form.email"
        />
        <small v-if="errors.email" class="text-red-500 mb-5 ml-3">{{
          errors.email
        }}</small>

        <input
          @keyup="clearErrors"
          type="password"
          name="password"
          :class="errors.password ? '' : 'mb-5'"
          class="p-3 bg-gray-100 rounded"
          placeholder="Password"
          v-model="form.password"
        />
        <small v-if="errors.password" class="text-red-500 mb-5 ml-3">{{
          errors.password
        }}</small>

        <button
          type="submit"
          :class="[
            formIsFilled
              ? 'bg-indigo-500 text-white'
              : 'bg-gray-300 text-gray-400 cursor-not-allowed',
          ]"
          class="p-3 rounded-xl font-bold"
        >
          Sign in
        </button>

        <a href="#" class="text-center mt-3 text-gray-600 font-medium"
          >Forgot password?</a
        >

        <div class="mt-14 text-center">
          <p class="text-gray-600">
            Don't have an account?
            <a
              :href="route('auth.register')"
              class="underline text-gray-900 font-medium cursor-pointer"
              >Create One</a
            >
          </p>
        </div>
      </form>
    </div>
  </section>
</template>

<script>
export default {
  name: "loginForm",
  props: {
    errors: Object,
  },
  data() {
    return {
      form: {
        email: "",
        password: "",
      },
    };
  },
  methods: {
    submit() {
      if (this.formIsFilled) {
        this.$inertia.post(route("auth.login", this.form));
      }
    },
    clearErrors() {
      this.errors.email = "";
      (this.errors.password = ""), (this.errors.credentials = "");
    },
  },
  computed: {
    formIsFilled() {
      if (
        this.form.full_name !== "" &&
        this.form.user_name !== "" &&
        this.form.email !== "" &&
        this.form.password !== ""
      ) {
        return true;
      }
      return false;
    },
  },
};
</script>

<style>
</style>
