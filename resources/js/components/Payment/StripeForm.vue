<template>
    <form id="payment-form" v-on:submit.prevent="pay" class="flex-fill d-flex flex-column">
        <div v-if="success" class="flex-fill d-flex flex-column align-items-center justify-content-center">
            <lottie-animation
                path="storage/lottie/succesfull-payment.json"
                :loop="false"
                :height="200"
            />
            <span class="text-success fs-5 fw-semi-bold">{{success}}</span>
        </div>
        <div v-else class="flex-fill" id="payment-element">
            <!--Stripe.js injects the Payment Element-->
        </div>

        <div v-if="showForm" class="d-grid">
            <button id="submit" class="btn btn-danger text-white btn-lg mt-4" type="submit" :disabled="loading">
                <span v-if="loading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                <span v-else>Payer 10€</span>
            </button>
        </div>
    </form>
</template>

<script>
import LottieAnimation from "lottie-vuejs/src/LottieAnimation.vue";

export default {
    props: {
        publicKey: {
            type: String,
            required: true,
        },
    },
    components: {
        LottieAnimation
    },
    data() {
        return {
            loading: true,
            showForm: false,
            clientSecret: null,
            success: null,
            error: null,
            stripe: null,
            elements: null,
        };
    },
    mounted() {
        this.clientSecret = new URLSearchParams(window.location.search).get(
            "payment_intent_client_secret"
        );

        const scriptScript = document.createElement('script');
        scriptScript.setAttribute('src','https://js.stripe.com/v3/');
        document.head.appendChild(scriptScript);
        scriptScript.onload = () => {
            this.stripe = Stripe(this.publicKey);

            if (this.clientSecret) {
                this.checkStatus();
            }
            else {
                this.prepare();
            }
        };
    },
    methods: {
        async prepare() {
            this.loading = true;
            this.showForm = true;
            axios.get('/api/payment/prepare/stripe')
                .then(response => {
                    this.clientSecret = response.data.client_secret;
                    this.elements = this.stripe.elements({
                        clientSecret: this.clientSecret,
                    });
                    const paymentElement = this.elements.create("payment", {
                        layout: "tabs",
                    });
                    paymentElement.mount("#payment-element");
                    this.loading = false;
                })
                .catch(error => {
                    this.loading = false;
                    console.log(error);
                });
        },
        async pay() {
            this.loading = true;

            const { error } = await this.stripe.confirmPayment({
                elements: this.elements,
                confirmParams: {
                    return_url: window.location.toString(),
                },
            });

            if (error.type === "card_error" || error.type === "validation_error") {
                this.error = error.message;
            } else {
                this.error = "An unexpected error occurred.";
            }
            this.loading = false;
        },
        async checkStatus() {
            const { paymentIntent } = await this.stripe.retrievePaymentIntent(this.clientSecret);

            switch (paymentIntent.status) {
                case "succeeded":
                    this.success = "Paiement réussi !";
                    break;
                case "processing":
                    this.success = "Your payment is processing.";
                    break;
                case "requires_payment_method":
                    this.error = "Your payment was not successful, please try again.";
                    break;
                default:
                    this.error = "Something went wrong.";
                    break;
            }
        }
    },
};
</script>

<style>
.lottie-container {
    height: 200px;
}
</style>
