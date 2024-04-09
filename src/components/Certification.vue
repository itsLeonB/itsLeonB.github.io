<template>
  <div
    class="flex flex-row justify-between items-center w-64 h-164 max-w-xs overflow-hidden rounded-xl shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out gap-4"
  >
    <img
      :src="certification.svgSrc"
      :alt="certification.title"
      class="w-16 h-16"
    />
    <h5 class="text-xl font-bold tracking-tight text-gray-900">
      {{ certification.title }}
    </h5>
  </div>
</template>

<script setup>
import { ref } from "vue";
import Badge from "./Badge.vue";

const props = defineProps({
  certification: Object,
});
</script>
