<template>
  <div
  class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in"
>
  <input
    type="checkbox"
    name="toggle"
    id="toggle"
    class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"
    :checked="isActiveItem"
  />
  <label
    for="toggle"
    class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"
  ></label>
</div>
<label for="toggle" class="text-xs text-gray-700"></label>
</template>

<script>
export default {
    name: 'SwitchButton',
    props: {
        isActiveItem: Boolean
    }
}
</script>

<style>

</style>
