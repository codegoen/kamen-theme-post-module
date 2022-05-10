<template>
  <div class="relative">
    <v-app-link
      :href="$route('dashboard.dashboard')"
      class="
        bg-pink-500/80
        text-white
        py-2
        px-3
        fixed
        bottom-5
        right-5
        rounded-lg
        flex flex-row
        items-center
        focus:ring-2
        focus:ring-offset-2
        focus:ring-pink-500/80
        focus:ring-offset-current
      "
    >
      <v-icon name="LoginIcon" type="outline" class="w-8 h-8" />
      <span class="ml-2">Back to Dashboard</span>
    </v-app-link>
  </div>
</template>