<template>
  <div
    class="mx-auto max-w-2xl rounded-3xl ring-1 ring-gray-200 lg:mx-0 lg:flex lg:max-w-none"
  >
    <div class="p-8 sm:p-10 lg:flex-auto">
      <h3 class="text-2xl font-bold tracking-tight text-gray-900">
        {{ project.title }}
      </h3>
      <p class="mt-6 text-base leading-7 text-gray-600">
        {{ project.description }}
      </p>
      <p class="text-base leading-7 text-gray-600">
        {{ project.tags }}
      </p>
      <div class="mt-10 flex justify-between gap-x-4">
        <h4 class="flex-none text-sm font-semibold leading-6 text-indigo-600">
          {{ project.repository }}
        </h4>
        <a class="flex-none text-sm font-semibold leading-6 text-indigo-600">
          {{ project.link }} >
        </a>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";

const props = defineProps({
  project: Object,
});
</script>
