<template>
  <div
    class="flex flex-col justify-between items-start h-164 overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
  >
    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">
      {{ experience.position }}
    </h5>
    <p class="mb-3 font-normal text-gray-500">
      {{ experience.company }}
    </p>
    <p class="mb-3 font-normal text-gray-500">
      {{ experience.duration }}
    </p>
  </div>
</template>

<script setup>
import { ref } from "vue";
import Badge from "./Badge.vue";

const props = defineProps({
  experience: Object,
});
</script>
