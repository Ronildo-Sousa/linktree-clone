<template>
  <section class="flex flex-col">
    <div class="flex justify-between p-3 border border-gray-300">
      <p>
        <strong>My Linktree: </strong>
        <a :href="appUrl+user.user_name" target="_blank" class="underline">{{ appUrl }}{{user.user_name }}</a>
      </p>
      <button class="border border-gray-300 p-1 rounded-md">share</button>
    </div>
    <div class="p-5 mt-8">
      <div
        class="mx-auto p-2 border-8 border-black rounded-xl"
        style="height: 510px; width: 270px"
      >
        <div class="h-full flex flex-col justify-between p-2">
          <div>
            <div class="w-20 rounded-full mx-auto overflow-hidden mb-4">
              <img
                class="w-full"
                src="https://assets.production.linktr.ee/b0404d4ea84205b15bb65e5abf3d6b1acabd4795/images/default_profile_picture.png"
                alt="profile"
              />
            </div>
            <p class="text-center font-semibold">@{{user.user_name}}</p>
            <ButtonSlot
            v-for="(link, index) in links" :key="index"
            :admin="true" class="mt-4">
                <a :href="link.url">{{ link.placeholder }}</a>
            </ButtonSlot>
          </div>
          <div class="w-20 mx-auto">
            <img
              src="https://logodownload.org/wp-content/uploads/2019/09/linktree-logo.png"
              alt="logo"
            />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import ButtonSlot from './ButtonSlot.vue';
export default {
    name: "LinkDetails",
  components: { ButtonSlot },
  data() {
      return {
          appUrl: 'http://link3-clone.herokuapp.com/user/',
      }
  },
  props: {
      links: Object,
      user: Object,
  }
};
</script>
