<template>
    <app-layout title="{{ projectName }}">
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
                    <Link :href="route('projects.create')">
                        <span class="sbui-btn-container">
                            <jet-button>
                                Edit
                            </jet-button>
                        </span>
                    </Link>
                </div>
                <jet-section-border />

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
        props: ['projectName'],

        components: {
            AppLayout,
            JetButton,
            JetSectionBorder,
            Link
        },
    })
</script>
