<template>
  <li>
    <v-app-link
      :href="$route('post.home')"
      :class="active('KamenTheme::index')"
      class="flex flex-row items-center font-semibold p-4 lg:p-0"
    >
      <v-icon
        name="HomeIcon"
        type="outline"
        class="w-6 h-6 mr-2 font-semibold"
      />
      Home
    </v-app-link>
  </li>
  <li>
    <v-app-link
      :href="$route('post.video')"
      :class="active('KamenTheme::video')"
      class="flex flex-row items-center font-semibold p-4 lg:p-0"
    >
      <v-icon
        name="FilmIcon"
        type="outline"
        class="w-6 h-6 mr-2 font-semibold"
      />
      Video
    </v-app-link>
  </li>
  <li>
    <v-app-link
      href="#"
      class="flex flex-row items-center font-semibold p-4 lg:p-0"
    >
      <v-icon
        name="PresentationChartBarIcon"
        type="outline"
        class="w-6 h-6 mr-2 font-semibold"
      />
      Pools
    </v-app-link>
  </li>
  <li>
    <v-app-link
      href="#"
      class="flex flex-row items-center font-semibold p-4 lg:p-0"
    >
      <v-icon
        name="BookOpenIcon"
        type="outline"
        class="w-6 h-6 mr-2 font-semibold"
      />
      Magazine
    </v-app-link>
  </li>
</template>
<script setup>
import { usePage } from "@inertiajs/inertia-vue3";

const page = usePage();

const active = (component) => {
  return {
    "text-pink-500": page.component.value === component,
  };
};
</script>