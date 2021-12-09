<template>
    <jet-form-section @submitted="submitProjectInformation">
        <template #title>
            New Live Session
        </template>

        <template #description>
            Create new live session for specific participant.
        </template>

        <template #form>
            <!-- Participant Name -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="participant_name" value="Participant Name" />
                <jet-input id="participant_name" type="text" class="mt-1 block w-full" v-model="form.participant_name" autocomplete="name" />
                <jet-input-error :message="form.errors.participant_name" class="mt-2" />
            </div>

            <!-- Participant Email -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="participant_email" value="Participant Email" />
                <jet-input id="participant_email" type="text" class="mt-1 block w-full" v-model="form.participant_email" />
                <jet-input-error :message="form.errors.participant_email" class="mt-2" />
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

        props: [ 'project' ],

        data() {
            return {
                form: this.$inertia.form({
                    participant_name: null,
                    participant_email: null,
                }),
            }
        },

        methods: {
            submitProjectInformation() {
                this.form.post(route('livesessions.create-submit', { name: this.project.name }), {
                    errorBag: 'submitProjectInformation',
                    preserveScroll: true,
                });
            },
        },
    })
</script>
