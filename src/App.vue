<script setup>
import HelloWorld from "./components/HelloWorld.vue";
import Projects from "./components/Projects.vue";
</script>

<template>
  <header class="absolute inset-x-0 top-0 z-50">
    <nav
      class="flex items-center justify-end sm:justify-center p-6 sm:px-8"
      aria-label="Global"
    >
      <div class="flex sm:hidden">
        <button
          type="button"
          class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
          @click="toggleMenu"
        >
          <span class="sr-only">Open main menu</span>
          <svg
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            aria-hidden="true"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
            />
          </svg>
        </button>
      </div>
      <div class="hidden sm:flex sm:gap-x-12">
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900"
          >About</a
        >
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900"
          >Portfolio</a
        >
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900"
          >Contact</a
        >
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="sm:hidden" v-if="isMenuOpen" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div
        class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
      >
        <div class="flex items-center justify-end">
          <button
            type="button"
            class="-m-2.5 rounded-md p-2.5 text-gray-700"
            @click="toggleMenu"
          >
            <span class="sr-only">Close menu</span>
            <svg
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              aria-hidden="true"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12"
              />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a
                href="#"
                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                >About</a
              >
              <a
                href="#"
                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                >Portfolio</a
              >
              <a
                href="#"
                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                >Contact</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section id="home" class="h-screen flex items-center justify-center">
    <div class="mx-auto max-w-3xl">
      <!-- <div class="hidden sm:mb-8 sm:flex sm:justify-center">
        <div
          class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20"
        >
          Announcing our next round of funding.
          <a href="#" class="font-semibold text-indigo-600"
            ><span class="absolute inset-0" aria-hidden="true"></span>Read more
            <span aria-hidden="true">&rarr;</span></a
          >
        </div>
      </div> -->
      <div class="text-center">
        <div
          class="flex flex-col lg:flex-row items-center justify-center gap-10"
        >
          <img
            src="/leon.webp"
            alt="Leon"
            class="rounded-full w-32 h-32 lg:w-48 lg:h-48"
          />
          <div>
            <h1
              class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl"
            >
              Hi, I'm Leon 👋
            </h1>
            <p class="mt-6 text-lg leading-8 text-gray-600">
              I'm a Software Engineer and Data Science enthusiast based in
              Indonesia. I make web apps and mobile apps coupled with Machine
              Learning capabilities.
            </p>
          </div>
        </div>
        <!-- <div class="mt-10 flex items-center justify-center gap-x-6">
          <a
            href="#"
            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            >Get started</a
          >
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900"
            >Learn more <span aria-hidden="true">→</span></a
          >
        </div> -->
      </div>
    </div>
  </section>

  <section id="about" class="h-screen flex items-center justify-center">
    <div class="mx-auto max-w-5xl">
      <div class="text-left">
        <div class="flex flex-col gap-10">
          <div>
            <h2 class="text-3xl font-bold tracking-tight text-gray-900">
              About me
            </h2>
            <p class="mt-6 text-sm text-gray-600 sm:text-lg">
              Results-oriented individual with a strong foundation in Web
              Development and Machine Learning. Adept at leveraging advanced
              technical skills to develop innovative solutions that enhance
              business processes and user experiences. Proven ability to solve
              complex problems, design and implement machine learning models,
              and integrate predictive analytics into web applications.
              Proficient in programming languages such as PHP and Python.
              Seeking opportunities to contribute my skills and knowledge to
              dynamic projects, driving impactful results in the intersection of
              Web Development and Machine Learning.
            </p>
          </div>
          <div>
            <h2 class="text-3xl font-bold tracking-tight text-gray-900">
              My Skills
            </h2>
            <div class="hidden md:block">
              <div>
                <p class="mt-6 text-sm text-gray-600 sm:text-lg">
                  Programming Languages:
                </p>
                <div class="flex flex-wrap gap-1 mt-3">
                  <img
                    src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white"
                    alt="PHP"
                  />
                  <img
                    src="https://img.shields.io/badge/python-3670A0?style=for-the-badge&logo=python&logoColor=ffdd54"
                    alt="Python"
                  />
                  <img
                    src="https://img.shields.io/badge/kotlin-%237F52FF.svg?style=for-the-badge&logo=kotlin&logoColor=white"
                    alt="Kotlin"
                  />
                  <img
                    src="https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white"
                    alt="HTML5"
                  />
                  <img
                    src="https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white"
                    alt="CSS3"
                  />
                  <img
                    src="https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E"
                    alt="JavaScript"
                  />
                  <img
                    src="https://img.shields.io/badge/java-%23ED8B00.svg?style=for-the-badge&logo=openjdk&logoColor=white"
                    alt="Java"
                  />
                </div>
              </div>
              <div class="lg:grid lg:grid-cols-3 lg:gap-1 lg:mt-3">
                <div class="">
                  <p class="mt-6 text-sm text-gray-600 sm:text-lg">
                    Web Development:
                  </p>
                  <div class="flex flex-wrap gap-1 mt-3">
                    <img
                      src="https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white"
                      alt="Laravel"
                    />
                    <img
                      src="https://img.shields.io/badge/FastAPI-005571?style=for-the-badge&logo=fastapi"
                      alt="FastAPI"
                    />
                    <img
                      src="https://img.shields.io/badge/flask-%23000.svg?style=for-the-badge&logo=flask&logoColor=white"
                      alt="Flask"
                    />
                    <img
                      src="https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=white"
                      alt="TailwindCSS"
                    />
                    <img
                      src="https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&logo=postman&logoColor=white"
                      alt="Postman"
                    />
                  </div>
                </div>
                <div>
                  <p class="mt-6 text-sm text-gray-600 sm:text-lg">
                    Data Science & ML Engineering:
                  </p>
                  <div class="flex flex-wrap gap-1 mt-3">
                    <img
                      src="https://img.shields.io/badge/TensorFlow-%23FF6F00.svg?style=for-the-badge&logo=TensorFlow&logoColor=white"
                      alt="TensorFlow"
                    />
                    <img
                      src="https://img.shields.io/badge/Keras-%23D00000.svg?style=for-the-badge&logo=Keras&logoColor=white"
                      alt="Keras"
                    />
                  </div>
                </div>
                <div>
                  <p class="mt-6 text-sm text-gray-600 sm:text-lg">
                    Mobile Development:
                  </p>
                  <div class="flex flex-wrap gap-1 mt-3">
                    <img
                      src="https://img.shields.io/badge/Android-3DDC84?logo=android&logoColor=white&style=for-the-badge"
                      alt="Android"
                    />
                    <img
                      src="https://img.shields.io/badge/Jetpack%20Compose-4285F4?logo=jetpackcompose&logoColor=white&style=for-the-badge"
                      alt="Jetpack Compose"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="md:hidden">
              <div class="flex flex-wrap gap-1 mt-3">
                <img
                  src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white"
                  alt="PHP"
                />
                <img
                  src="https://img.shields.io/badge/python-3670A0?style=for-the-badge&logo=python&logoColor=ffdd54"
                  alt="Python"
                />
                <img
                  src="https://img.shields.io/badge/kotlin-%237F52FF.svg?style=for-the-badge&logo=kotlin&logoColor=white"
                  alt="Kotlin"
                />
                <img
                  src="https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white"
                  alt="HTML5"
                />
                <img
                  src="https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white"
                  alt="CSS3"
                />
                <img
                  src="https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E"
                  alt="JavaScript"
                />
                <img
                  src="https://img.shields.io/badge/java-%23ED8B00.svg?style=for-the-badge&logo=openjdk&logoColor=white"
                  alt="Java"
                />
                <img
                  src="https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white"
                  alt="Laravel"
                />
                <img
                  src="https://img.shields.io/badge/FastAPI-005571?style=for-the-badge&logo=fastapi"
                  alt="FastAPI"
                />
                <img
                  src="https://img.shields.io/badge/flask-%23000.svg?style=for-the-badge&logo=flask&logoColor=white"
                  alt="Flask"
                />
                <img
                  src="https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=white"
                  alt="TailwindCSS"
                />
                <img
                  src="https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&logo=postman&logoColor=white"
                  alt="Postman"
                />
                <img
                  src="https://img.shields.io/badge/TensorFlow-%23FF6F00.svg?style=for-the-badge&logo=TensorFlow&logoColor=white"
                  alt="TensorFlow"
                />
                <img
                  src="https://img.shields.io/badge/Keras-%23D00000.svg?style=for-the-badge&logo=Keras&logoColor=white"
                  alt="Keras"
                />
                <img
                  src="https://img.shields.io/badge/Android-3DDC84?logo=android&logoColor=white&style=for-the-badge"
                  alt="Android"
                />
                <img
                  src="https://img.shields.io/badge/Jetpack%20Compose-4285F4?logo=jetpackcompose&logoColor=white&style=for-the-badge"
                  alt="Jetpack Compose"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio" class="h-screen flex items-center justify-center">
    <div class="mx-auto w-full text-left">
      <div class="flex flex-col gap-10">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900">
          Projects
        </h2>
        <div class="flex sm:flex-row justify-between">
          <Projects
            v-for="(project, index) in projects"
            :key="index"
            :project="project"
          />
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  components: {
    Projects,
  },

  data() {
    return {
      isMenuOpen: false,

      projects: [
        {
          title: "Project 1",
          description: "This is a description of project 1",
          tags: ["tag1", "tag2"],
          repository: "repo",
          link: "demo",
        },
        {
          title: "Project 2",
          description: "This is a description of project 2",
          tags: ["tag1", "tag2"],
          repository: "",
          link: "",
        },
        {
          title: "Project 3",
          description: "This is a description of project 3",
          tags: ["tag1", "tag2"],
          repository: "",
          link: "",
        },
      ],
    };
  },
  methods: {
    toggleMenu() {
      this.isMenuOpen = !this.isMenuOpen;
    },
  },
};
</script>

<style scoped>
.logo {
  height: 6em;
  padding: 1.5em;
  will-change: filter;
  transition: filter 300ms;
}
.logo:hover {
  filter: drop-shadow(0 0 2em #646cffaa);
}
.logo.vue:hover {
  filter: drop-shadow(0 0 2em #42b883aa);
}
</style>
