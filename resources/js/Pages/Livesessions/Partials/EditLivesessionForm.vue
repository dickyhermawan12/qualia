<template>
    <jet-form-section @submitted="submitLivesessionInformation">
        <template #title>
            Edit Live Session
        </template>

        <template #description>
            Edit live session for specific participant.
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

            <!-- Live Session Url -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="live_session_url" value="Live Session Url" />
                <jet-input id="live_session_url" type="text" class="mt-1 block w-full" v-model="form.live_session_url" />
                <jet-input-error :message="form.errors.live_session_url" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <jet-action-message :on="form.recentlySuccessful" class="mr-3">
                Saved.
            </jet-action-message>

            <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Save
            </jet-button>

            <jet-danger-button class="ml-2" @click="confirmingLivesessionDeletion = true">
                Delete Live Session
            </jet-danger-button>
        </template>
    </jet-form-section>

    <jet-confirmation-modal :show="confirmingLivesessionDeletion" @close="confirmingLivesessionDeletion = false">
        <template #title>
            Delete Live Session
        </template>

        <template #content>
            Are you sure you want to delete this Live Session? This operation is irreversible.
        </template>

        <template #footer>
            <jet-secondary-button @click="confirmingLivesessionDeletion = false">
                Nevermind
            </jet-secondary-button>

            <jet-danger-button class="ml-2" @click="deleteLivesession" :class="{ 'opacity-25': formModal.processing }" :disabled="formModal.processing">
                Delete Live Session
            </jet-danger-button>
        </template>
    </jet-confirmation-modal>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetDangerButton from '@/Jetstream/DangerButton.vue'
    import JetFormSection from '@/Jetstream/FormSection.vue'
    import JetConfirmationModal from '@/Jetstream/ConfirmationModal.vue'
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
            JetDangerButton,
            JetFormSection,
            JetConfirmationModal,
            JetInput,
            JetTextarea,
            JetInputError,
            JetLabel,
            JetSecondaryButton,
        },

        props: [ 'project', 'livesession' ],

        data() {
            return {
                confirmingLivesessionDeletion: false,
                deleting: false,
                form: this.$inertia.form({
                    _method: 'PUT',
                    participant_name: this.livesession.participant_name,
                    participant_email: this.livesession.participant_email,
                    live_session_url: this.livesession.live_session_url,
                }),
                formModal: this.$inertia.form({
                    _method: 'DELETE',
                }),
            }
        },

        methods: {
            submitLivesessionInformation() {
                this.form.post(route('livesessions.edit-submit', { name: this.project.name, id: this.livesession.id }), {
                    errorBag: 'submitLivesessionInformation',
                    preserveScroll: true,
                });
            },
            deleteLivesession() {
                this.formModal.post(route('livesessions.delete-submit', { name: this.project.name, id: this.livesession.id }), {
                    errorBag: 'deleteLivesession',
                    preserveScroll: true,
                });
            },
        },
    })
</script>
