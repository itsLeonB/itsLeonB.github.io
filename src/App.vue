<script setup>
import Projects from "./components/Projects.vue";
import Experience from "./components/Experience.vue";
import Certification from "./components/Certification.vue";
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
        <a
          href="#"
          @click="scrollToAbout"
          class="text-sm font-semibold leading-6 text-gray-900"
          >About</a
        >
        <a
          href="#"
          @click="scrollToPortfolio"
          class="text-sm font-semibold leading-6 text-gray-900"
          >Portfolio</a
        >
        <a
          href="#"
          @click="scrollToContact"
          class="text-sm font-semibold leading-6 text-gray-900"
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
                href="#about"
                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                >About</a
              >
              <a
                href="#portfolio"
                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                >Portfolio</a
              >
              <a
                href="#contact"
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
      </div>
    </div>
  </section>

  <section id="about" class="h-screen mb-9 flex items-center justify-center">
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

  <section id="portfolio" class="flex items-center justify-center">
    <div class="mx-auto max-w-5xl text-left">
      <div class="flex flex-col gap-10">
        <div class="flex flex-col gap-5">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900">
            Projects
          </h2>
          <div class="flex overflow-x-scroll pb-10 hide-scroll-bar">
            <div class="flex flex-nowrap lg:mx-10 md:mx-5 mx-2 space-x-4">
              <Projects
                v-for="(project, index) in projects"
                :key="index"
                :project="project"
                class="inline-block p-6"
              />
            </div>
          </div>
        </div>
        <div class="flex flex-col gap-5">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900">
            Experience
          </h2>
          <div class="flex overflow-x-scroll pb-10 hide-scroll-bar">
            <div class="flex flex-nowrap lg:mx-10 md:mx-5 mx-2 space-x-4">
              <Experience
                v-for="(experience, index) in experiences"
                :key="index"
                :experience="experience"
                class="inline-block p-6"
              />
            </div>
          </div>
        </div>
        <div class="flex flex-col gap-5">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900">
            Certifications
          </h2>
          <div class="flex overflow-x-scroll pb-10 hide-scroll-bar">
            <div class="flex flex-nowrap lg:mx-10 md:mx-5 mx-2 space-x-4">
              <Certification
                v-for="(certification, index) in certifications"
                :key="index"
                :certification="certification"
                class="inline-block p-6"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="flex m-9">
    <div class="mx-auto max-w-5xl text-left m-9">
      <div class="flex flex-col gap-10 m-9">
        <div class="flex flex-col gap-9 m-9 items-center justify-center">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900">
            Contact me 👇
          </h2>
          <div class="flex flex-row gap-4">
            <div
              class="relative rounded-full px-5 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20"
            >
              <a
                href="mailto:ellionblessan@gmail.com"
                class="font-semibold text-indigo-600"
                ><span class="absolute inset-0" aria-hidden="true"></span
                >ellionblessan@gmail.com</a
              >
            </div>
            <div
              class="relative rounded-full px-5 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20"
            >
              <a class="font-semibold text-indigo-600"
                ><span class="absolute inset-0" aria-hidden="true"></span>+62
                823-0607-1010</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  components: {
    Projects,
    Certification,
    Experience,
  },

  data() {
    return {
      isMenuOpen: false,

      projects: [
        {
          title: "Electronic Medical Record System",
          description:
            "A web-based Electronic Medical Record systems that complies and integrated with Indonesia's FHIR implementation (SATUSEHAT).",
          tags: ["Laravel", "FHIR", "Back-end", "API", "Healthcare"],
          repository: "https://github.com/itsLeonB/rekam-medis-elektronik",
          link: "https://rme.digitalise.biz.id",
        },
        {
          title: "RemajaSehat",
          description:
            "An Android app for Posyandu management and female teenage health monitoring to prevent stunting in babies.",
          tags: ["Android", "Kotlin", "CRUD", "Healthcare"],
          repository: "https://github.com/itsLeonB/si-capstone",
        },
        {
          title: "Workout Recommender",
          description:
            "A recommender system for workout exercises based on text descriptions.",
          tags: ["TensorFlow", "BERT", "Machine Learning", "NLP", "FastAPI"],
          repository: "https://github.com/itsLeonB/workout-recommender",
        },
        {
          title: "COVID-19 Classifier",
          description:
            "A deep learning model for classifying COVID-19 from chest X-ray images.",
          tags: ["TensorFlow", "Computer Vision", "Deep Learning", "Flask"],
          repository: "https://github.com/itsLeonB/workout-recommender",
        },
      ],

      experiences: [
        {
          company: "Bangkit Academy 2023 by Google, GoTo, Traveloka",
          position: "Machine Learning Cohort (Graduated with Distinction)",
          duration: "February 2023 - July 2023",
        },
        {
          company:
            "Information Systems Department, Sepuluh Nopember Institute of Technology",
          position: "Predictive Modelling and Analytics Teaching Assistant",
          duration: "September 2023 - November 2023",
        },
      ],

      certifications: [
        {
          title: "Certified TensorFlow Developer",
          svgSrc: "/tensorflow.svg",
        },
        {
          title: "Google Data Analytics",
          svgSrc:
            "https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg",
        },
        {
          title: "Google IT Automation",
          svgSrc:
            "https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg",
        },
      ],
    };
  },
  methods: {
    toggleMenu() {
      this.isMenuOpen = !this.isMenuOpen;
    },

    scrollToAbout() {
      const element = document.getElementById("about");
      element.scrollIntoView({ behavior: "smooth" });
    },
    scrollToPortfolio() {
      const element = document.getElementById("portfolio");
      element.scrollIntoView({ behavior: "smooth" });
    },
    scrollToContact() {
      const element = document.getElementById("contact");
      element.scrollIntoView({ behavior: "smooth" });
    },
  },
};
</script>

<style scoped>
.hide-scroll-bar {
  -ms-overflow-style: none;
  scrollbar-width: none;
}
.hide-scroll-bar::-webkit-scrollbar {
  display: none;
}

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
