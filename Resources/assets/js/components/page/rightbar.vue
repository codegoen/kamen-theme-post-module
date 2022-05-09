<template>
  <div>
    <kamen-heading title="Sports News" right-text="See All" />

    <div class="flex flex-col space-y-4">
      <!-- <SubscribeNewsLatter class="mb-4" /> -->

      <kamen-side-card
        v-for="(item, index) in Array.from({ length: 4 })"
        :key="index"
      />
    </div>

    <div class="md:h-screen md:sticky md:top-[1em]">
      <kamen-heading title="Populars" right-text="See All" class="mt-8 mb-4" />

      <div class="flex flex-col space-y-4">
        <kamen-side-card
          v-for="(item, index) in Array.from({ length: 4 })"
          :key="index"
        />
      </div>
    </div>
  </div>
</template>
