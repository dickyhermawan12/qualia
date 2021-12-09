<template>
    <app-layout :title="project.name">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Project Details
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between px-4 text-right sm:px-6">
                    <h2 class="font-bold text-3xl text-gray-800 leading-tight">
                        {{ project.name }}
                    </h2>
                    <div class="flex align-middle">
                        <Link :href="route('livesessions.create', { name: (project.name).toLowerCase() })">
                            <span class="sbui-btn-container mr-2">
                                <jet-button>
                                    + New Live Session
                                </jet-button>
                            </span>
                        </Link>
                        <Link :href="route('projects.edit', { name: (project.name).toLowerCase() })">
                            <span class="sbui-btn-container">
                                <jet-button>
                                    Edit
                                </jet-button>
                            </span>
                        </Link>
                    </div>
                </div>
                <jet-section-border />
                <div class="mt-28" v-if="liveSessions.length === 0">
                    <Link :href="route('livesessions.create', { name: (project.name).toLowerCase() })">
                        <div class="text-center">
                            <span class="font-semibold text-2xl text-gray-800 leading-tight underline hover:text-gray-500">Create Live Session</span>
                        </div>
                    </Link>
                    <div class="mt-3 text-center">
                        <span>Test apps, websites and prototypes. See interactions, microphone, and camera.</span>
                    </div>
                </div>
                <div class="px-4 py-5 bg-white mb-4 sm:p-6 shadow sm:rounded-md" v-else v-for="liveSession in liveSessions" :key="liveSession.id">
                    <div class="text-xl">
                        <dt>Live Session</dt>
                    </div>

                    <div class="pt-4">
                        <div class="border-t border-gray-200"></div>
                    </div>

                    <div class="mt-6 flex justify-between">
                        <div>
                            <span class="text-green-600 font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline pr-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" /></svg>
                                Live session with {{ liveSession.participant_name }}
                            </span>
                        </div>
                        <div class="flex align-middle">
                            <a :href="obtainMeetingName(liveSession.participant_name)" target="_blank">
                                <span class="sbui-btn-container mr-2">
                                    <jet-button class="bg-green-800 hover:bg-green-700 active:bg-green-900 focus:border-green-900 focus:ring-green-300">
                                        Join
                                    </jet-button>
                                </span>
                            </a>
                            <Link :href="route('livesessions.edit', { name: (project.name).toLowerCase(), id: liveSession.id })">
                                <span class="sbui-btn-container">
                                    <jet-button>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </jet-button>
                                </span>
                            </Link>
                        </div>
                    </div>

                    <div class="pt-4">
                        <div class="border-t border-gray-200"></div>
                    </div>

                    <div class="mt-6 text-gray-500">
                        Created on <span class="font-bold">{{ formatProperDate(liveSession.created_at) }}</span>
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
    import JetDangerButton from '@/Jetstream/DangerButton.vue'
    import JetSectionBorder from '@/Jetstream/SectionBorder.vue'

    export default defineComponent({
        props: {
            project: Object,
            liveSessions: Array
        },

        components: {
            AppLayout,
            JetButton,
            JetDangerButton,
            JetSectionBorder,
            Link
        },

        methods: {
            formatProperDate(date) {
                date = new Date(date);
                const month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                return date.getDate() + ' ' + month[date.getMonth()];
            },
            obtainMeetingName(participantName) {
                return 'http://localhost:9000/create?meetingName=LiveSessionWith' + participantName.replace(/ /g,'');
            },
        },
    })
</script>
