<template>
    <app-layout :title="project.name">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit {{ project.name }}
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div>
                    <edit-project-form :project="project" />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import EditProjectForm from '@/Pages/Projects/Partials/EditProjectForm.vue'

    export default defineComponent({
        props: [ 'project' ],

        components: {
            AppLayout,
            EditProjectForm
        },


        methods: {
            checkPage(thing) {
                console.log(thing);
            },
        },
    })
</script>
