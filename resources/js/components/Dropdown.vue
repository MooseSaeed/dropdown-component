<template>
    <div class="relative" v-click-outside="onClickOutside" @click="showUsers">
        <slot name="toggler">
            <button
                class="flex max-h-52 w-full overflow-auto py-2 pl-3 pr-9 text-sm font-semibold lg:inline-flex lg:w-32"
            >
                {{ title }}
            </button>
        </slot>
        <transition
            :duration="1000"
            enter-active-class="transform transition duration-300 ease-custom"
            enter-class="-translate-y-1/2 scale-y-0 opacity-0"
            enter-to-class="translate-y-0 scale-y-100 opacity-100"
            leave-active-class="transform transition duration-300 ease-custom"
            leave-class="translate-y-0 scale-y-100 opacity-100"
            leave-to-class="-translate-y-1/2 scale-y-0 opacity-0"
        >
            <slot />
        </transition>
    </div>
</template>

<script>
import vClickOutside from "click-outside-vue3";
import { ref, provide } from "vue";
export default {
    name: "Dropdown",
    props: ["title"],
    directives: {
        clickOutside: vClickOutside.directive,
    },
    setup() {
        const usersToggle = ref(false);

        const showUsers = () => {
            usersToggle.value = !usersToggle.value;
        };

        const onClickOutside = (event) => {
            usersToggle.value = false;
        };

        provide("usersToggle", usersToggle);

        return {
            usersToggle,
            showUsers,
            onClickOutside,
        };
    },
};
</script>

<style></style>
