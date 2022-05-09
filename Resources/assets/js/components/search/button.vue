<template>
  <div
    @click.prevent="$emit('open')"
    class="
      h-10
      text-sm
      bg-white
      rounded-lg
      items-center
      flex flex-row
      cursor-pointer
      hover:bg-gray-200
      border-2 border-gray-300
      focus:outline-none focus:ring-2 focus:ring-pink-500
    "
  >
    <v-icon name="SearchIcon" class="text-gray-600 w-6 h-6 ml-3" />
    <span class="ml-2 font-medium text-gray-400">Quick Search...</span>
    <span
      class="ml-auto mr-3 font-bold bg-gray-300 rounded-md text-gray-600 p-1"
      >{{ keyboardShortcut }}</span
    >
  </div>
</template>
<script setup>
defineEmits(["open"]);

const isAppleOS = () => {
  const platform =
    navigator?.userAgentData?.platform || navigator?.platform || "unknown";

  return /(Mac|iPhone|iPod|iPad)/i.test(platform);
};

const keyboardShortcut = isAppleOS() ? "⌘K" : "Ctrl K";
</script>