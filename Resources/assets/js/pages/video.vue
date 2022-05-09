<template>
  <kamen-wrapper>
    <template #main>
      <div>
        <kamen-heading title="Video Headlines" />

        <kamen-post-card size="lg" />
      </div>

      <kamen-heading title="Videos" right-text="See All" />

      <div class="grid gap-4 mt-4 md:grid-cols-2 grid-cols-1">
        <kamen-video-card
          v-for="(item, index) in Array.from({ length: 4 })"
          :key="index"
        />
      </div>
    </template>
    <template #rightbar>
      <div>
        <kamen-heading title="Related News" right-text="See All" />

        <div class="flex flex-col space-y-4">
          <!-- <SubscribeNewsLatter class="mb-4" /> -->

          <kamen-post-card
            v-for="(item, index) in Array.from({ length: 4 })"
            :key="index"
            size="sm"
          />
        </div>
      </div>
    </template>
  </kamen-wrapper>
</template>
<script>
import KamenTheme from "Kamen/layouts/kamen.vue";

export default {
  layout: KamenTheme,
};
</script>