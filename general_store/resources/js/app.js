
import { createApp, h } from 'vue'

import { createInertiaApp } from '@inertiajs/vue3'
import Layout from "./Pages/Layout/Layout.vue";


createInertiaApp({

resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })

    // New code added
    let page = pages[`./Pages/${name}.vue`].default

    if(!page.layout){
      page.layout=Layout;
    }
    // OR
    // page.layout??=Layout;

    return pages[`./Pages/${name}.vue`]
  },

  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})

