<template>
  <div class="bg-gray-100">
    <PageBanner v-if="show" @toggle="show = !show" />

    <!-- page header -->
    <PageHeader />

    <!-- slot -->
    <slot />

    <!-- page footer -->
    <PageFooter />
  </div>
</template>
<script>
import PageHeader from "../components/page/header";
import PageBanner from "../components/page/banner";
import PageFooter from "../components/page/footer";

export default {
  components: {
    PageBanner,
    PageFooter,
    PageHeader,
  },
  data: () => ({
    show: true,
  }),
};
</script>