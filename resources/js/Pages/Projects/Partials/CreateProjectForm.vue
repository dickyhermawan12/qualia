<template>
    <jet-form-section @submitted="submitProjectInformation">
        <template #title>
            New Project
        </template>

        <template #description>
            Give your new project identity.
        </template>

        <template #form>
            <!-- Name -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="name" value="Name" />
                <jet-input id="name" type="text" class="mt-1 block w-full" v-model="form.name" autocomplete="name" />
                <jet-input-error :message="form.errors.name" class="mt-2" />
            </div>

            <!-- Description -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="description" value="Description" />
                <jet-textarea id="description" class="mt-1 block w-full" v-model="form.description" />

                <jet-input-error :message="form.errors.description" class="mt-2" />
            </div>

            <!-- Url -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="url" value="Url" />
                <jet-input id="url" type="text" class="mt-1 block w-full" v-model="form.url" />
                <jet-input-error :message="form.errors.url" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <jet-action-message :on="form.recentlySuccessful" class="mr-3">
                Saved.
            </jet-action-message>

            <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Save
            </jet-button>
        </template>
    </jet-form-section>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetFormSection from '@/Jetstream/FormSection.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetTextarea from '@/Jetstream/Textarea.vue'
    import JetInputError from '@/Jetstream/InputError.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetActionMessage from '@/Jetstream/ActionMessage.vue'
    import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'

    export default defineComponent({
        components: {
            JetActionMessage,
            JetButton,
            JetFormSection,
            JetInput,
            JetTextarea,
            JetInputError,
            JetLabel,
            JetSecondaryButton,
        },

        data() {
            return {
                form: this.$inertia.form({
                    name: null,
                    description: null,
                    url: null,
                }),
            }
        },

        methods: {
            submitProjectInformation() {
                this.form.post(route('projects.create-submit'), {
                    errorBag: 'submitProjectInformation',
                    preserveScroll: true,
                });
            },
        },
    })
</script>
