<template>
    <div v-click-outside="onClickOutside">
        <button
            @click="showUsers"
            class="flex max-h-52 w-full overflow-auto py-2 pl-3 pr-9 text-sm font-semibold lg:inline-flex lg:w-32"
        >
            Users
        </button>
        <div
            v-show="usersToggle"
            class="mt-1 w-full rounded-xl bg-blue-100 py-2"
        >
            <a
                href="#"
                class="block mt-1 w-full rounded-xl bg-blue-100 py-2"
                v-for="user in users"
                :key="user.id"
            >
                {{ user.name }}
            </a>
        </div>
    </div>
</template>

<script>
import vClickOutside from "click-outside-vue3";
import { ref, onMounted } from "vue";
export default {
    name: "home",
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

        const users = ref([]);

        const getUsers = () => {
            axios.get("/list").then((response) => {
                users.value = response.data.users;
            });
        };

        onMounted(() => {
            getUsers();
        });

        return {
            showUsers,
            usersToggle,
            onClickOutside,
            getUsers,
            users,
        };
    },
};
</script>

<style></style>
