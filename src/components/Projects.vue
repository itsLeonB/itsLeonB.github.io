<template>
  <div
    class="flex flex-col justify-between items-start w-64 h-164 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
  >
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
      {{ project.title }}
    </h5>
    <p class="mb-3 font-normal text-gray-500">
      {{ project.description }}
    </p>
    <div class="space-x-1 mb-3 space-y-1">
      <Badge v-for="tag in project.tags" :key="tag" :text="tag" />
    </div>
    <div class="flex flex-row items-start justify-between gap-x-4 w-full">
      <a
        class="inline-flex text-sm font-semibold items-center text-indigo-600 hover:underline"
        :href="project.repository"
        target="_blank"
      >
        Repository
        <svg
          class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]"
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 18 18"
        >
          <path
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"
          />
        </svg>
      </a>
      <a
        class="inline-flex text-sm font-semibold items-center text-indigo-600 hover:underline"
        :href="project.link"
        target="_blank"
        v-if="project.link"
      >
        Demo
        <svg
          class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]"
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 18 18"
        >
          <path
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"
          />
        </svg>
      </a>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";
import Badge from "./Badge.vue";

const props = defineProps({
  project: Object,
});
</script>
