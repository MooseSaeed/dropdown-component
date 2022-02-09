import { createRouter, createWebHistory } from "vue-router";

import DropdownComponent from "../components/DropdownComponent";

const routes = [
    {
        path: "/",
        name: "home",
        component: DropdownComponent,
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
