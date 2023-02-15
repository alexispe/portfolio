<template>
    <div>
        <div class="fs-3 fw-semi-bold mb-3">Voici votre carte de test.</div>

        <div class="d-flex flex-column align-items-center justify-content-center">
            <div class="bank-card">
                <div class="card-number">
                    <div class="card-number__item">4242</div>
                    <div class="card-number__item">4242</div>
                    <div class="card-number__item">4242</div>
                    <div class="card-number__item">4242</div>
                </div>
                <div class="card-info">
                    <div class="card-info__item">
                        <div class="card-info__item__title">Exp.</div>
                        <div class="card-info__item__value">12/24</div>
                    </div>
                    <div class="card-info__item">
                        <div class="card-info__item__title">CVV</div>
                        <div class="card-info__item__value">123</div>
                    </div>
                </div>
            </div>
            <a class="text-black-50 mt-3" href="#" @click.prevent="close">Fermer</a>
        </div>

        <div></div>
    </div>
</template>

<script>
export default {
    methods: {
        close() {
            this.$emit('close');
        },
    },
};
</script>

<style>
.bank-card {
    background: #ecebeb;
    border-radius: 10px;
    width: 300px;
    height: 200px;
    position: relative;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
.card-number {
    display: flex;
    justify-content: space-between;
    padding: 20px 20px 10px 20px;
    margin-top: 100px;
}
.card-number__item {
    font-size: 20px;
    font-weight: 700;
    color: #000;
}
.card-info {
    display: flex;
    justify-content: space-between;
    padding: 0 20px 20px 20px;
}
.card-info__item {
    display: flex;
    flex-direction: row;
    align-items: baseline;
}
.card-info__item__title {
    font-size: 12px;
    color: #000;
    margin-right: 10px;
}
.card-info__item__value {
    font-size: 16px;
    color: #000;
}
</style>
