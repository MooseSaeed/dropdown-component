<template>
    <div
        v-show="usersToggle"
        class="absolute left-0 right-0 z-50 mt-2 w-full rounded-lg bg-blue-100 bg-gradient-to-r from-purple-600 to-blue-500 py-2"
    >
        <slot />
    </div>
</template>

<script>
import { inject } from "vue";
export default {
    name: "Dropdowncontent",

    setup() {
        const usersToggle = inject("usersToggle");

        return {
            usersToggle,
        };
    },
};
</script>

<style>
.ease-custom {
    transition-timing-function: cubic-bezier(0.61, -0.53, 0.43, 1.43);
}
</style>
