import { createPinia } from "pinia";

const pinia = createPinia();

export default {
  install: (app, options) => {
    // pinia
    app.use(pinia);

    // page
    app.component(
      "kamen-banner",
      require("./components/page/banner.vue").default,
    );

    app.component(
      "kamen-footer",
      require("./components/page/footer.vue").default,
    );

    app.component(
      "kamen-header",
      require("./components/page/header.vue").default,
    );

    app.component(
      "kamen-heading",
      require("./components/page/heading.vue").default,
    );

    app.component(
      "kamen-leftbar",
      require("./components/page/leftbar.vue").default,
    );

    app.component(
      "kamen-rightbar",
      require("./components/page/rightbar.vue").default,
    );

    app.component(
      "kamen-wrapper",
      require("./components/page/wrapper.vue").default,
    );

    // search
    app.component(
      "kamen-search-button",
      require("./components/search/button.vue").default,
    );

    app.component(
      "kamen-search-modal",
      require("./components/search/modal.vue").default,
    );

    // card
    app.component(
      "kamen-video-card",
      require("./components/card/video.vue").default,
    );

    app.component(
      "kamen-post-card",
      require("./components/card/post.vue").default,
    );

    app.component(
      "kamen-side-card",
      require("./components/card/side.vue").default,
    );

    // button
    app.component(
      "kamen-button-dashboard",
      require("./components/button/dashboard.vue").default,
    );

    // menu
    app.component(
      "kamen-page-menu",
      require("./components/page/menu.vue").default
    )
  },
};
