<template>
    <a
        href=""
        class="px-1 py-1 my-1 rounded-lg block hover:bg-gradient-to-bl focus:bg-gradient-to-bl focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800"
    >
        <slot>{{ item }}</slot>
    </a>
</template>

<script>
export default {
    name: "Dropdownitems",
    props: ["item"],
};
</script>

<style></style>
