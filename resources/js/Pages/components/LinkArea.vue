<template>
  <div>
     <ul class="flex p-4 border border-gray-300">
         <li class="ml-5 text-gray-500 border-b-4 border-gray-500">Links</li>
         <li class="ml-5 text-gray-500">Appearance</li>
         <li class="ml-5 text-gray-500">Settings</li>
         <li class="ml-5 text-gray-500">PRO</li>
     </ul>
     <div class="flex p-4 border-b border-gray-300">
         <p class="ml-5">Lifetime Analytics:</p>
         <span class="ml-5">
             Views: 0
         </span>
         <span class="ml-5">
             Clicks: 0
         </span>
         <span class="ml-5">

         </span>
     </div>
     <div class="flex flex-col justify-center items-center bg-gray-200">
         <NewLink />
     </div>
  </div>
</template>

<script>
import NewLink from './NewLink';


export default {
    name: 'LinkArea',
    components: {NewLink}
}
</script>
