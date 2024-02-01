<template>
    <main>
        <NavbarPanel />
        <router-view></router-view>
    </main>
    <FooterPanel />
</template>

<script setup>
    /** Import custom css */
    import '@/assets/css/main.css';

    /** Import package */
    import { computed, onMounted } from 'vue';

    /** Import store */
    import { useAuthStore } from "@/stores";

    /** Import components */
    import NavbarPanel from '@/components/views/main/NavbarPage.vue';
    import FooterPanel from '@/components/views/main/FooterPage.vue';

    /**  Define variables and store */
    const authStore = useAuthStore();

    const isDevelopment = computed(() => import.meta.env.VITE_APP_ENV === 'local');

    // Load settings from local storage when the app starts
    onMounted(async () => {
        await authStore.checkLogin();
    });

</script>