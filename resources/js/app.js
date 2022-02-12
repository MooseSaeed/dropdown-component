require("./bootstrap");

import { createApp } from "vue";
import Dropdown from "./components/Dropdown";
import Dropdowncontent from "./components/Dropdowncontent";
import Dropdownitems from "./components/Dropdownitems";
import vClickOutside from "click-outside-vue3";

createApp({
    components: {
        Dropdown,
        Dropdowncontent,
        Dropdownitems,
    },
})
    .use(vClickOutside)
    .mount("#app");
