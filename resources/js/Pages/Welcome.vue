<template>
    <Head title="Welcome" />

    <div id="outer-container">
        <div class="sticky top-0 z-50">
            <nav class="bg-white dark:bg-gray-800 border-b dark:border-gray-600">
                <div class="lg:container mx-auto relative flex justify-between h-16 lg:px-16 xl:px-20">
                    <div class="absolute inset-y-0 left-0 px-2 flex items-center lg:hidden">
                        <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-brand-700" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </div>
                    <div class="flex-1 flex items-center justify-center sm:items-stretch lg:justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 flex items-center">
                                <Link :href="'/'"><jet-application-logo class="h-6" /></Link>
                            </div>
                            <div class="pl-4 hidden sm:ml-6 lg:flex sm:space-x-4">
                                <a href="/help" class="inline-flex items-center px-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-500 p-5 dark:text-dark-100 dark:hover:border-dark-100">Help</a>
                            </div>
                        </div>
                        <div class="hidden lg:flex items-center sm:space-x-3">
                            <a href="https://github.com/dickyhermawan12/qualia" target="_blank">
                                <span class="sbui-btn-container">
                                    <jet-button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="undefined"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                        <span class="ml-2">Star us on GitHub</span>
                                    </jet-button>
                                </span>
                            </a>
                            <Link :href="route('login')">
                                <span class="sbui-btn-container">
                                    <jet-button>
                                        Start your project
                                    </jet-button>
                                </span>
                            </Link>
                            <Link :href="route('register')">
                                <span class="sbui-btn-container">
                                    <jet-button>
                                        Register
                                    </jet-button>
                                </span>
                            </Link>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="min-h-screen bg-white dark:bg-gray-800">
            <main>
                <div>
                    <div class="overflow-hidden">
                        <div class="container mx-auto px-6 lg:px-16 xl:px-20 relative py-16 sm:py-18 md:py-24 lg:py-24 pb-0 pt-24">
                            <div class="relative">
                                <main class="">
                                    <div class="mx-auto">
                                        <div class="lg:grid lg:grid-cols-12 lg:gap-16">
                                            <div class="md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left lg:flex lg:items-center">
                                                <div class="sm:mx-auto md:w-3/4 lg:w-full lg:mx-0">
                                                    <h1 class="mt-4 text-4xl text-gray-800 dark:text-white sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl">
                                                        <span class="block text-gray-800 dark:text-white">Seamlessly Interact</span>
                                                        <span class="text-brand-600 md:ml-0 block">With Your Users</span>
                                                    </h1>
                                                    <span class="sbui-typography-text">
                                                        <p class="mt-5 text-base sm:mt-5 lg:text-lg">Any feedback matters. Record, save, and take notes of your users reviews through video call session on your project's prototype or validate your idea through interviews.</p>
                                                    </span>
                                                    <div class="sbui-space-row sbui-space-x-2">
                                                        <Link :href="route('login')">
                                                            <span class="sbui-btn-container">
                                                                <jet-button class="mt-3" :href="http">
                                                                    Start your project
                                                                </jet-button>
                                                            </span>
                                                        </Link>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex content-center mt-16 sm:mt-24 lg:absolute lg:-right-80 lg:w-9/12 lg:mt-0 lg:col-span-6 xl:relative xl:right-0 xl:w-full">
                                                <div class="flex flex-col items-center justify-center relative w-full rounded-md">
                                                    <div class="w-full rounded-t-md h-5 bg-dark-700 flex items-center justify-start px-2">
                                                        <div class="h-2 w-2 mr-2 rounded-full bg-dark-500"></div>
                                                        <div class="h-2 w-2 mr-2 rounded-full bg-dark-500"></div>
                                                        <div class="h-2 w-2 mr-2 rounded-full bg-dark-500"></div>
                                                    </div>
                                                    <div class="w-full relative bg-dark-900 shadow-lg" style="padding:56.25% 0 0 0">
                                                        <iframe title="Demo video" class="absolute w-full h-full rounded-b-md" src="https://www.youtube-nocookie.com/embed/NpEaa2P7qZI?playlist=NpEaa2P7qZI&amp;autoplay=1&amp;loop=1&amp;controls=0&amp;modestbranding=1&amp;rel=0&amp;disablekb=1&amp;mute=1&amp;muted=1" style="top:0;left:0" frameborder="0" allow="autoplay; modestbranding; encrypted-media"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                    <div class="container mx-auto px-6 lg:px-16 xl:px-20 relative py-16 sm:py-18 md:py-24 lg:py-24 pb-0">
                        <h2 class="sbui-typography-title mb-16">Understand your users and deliver your product better</h2>
                        <dl class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 md:grid-cols-2 lg:grid-cols-4 md:gap-16 lg:gap-x-8 xl:gap-x-24">
                            <div class="mb-10 md:mb-0">
                                <div class="flex items-center">
                                    <div class="inline-flex items-center justify-center rounded-md bg-gray-800 dark:bg-white text-white h-8 w-8">
                                        <svg class="h-4 w-4 stroke-white dark:stroke-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                                    </div>
                                    <dt class="flex flex-row xl:flex-col ml-4">
                                        <h4 class="sbui-typography-title m-0">Conduct Interviews</h4>
                                    </dt>
                                </div>
                                <div class="mt-5">
                                    <span class="sbui-typography-text">Start gathering requirements of your project through interviews using our features.</span>
                                </div>
                            </div>
                            <div class="mb-10 md:mb-0">
                                <div class="flex items-center">
                                    <div class="inline-flex items-center justify-center rounded-md bg-gray-800 dark:bg-white text-white h-8 w-8">
                                        <svg class="h-4 w-4 stroke-white dark:stroke-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                                    </div>
                                    <dt class="flex flex-row xl:flex-col ml-4">
                                        <h4 class="sbui-typography-title m-0">Chat with Colleagues</h4>
                                    </dt>
                                </div>
                                <div class="mt-5">
                                    <span class="sbui-typography-text">Communicate with your team during session for rapid problem solving and easy coordination.</span>
                                </div>
                            </div>
                            <div class="mb-10 md:mb-0">
                                <div class="flex items-center">
                                    <div class="inline-flex items-center justify-center rounded-md bg-gray-800 dark:bg-white text-white h-8 w-8">
                                        <svg class="h-4 w-4 stroke-white dark:stroke-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                                    </div>
                                    <dt class="flex flex-row xl:flex-col ml-4">
                                        <h4 class="sbui-typography-title m-0">Test Prototypes</h4>
                                    </dt>
                                </div>
                                <div class="mt-5">
                                    <span class="sbui-typography-text">Every project can be tested and reviewed, either prototype or live website.</span>
                                </div>
                            </div>
                            <div class="mb-10 md:mb-0">
                                <div class="flex items-center">
                                    <div class="inline-flex items-center justify-center rounded-md bg-gray-800 dark:bg-white text-white h-8 w-8">
                                        <svg class="h-4 w-4 stroke-white dark:stroke-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                                    </div>
                                    <dt class="flex flex-row xl:flex-col ml-4">
                                        <h4 class="sbui-typography-title m-0">Rewind Session</h4>
                                    </dt>
                                </div>
                                <div class="mt-5">
                                    <span class="sbui-typography-text">All recorded videos are hosted in cloud. You can stop worrying about storage and focus on your observations.</span>
                                </div>
                            </div>
                        </dl>
                    </div>
                </div>
            </main>
        </div>
        <footer class="bg-white dark:bg-dark-800 border-t border-gray-100 dark:border-gray-600" aria-labelledby="footerHeading">
            <h2 id="footerHeading" class="sr-only">Footer</h2>
            <div class="container mx-auto px-6 lg:px-16 xl:px-20 relative py-16 sm:py-18 md:py-24 lg:py-24 undefined">
                <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                    <div class="space-y-8 xl:col-span-1">
                        <jet-application-logo class="h-8" />
                        <div class="flex space-x-6">
                            <a href="https://twitter.com" class="text-gray-300 hover:text-gray-400"><span class="sr-only">Twitter</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg></a>
                            <a href="https://github.com/dickyhermawan12/qualia" class="text-gray-300 hover:text-gray-400"><span class="sr-only">GitHub</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg></a>
                            <a href="https://discord.gg" class="text-gray-300 hover:text-gray-400"><span class="sr-only">Discord</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 71 55" aria-hidden="true"><path fill-rule="evenodd" d="M60.1045 4.8978C55.5792 2.8214 50.7265 1.2916 45.6527 0.41542C45.5603 0.39851 45.468 0.440769 45.4204 0.525289C44.7963 1.6353 44.105 3.0834 43.6209 4.2216C38.1637 3.4046 32.7345 3.4046 27.3892 4.2216C26.905 3.0581 26.1886 1.6353 25.5617 0.525289C25.5141 0.443589 25.4218 0.40133 25.3294 0.41542C20.2584 1.2888 15.4057 2.8186 10.8776 4.8978C10.8384 4.9147 10.8048 4.9429 10.7825 4.9795C1.57795 18.7309 -0.943561 32.1443 0.293408 45.3914C0.299005 45.4562 0.335386 45.5182 0.385761 45.5576C6.45866 50.0174 12.3413 52.7249 18.1147 54.5195C18.2071 54.5477 18.305 54.5139 18.3638 54.4378C19.7295 52.5728 20.9469 50.6063 21.9907 48.5383C22.0523 48.4172 21.9935 48.2735 21.8676 48.2256C19.9366 47.4931 18.0979 46.6 16.3292 45.5858C16.1893 45.5041 16.1781 45.304 16.3068 45.2082C16.679 44.9293 17.0513 44.6391 17.4067 44.3461C17.471 44.2926 17.5606 44.2813 17.6362 44.3151C29.2558 49.6202 41.8354 49.6202 53.3179 44.3151C53.3935 44.2785 53.4831 44.2898 53.5502 44.3433C53.9057 44.6363 54.2779 44.9293 54.6529 45.2082C54.7816 45.304 54.7732 45.5041 54.6333 45.5858C52.8646 46.6197 51.0259 47.4931 49.0921 48.2228C48.9662 48.2707 48.9102 48.4172 48.9718 48.5383C50.038 50.6034 51.2554 52.5699 52.5959 54.435C52.6519 54.5139 52.7526 54.5477 52.845 54.5195C58.6464 52.7249 64.529 50.0174 70.6019 45.5576C70.6551 45.5182 70.6887 45.459 70.6943 45.3942C72.1747 30.0791 68.2147 16.7757 60.1968 4.9823C60.1772 4.9429 60.1437 4.9147 60.1045 4.8978ZM23.7259 37.3253C20.2276 37.3253 17.3451 34.1136 17.3451 30.1693C17.3451 26.225 20.1717 23.0133 23.7259 23.0133C27.308 23.0133 30.1626 26.2532 30.1066 30.1693C30.1066 34.1136 27.28 37.3253 23.7259 37.3253ZM47.3178 37.3253C43.8196 37.3253 40.9371 34.1136 40.9371 30.1693C40.9371 26.225 43.7636 23.0133 47.3178 23.0133C50.9 23.0133 53.7545 26.2532 53.6986 30.1693C53.6986 34.1136 50.9 37.3253 47.3178 37.3253Z" clip-rule="evenodd"></path></svg></a>
                        </div>
                    </div>
                    <div class="mt-12 grid grid-cols-1 gap-8 xl:mt-0 xl:col-span-2">
                        <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
                            <div></div>
                            <div></div>
                            <div>
                                <h3 class="text-sm text-gray-300 dark:text-dark-400">Developers</h3>
                                <ul class="mt-4 space-y-2">
                                    <li><a href="/documentation" class="text-sm text-gray-500 dark:text-dark-100 hover:text-gray-900 dark:hover:text-gray-300">Documentation</a></li>
                                    <li><a href="/support" class="text-sm text-gray-500 dark:text-dark-100 hover:text-gray-900 dark:hover:text-gray-300">Support</a></li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-sm text-gray-300 dark:text-dark-400">Resources</h3>
                                <ul class="mt-4 space-y-2">
                                    <li><a href="/terms-of-service" class="text-sm text-gray-500 dark:text-dark-100 hover:text-gray-900 dark:hover:text-gray-300">Terms of Service</a></li>
                                    <li><a href="/privacy-policy" class="text-sm text-gray-500 dark:text-dark-100 hover:text-gray-900 dark:hover:text-gray-300">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-32 border-t dark:border-dark pt-8 flex justify-between">
                    <p class="text-base text-gray-400 dark:text-dark-400">© Qualia</p>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetButton from '@/Jetstream/Button.vue';
import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue';

export default defineComponent({
    components: {
        Head,
        JetButton,
        JetApplicationLogo,
        Link,
    },

    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },
});
</script>
