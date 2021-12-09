<template>
    <app-layout title="Create New Live Session">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create New Live Session
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div>
                    <create-livesession-form :project="project" />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import CreateLivesessionForm from '@/Pages/Livesessions/Partials/CreateLivesessionForm.vue'

    export default defineComponent({
        props: [ 'project' ],

        components: {
            AppLayout,
            CreateLivesessionForm
        },
    })
</script>
