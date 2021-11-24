<template>
    <app-layout title="Projects">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Projects
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div class="flex items-center justify-end px-4 text-right sm:px-6">
                    <Link :href="route('projects.create')">
                        <span class="sbui-btn-container">
                            <jet-button>
                                + Create New Project
                            </jet-button>
                        </span>
                    </Link>
                </div>
                <jet-section-border />
                <div class="px-4 py-5 bg-white mb-4 sm:p-6 shadow sm:rounded-md" v-for="project in projects" :key="project.id">
                    <Link :href="route('projects.details', (project.name).toLowerCase())">
                        <div class="text-xl">
                            <td>{{ project.name }}</td>
                        </div>

                        <div class="mt-6 text-gray-500">
                            <td>{{ project.description }}</td>
                        </div>
                    </Link>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import { Link } from '@inertiajs/inertia-vue3'
    import JetButton from '@/Jetstream/Button.vue'
    import JetSectionBorder from '@/Jetstream/SectionBorder.vue'

    export default defineComponent({
        props: ['projects'],

        components: {
            AppLayout,
            JetButton,
            JetSectionBorder,
            Link
        },
    })
</script>
