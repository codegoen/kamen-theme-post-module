<template>
  <div
    class="
      grid
      py-4
      px-2
      gap-4
      shadow
      lg:px-8
      bg-white
      grid-cols-2
      items-center
      lg:grid-cols-12
    "
  >
    <div class="lg:col-span-2">
      <v-app-link :href="$route('post.home')" class="text-2xl font-bold"
        >KAMEN</v-app-link
      >
    </div>
    <div class="lg:hidden inline ml-auto">
      <button
        class="
          p-2
          rounded-md
          focus:ring-2
          focus:outline-none
          focus:ring-offset-2
          focus:ring-pink-500
        "
        @click.prevent="state.toggle"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="w-8 h-8 text-gray-800"
          fill="currentColor"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h16m-7 6h7"
          />
        </svg>
      </button>
    </div>
    <div class="col-span-7 mr-auto lg:inline-block hidden">
      <ul class="flex flex-row justify-center w-full space-x-20">
        <kamen-page-menu />
      </ul>
    </div>
    <div class="lg:col-span-3 md:col-span-6 lg:inline-block hidden ml-auto">
      <!-- search button -->
      <kamen-search-button class="w-72" @click.prevent="search.toggle" />
    </div>
  </div>
  <div
    :class="[state.open ? 'flex flex-col' : 'hidden']"
    class="shadow border-t bg-white divide-y divide-gray-200 lg:hidden"
  >
    <div class="p-4">
      <!-- search button -->
      <kamen-search-button class="w-full" @click.prevent="search.toggle" />
    </div>

    <ul class="flex flex-col divide-y divide-gray-200">
      <kamen-page-menu />
    </ul>
  </div>
</template>
<script setup>
import { useState } from "Kamen/stores/state";
import { useSearch } from "Kamen/stores/search";

const state = useState();
const search = useSearch();
</script>