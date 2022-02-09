require("./bootstrap");

import { createApp } from "vue";
import router from "./router";
import DropdownComponent from "./components/DropdownComponent";
import vClickOutside from "click-outside-vue3";

createApp({
    components: {
        DropdownComponent,
    },
})
    .use(router, vClickOutside)
    .mount("#app");
