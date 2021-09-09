<template>
  <div class="flex p-3 bg-white rounded-lg">
      <div class="flex items-center justify-center p-1  border-r-2  border-r-gray-300">
          <i class="fas fa-ellipsis-v fa-lg mr-3 text-gray-400"></i>
      </div>
      <div class="ml-2">
          <div>
              <div class="mb-3">
                  <input @blur="save" type="text" class="p-1 border border-gray-300 rounded-lg" style="width: 500px" placeholder="Title" v-model="form.placeholder">
              </div>

              <input @blur="save" type="url" name="" class="w-full p-1 border border-gray-300 rounded-lg" placeholder="URL" v-model="form.url">
          </div>
      </div>
  </div>
</template>

<script>

export default {
    name: 'LinkForm',
    data() {
        return {
            form: {
                placeholder: '',
                url: ''
            }
        }
    },
    methods: {
        isFill(){
            if ((this.form.placeholder.length > 0) && (this.form.url.length > 0)) {
                return true;
            }
            return false;
        },
        save(){
            if(this.isFill()){
                this.$inertia.post(route('admin.store', this.form));
                this.$emit('closeForm')
            }
        }
    },
}
</script>
