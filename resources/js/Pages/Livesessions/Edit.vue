<template>
    <app-layout title="Edit Live Session">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Live Session
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div>
                    <edit-livesession-form :project="project" :livesession="livesession" />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import EditLivesessionForm from '@/Pages/Livesessions/Partials/EditLivesessionForm.vue'

    export default defineComponent({
        props: [ 'project', 'livesession' ],

        components: {
            AppLayout,
            EditLivesessionForm
        },
    })
</script>
