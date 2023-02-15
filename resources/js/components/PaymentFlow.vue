<template>
    <div class="fs-3 fw-semi-bold mb-3 text-danger">
        Proposez le paiement.<br/>
        <span class="opacity-50">Simplement.</span>
    </div>
    <a class="text-black-50" href="#" @click.prevent="showTestCard = true">Utiliser une carte de test</a>
    <hr class="border-secondary my-4">
    <div class="gateway-container d-flex">
        <StripeForm :public-key="stripePublicKey"/>
    </div>
    <Transition>
        <TestCard
            class="position-absolute top-0 bottom-0 start-0 end-0 d-flex flex-column justify-content-between blur-lg card-body"
            @close="showTestCard = false"
            v-if="showTestCard"
        />
    </Transition>
</template>

<script>

import StripeForm from "./Payment/StripeForm.vue";
import TestCard from "./Payment/TestCard.vue";

export default {
    props: {
        stripePublicKey: {
            type: String,
            required: true,
        },
    },
    components: {
        StripeForm,
        TestCard,
    },
    data() {
        return {
            showTestCard: false,
        };
    },
};
</script>

<style>
.gateway-container {
    min-height: 250px;
}

.v-enter-active,
.v-leave-active {
    transition: opacity 0.1s ease;
}

.v-enter-from,
.v-leave-to {
    opacity: 0;
}
</style>
