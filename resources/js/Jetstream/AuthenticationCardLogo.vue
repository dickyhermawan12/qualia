<template>
    <Link :href="'/'">
        <img class="block h-12 w-auto" src="../../images/qualia_logo.png" alt="Logo">
    </Link>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
        },
    })
</script>
