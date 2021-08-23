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
      <div class="w-20 flex justify-between items-center md:w-full md:h-16 md:flex-col">
        <i class="far fa-comment-alt fa-lg text-gray-300"></i>
        <i class="fas fa-bullhorn fa-lg hidden text-gray-300 md:block"></i>
        <i class="fas fa-bars fa-lg md:hidden"></i>
      </div>
      <div class="hidden w-12 rounded-full overflow-hidden md:block">
        <img
          class="w-full"
          src="https://assets.production.linktr.ee/b0404d4ea84205b15bb65e5abf3d6b1acabd4795/images/default_profile_picture.png"
          alt="profile"
        />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SideMenu",
};
</script>
