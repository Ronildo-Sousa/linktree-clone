<template>
  <div
    class="
      w-screen
      md:w-16
      md:h-screen
      flex
      md:flex-col
      justify-between
      items-center
      p-2
      border border-gray-300
    "
  >
    <div class="w-7 md:mt-3">
      <img src="https://img.icons8.com/color/452/linktree.png" alt="logo" />
    </div>

    <div class="flex flex-col items-center justify-between md:h-36 md:mb-5">
      <div
        class="
          w-20
          flex
          justify-between
          items-center
          md:w-full
          md:h-16
          md:flex-col
        "
      >
        <i class="far fa-comment-alt fa-lg text-gray-300"></i>
        <i class="fas fa-bullhorn fa-lg hidden text-gray-300 md:block"></i>
        <i class="fas fa-bars fa-lg md:hidden"></i>
      </div>
      <div
        class="dropdown-container hidden w-12 rounded-full cursor-pointer  overflow-hidden md:block"
      >
        <img
          class="w-full"
          src="https://assets.production.linktr.ee/b0404d4ea84205b15bb65e5abf3d6b1acabd4795/images/default_profile_picture.png"
          alt="profile"
        />
        <div

          class="
          dropdown-menu
          invisible
            absolute
            w-80
            h-56
            p-3
            -mt-44
            ml-12
            flex flex-col
            justify-between
            rounded-sm
            bg-white
            shadow-2xl
          "
          style="margin-top: -210px"
        >
          <p
            class="
              font-medium
              text-gray-600
              p-2
              cursor-pointer
              rounded
              hover:bg-gray-100
              hover:text-purple-500
            "
          >
            My Account
          </p>
          <p
            @click="logout"
            class="
              font-medium
              text-gray-600
              p-2
              cursor-pointer
              rounded
              hover:bg-gray-100
              hover:text-purple-500
            "
          >
            Logout
          </p>
          <p class="font-bold text-sm">TREES</p>
          <div
            class="
              flex
              justify-between
              items-center
              p-2
              cursor-pointer
              rounded-md
              text-lg
            "
            style="background: #05e876"
          >
            <p>@{{ user_name }}</p>
            <i class="fas fa-star text-xs text-yellow-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SideMenu",
  props: {user_name: String},
  data() {
      return {
          openMenu: false
      }
  },
  methods: {
    logout() {
      this.$inertia.post(route("auth.logout"));
    }
  },
};
</script>
