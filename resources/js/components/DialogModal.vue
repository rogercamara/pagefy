<template>
    <modal :show="show" :max-width="maxWidth" :closeable="closeable" @close="close">
        <div class="px-6 py-4">
            <div class="text-lg">
                <slot name="title"></slot>
            </div>

            <div class="mt-4">
                <slot name="content"></slot>
            </div>
        </div>

        <div class="bg-gray-100 px-6 py-4 text-right" v-if="$slots.footer">
            <slot name="footer"></slot>
        </div>
    </modal>
</template>

<script>
    import Modal from "./Modal";

    export default {
        name: "VDialogModal",

        emits: ["close"],

        components: {
            Modal,
        },

        props: {
            show: {
                default: false,
            },
            maxWidth: {
                default: "xl",
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
