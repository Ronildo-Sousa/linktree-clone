<template>
      <div class=" text-center border-2 border-transparent bg-green-400 text-white w-full p-4 font-medium text-lg hover:bg-white hover:text-green-400 hover:border-green-400">
          <slot></slot>
      </div>
</template>

<script>
export default {
    name: 'ButtonSlot'
}
</script>
