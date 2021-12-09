<template>
    <app-layout title="Create New Project">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create New Project
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div>
                    <create-project-form />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import CreateProjectForm from '@/Pages/Projects/Partials/CreateProjectForm.vue'

    export default defineComponent({
        components: {
            AppLayout,
            CreateProjectForm
        },
    })
</script>
