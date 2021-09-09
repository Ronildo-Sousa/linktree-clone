<template>
  <div class="md:max-w-3xl mx-auto">
    <div class="h-screen flex flex-col justify-between p-10">
      <div>
        <div class="mb-8">
          <div class="w-24 rounded-full mx-auto overflow-hidden mb-4">
            <img
              class="w-full"
              src="https://assets.production.linktr.ee/b0404d4ea84205b15bb65e5abf3d6b1acabd4795/images/default_profile_picture.png"
              alt="profile"
            />
          </div>
          <p class="text-center text-lg font-semibold">@{{ user }}</p>
        </div>
        <div>
          <ButtonSlot
          v-for="(link, index) in links" :key="index" class="mb-3">
           <a :href="link.url">{{ link.placeholder }}</a>
          </ButtonSlot>
        </div>
      </div>
      <div class="w-28 mx-auto">
        <img
          src="https://logodownload.org/wp-content/uploads/2019/09/linktree-logo.png"
          alt="logo"
        />
      </div>
    </div>
  </div>
</template>

<script>
import ButtonSlot from "./ButtonSlot.vue";
export default {
  components: { ButtonSlot },
  name: "LinkTree",
  props: {
    links: Object,
    user: String,
  },
  methods: {
      handleLink(event){

      }
  },
};
</script>
