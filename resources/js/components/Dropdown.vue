<template>
    <div class="relative" v-click-outside="onClickOutside" @click="showUsers">
        <slot name="toggler">
            <button
                class="text-white bg-gradient-to-r from-purple-600 to-blue-500 rounded-xl flex max-h-52 w-full overflow-auto py-2 pl-3 pr-9 text-sm font-semibold lg:inline-flex lg:w-52"
            >
                {{ title }}
                <svg
                    class="absolute"
                    :class="
                        usersToggle
                            ? '-rotate-90 transform transition duration-500 ease-in-out'
                            : 'rotate-90 transform transition duration-500 ease-in-out'
                    "
                    style="right: 12px"
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                >
                    <g fill="none" fill-rule="evenodd">
                        <path
                            stroke="#000"
                            stroke-opacity=".012"
                            stroke-width=".5"
                            d="M21 1v20.16H.84V1z"
                        ></path>
                        <path
                            fill="#222"
                            d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"
                        ></path>
                    </g>
                </svg>
            </button>
        </slot>

        <slot />
    </div>
</template>

<script>
import vClickOutside from "click-outside-vue3";
import { ref, onMounted, provide } from "vue";
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
