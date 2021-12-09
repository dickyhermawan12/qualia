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
                                + New Project
                            </jet-button>
                        </span>
                    </Link>
                </div>
                <jet-section-border />
                <div class="mt-28" v-if="projects.length === 0">
                    <Link :href="route('projects.create')">
                        <div class="text-center">
                            <span class="font-semibold text-2xl text-gray-800 leading-tight underline hover:text-gray-500">Create New Project</span>
                        </div>
                    </Link>
                    <div class="mt-3 text-center">
                        <span>Logical container for your project resources. Create and customize your project identity.</span>
                    </div>
                </div>
                <div class="px-4 py-5 bg-white mb-4 sm:p-6 shadow sm:rounded-md" v-else v-for="project in projects" :key="project.id">
                    <div>
                        <div class="flex justify-between">
                            <div class="text-xl">
                                <dt>{{ project.name }}</dt>
                            </div>
                            <Link :href="route('projects.details', (project.name).toLowerCase())">
                                <span class="sbui-btn-container">
                                    <jet-button>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 pr-2 text-white" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                        </svg>
                                        Observe
                                    </jet-button>
                                </span>
                            </Link>
                        </div>

                        <div class="pt-4">
                            <div class="border-t border-gray-200"></div>
                        </div>

                        <div class="flex justify-between">
                            <span class="mt-6 text-gray-500">
                                {{ project.description }}
                            </span>
                            <span class="mt-6 text-gray-500">
                                {{ project.url ?? '' }}
                            </span>
                        </div>
                    </div>
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
