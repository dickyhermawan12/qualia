<template>
    <jet-form-section @submitted="submitProjectInformation">
        <template #title>
            Edit Project
        </template>

        <template #description>
            Change the existing identity of your project.
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
                <jet-input id="description" type="text" class="mt-1 block w-full" v-model="form.description" />
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

            <jet-danger-button class="ml-2" @click="confirmingProjectDeletion = true">
                Delete Project
            </jet-danger-button>
        </template>
    </jet-form-section>

    <jet-confirmation-modal :show="confirmingProjectDeletion" @close="confirmingProjectDeletion = false">
        <template #title>
            Delete Project
        </template>

        <template #content>
            Are you sure you want to delete your project? Once this project is deleted, all of its resources and data will be permanently deleted.
        </template>

        <template #footer>
            <jet-secondary-button @click="confirmingProjectDeletion = false">
                Nevermind
            </jet-secondary-button>

            <jet-danger-button class="ml-2" @click="deleteProject" :class="{ 'opacity-25': formModal.processing }" :disabled="formModal.processing">
                Delete Project
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
            JetInputError,
            JetLabel,
            JetSecondaryButton,
        },

        props: [ 'project' ],

        data() {
            return {
                confirmingProjectDeletion: false,
                deleting: false,
                form: this.$inertia.form({
                    _method: 'PUT',
                    name: this.project.name,
                    description: this.project.description,
                    url: this.project.url,
                }),
                formModal: this.$inertia.form({
                    _method: 'DELETE',
                }),
            }
        },

        methods: {
            submitProjectInformation() {
                this.form.post(route('projects.edit-submit', this.project.name), {
                    errorBag: 'submitProjectInformation',
                    preserveScroll: true,
                });
            },
            deleteProject() {
                this.formModal.post(route('projects.delete-submit', this.project.name), {
                    errorBag: 'deleteProject',
                    preserveScroll: true,
                });
            },
        },
    })
</script>
