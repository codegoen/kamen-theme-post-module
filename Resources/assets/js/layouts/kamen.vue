<template>
  <div class="bg-gray-100">
    <kamen-banner v-if="show" @toggle="show = !show" />

    <!-- page header -->
    <kamen-header />

    <!-- slot -->
    <transition name="layout">
      <div :key="$page.url">
        <slot />
      </div>
    </transition>

    <!-- search modal -->
    <kamen-search-modal />

    <!-- page footer -->
    <kamen-footer />
  </div>
</template>
<script>
export default {
  data: () => ({
    show: true,
  }),
};
</script>