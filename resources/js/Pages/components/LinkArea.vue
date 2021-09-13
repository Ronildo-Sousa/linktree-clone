<template>
  <div>
     <ul class="flex p-4 border border-gray-300 cursor-pointer">
         <li class="ml-5 text-gray-500 border-b-4 border-gray-500 hover:text-gray-700">Links</li>
         <li class="ml-5 text-gray-500 hover:text-gray-700 ">Appearance</li>
         <li class="ml-5 text-gray-500 hover:text-gray-700 ">Settings</li>
         <li class="ml-5 text-gray-500 hover:text-gray-700 ">PRO</li>
     </ul>
     <div class="flex p-4 border-b border-gray-300">
         <p class="ml-5">Lifetime Analytics:</p>
         <span class="ml-5">
             <i class="fas fa-circle text-green-500" style="font-size: 5pt"></i>
             Views: 0
         </span>
         <span class="ml-5">
            <i class="fas fa-circle text-purple-600" style="font-size: 5pt"></i>
             Clicks: 0
         </span>
         <span class="ml-5">

         </span>
     </div>
     <div class="flex flex-col justify-center items-center bg-gray-200">
         <NewLink />
         <LinkItem v-for="link in links" :data="link" :key="link.id" />
     </div>
  </div>
</template>

<script>
import NewLink from './NewLink';
import LinkItem from './LinkItem';

export default {
    name: 'LinkArea',
    components: {NewLink, LinkItem},
    props: {
        links: Object,
        user_name: String
    }
}
</script>
