<template>
  <div class="w-full text-center mt-14">
    <div>
      <button
        class="w-9/12 p-3 rounded-lg mr-4 bg-purple-600 text-white font-medium"
      >
        Add new Link
      </button>
      <button class="p-3 rounded-lg bg-purple-600 text-white">
        <i class="fa fa-check fa-lg"></i>
      </button>
    </div>
    <div v-if="Clicked" class="w-10/12 mx-auto mt-10">
      <LinkForm />
    </div>
  </div>
</template>

<script>
import LinkForm from "./LinkForm";

export default {
  name: "NewLink",
  components: { LinkForm },
  data() {
      return {
          Clicked: true
      }
  },
};
</script>
