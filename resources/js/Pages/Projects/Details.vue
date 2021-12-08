<template>
    <app-layout :title="projectName">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Project Details
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between px-4 text-right sm:px-6">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ projectName }}
                    </h2>
                    <Link :href="route('projects.edit', {name: projectName.toLowerCase()})">
                        <span class="sbui-btn-container">
                            <jet-button>
                                Edit
                            </jet-button>
                        </span>
                    </Link>
                </div>
                <jet-section-border />
                <div class="px-4 py-5 bg-white mb-4 sm:p-6 shadow sm:rounded-md" v-for="liveSession in liveSessions" :key="liveSession.id">
                    <Link :href="route('projects.details', (project.name).toLowerCase())">
                        <div class="text-xl">
                            <td>Live Session</td>
                        </div>

                        <div class="pt-4">
                            <div class="border-t border-gray-200"></div>
                        </div>

                        <div class="mt-6 text-gray-500">
                            <td>{{ liveSession.created_at }}</td>
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
    import JetDangerButton from '@/Jetstream/DangerButton.vue'
    import JetSectionBorder from '@/Jetstream/SectionBorder.vue'

    export default defineComponent({
        props: ['projectName'],

        components: {
            AppLayout,
            JetButton,
            JetDangerButton,
            JetSectionBorder,
            Link
        },
    })
</script>
