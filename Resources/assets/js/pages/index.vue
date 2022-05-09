<template>
  <PageWrapper>
    <template #main>
      <h1>MAIN</h1>
    </template>
  </PageWrapper>
</template>
<script>
import KamenTheme from "../layouts/kamen.vue";
import PageWrapper from "../components/page/wrapper";

export default {
  layout: KamenTheme,
  components: {
    PageWrapper,
  },
};
</script>