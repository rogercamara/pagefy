<template>
    <modal :show="show" :max-width="maxWidth" :closeable="closeable" @close="close">
        <div class="px-6 py-4">
            <div class="text-lg">
                <slot name="title"> </slot>
            </div>

            <div class="mt-4">
                <form @submit.prevent="$emit('submitted')">
                    <div class="grid grid-cols-6 gap-6">
                        <slot name="form"> </slot>
                    </div>
                </form>
            </div>
        </div>

        <div class="bg-gray-100 px-6 py-4 text-right">
            <slot name="actions"></slot>
        </div>
    </modal>
</template>

<script>
    import Modal from "./Modal";

    export default {
        name: "VDialogForm",

        emits: ["close", "submitted"],

        components: {
            Modal,
        },

        props: {
            show: {
                default: false,
            },
            maxWidth: {
                default: "2xl",
            },
            closeable: {
                default: true,
            },
        },

        methods: {
            close() {
                this.$emit("close");
            },
        },
    };
</script>
