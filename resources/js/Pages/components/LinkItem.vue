<template>
  <div class="w-10/12 flex p-3 bg-white rounded-lg mb-3 mt-3">
    <div
      class="
        w-5
        flex
        items-center
        justify-center
        p-1
        border-r-2 border-r-gray-300
      "
    >
      <i class="fas fa-ellipsis-v fa-lg mr-3 text-gray-400"></i>
    </div>
    <div class="ml-2 mt-3">
      <div class="flex justify-between  mb-3" style="width: 550px">
        <p class="font-medium">{{ data.placeholder }}</p>
        <div @click="switchLink">
            <SwitchButton
             :isActiveItem="data.is_active" />
        </div>
      </div>

      <p>{{ data.url }}</p>
      <div
      @click="deleteLink"
      class="w-full mt-4 text-right cursor-pointer text-gray-400 hover:text-red-500">
        <i class="fa fa-trash"></i>
      </div>
    </div>
  </div>
</template>

<script>
import SwitchButton from "./SwitchButton.vue";
export default {
  name: "LinkForm",
  components: { SwitchButton },
  props: {
    data: Object,
  },
  data() {
    return {};
  },
  methods: {
      deleteLink(){
          this.$inertia.delete(route('admin.destroy', this.data))
      },
      switchLink(){
          this.$inertia.put(route('admin.update', this.data))
      }
  },
};
</script>
