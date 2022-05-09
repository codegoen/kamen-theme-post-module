<template>
  <div
    :class="{ 'flex justify-between items-center': rightText }"
    class="relative md:mb-[2em] mb-4"
  >
    <h1 class="text-3xl font-semibold">
      {{ title }}
    </h1>
    <span class="h-[6px] w-20 bg-pink-500 absolute -bottom-2" />

    <v-app-link
      href="#"
      v-show="rightText"
      class="text-md font-semibold text-gray-600"
    >
      {{ rightText }}
    </v-app-link>
  </div>
</template>
<script>
export default {
  props: {
    title: {
      type: String,
      required: true,
    },
    rightText: {
      type: String,
      default: null,
    },
  },
};
</script>