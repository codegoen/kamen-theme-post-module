<template>
  <div class="bg-white rounded-2xl p-3 shadow">
    <img
      src="../../../images/video1.jpg"
      class="object-cover w-full rounded-2xl"
      :class="{ 'h-[30em]': lg, 'h-[13em]': sm }"
    />
    <div
      class="pt-2"
      :class="{
        'md:px-3 md:pt-6': lg,
        'md:pt-3': sm,
      }"
    >
      <div
        class="
          flex
          mt-4
          flex-col
          space-y-4
          justify-between
          md:flex-row md:space-y-0 md:mt-0
        "
      >
        <div>
          <span
            class="
              px-3
              py-1
              rounded-xl
              bg-pink-200
              uppercase
              text-pink-500
              font-bold
            "
            :class="{ 'text-md': lg, 'text-xs': sm }"
          >
            Congress
          </span>
        </div>

        <ul
          class="flex flex-row space-x-4"
          :class="{
            'md:space-x-8': lg,
            'md:space-x-2': sm,
          }"
        >
          <li>
            <button class="text-xl font-bold flex flex-row items-center">
              <v-icon
                name="EyeIcon"
                type="outline"
                class="w-8 h-8 mr-2 text-gray-500"
              />
              1.5m
            </button>
          </li>
          <li>
            <button class="text-xl font-bold flex flex-row items-center">
              <v-icon
                name="ChatAlt2Icon"
                type="outline"
                class="w-8 h-8 mr-2 text-gray-500"
              />
              35k
            </button>
          </li>
          <li :class="{ 'lg:hidden inline': sm }">
            <button class="text-xl font-bold flex flex-row items-center">
              <v-icon
                name="ShareIcon"
                type="outline"
                class="w-8 h-8 mr-2 text-gray-500"
              />
              35k
            </button>
          </li>
        </ul>
      </div>
    </div>
    <div
      :class="{
        'flex flex-col space-y-4 px-3 md:pb-6 pb-3': lg,
      }"
    >
      <div :class="{ 'mt-8': lg, 'mt-3': sm }">
        <v-app-link
          href="/posts/1"
          class="
            font-semibold
            transition-all
            leading-relaxed
            hover:text-pink-500
          "
          :class="{
            'lg:text-3xl md:text-2xl text-xl': lg,
            'text-lg': sm,
          }"
        >
          Dems see one last chance to boost public support for impeachment
        </v-app-link>
      </div>
    </div>
    <div
      v-if="lg"
      class="
        flex
        md:flex-row
        flex-col
        items-center
        md:justify-between
        justify-center
        space-y-4
        md:space-y-0
        mt-4
        md:mt-0
        px-3
        md:pb-6
        pb-3
      "
    >
      <div class="flex flex-row space-x-3">
        <div class="flex-shrink-0">
          <img
            src="../../../images/admin.jpg"
            class="w-14 h-14 md:w-16 md:h-16 rounded-full"
          />
        </div>
        <div>
          <h1 class="text-xl font-semibold">Administrator</h1>
          <span class="text-gray-500">Minggu, 1 Januari 2020</span>
        </div>
      </div>
      <div>
        <button
          class="
            px-5
            py-3
            flex
            font-medium
            rounded-2xl
            items-center
            text-pink-500
            bg-pink-500/30
            focus:ring-2 focus:ring-pink-500 focus:ring-offset-2
          "
        >
          <v-icon
            name="ShareIcon"
            type="outline"
            class="w-8 h-8 mr-2 text-pink-500"
          />
          <span>Share on Media</span>
        </button>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    size: {
      type: String,
      default: "lg", // lg and sm
    },
  },
  computed: {
    lg: function () {
      return this.size == "lg";
    },
    sm: function () {
      return this.size == "sm";
    },
  },
};
</script>