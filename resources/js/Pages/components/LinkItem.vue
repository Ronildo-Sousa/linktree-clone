<template>
  <div class="w-10/12 flex p-3 bg-white rounded-lg mb-3 mt-3">
      <div class="flex items-center justify-center p-1  border-r-2  border-r-gray-300">
          <i class="fa fa-check text-gray-500"></i>
      </div>
      <div class="ml-2">
          <div>
              <div class="mb-3">
                  <p>{{ data.placeholder }}</p>
                  <input type="radio" name="" id="">
              </div>

              <p>{{ data.url }}</p>
          </div>
          <div  class="w-full mt-4 text-right text-gray-500">
              <i class="fa fa-trash"></i>
          </div>
      </div>
  </div>
</template>

<script>
export default {
    name: 'LinkForm',
    props: {
        data: Object
    },
    data() {
        return {}
    },
    methods: { },
}
</script>
