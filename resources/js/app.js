require('./bootstrap');

require('bootstrap');

import {createApp} from 'vue';
import PaymentFlow from './components/PaymentFlow.vue';

const stripePublicKey = document.querySelector('meta[name="stripe-public-key"]').getAttribute('content');
createApp(PaymentFlow, {stripePublicKey: stripePublicKey}).mount('#payment-flow');

function getPercentageScrolled(element, multiplier = 1) {
    const box = element.getBoundingClientRect();

    // topDistance is the distance from the top of the element to the top of the viewport
    let topDistance = -(box.top - window.innerHeight);

    // bottomInScreen tell if the bottom of the element is in the viewport
    let bottomInScreen = box.bottom >= 0;

    if (topDistance >= 0 && bottomInScreen) {
        const total = topDistance + box.bottom;
        return Math.max(0, Math.min(100, (total - box.bottom) / (total * multiplier) * 100));
    }
    return 0;
}

document.onscroll = function() {

    /**
     * Row animations
     */
    document.querySelectorAll('[data-animate="row"]').forEach((e) => {
        const percentageScrolled = getPercentageScrolled(e);
        if (e.dataset.animateDirection === 'right') {
            e.style.transform = `translateX(-${percentageScrolled}px)`;
        }
        else {
            e.style.transform = `translateX(${percentageScrolled + 0.5}px)`;
        }
    });

    /**
     * Opacity animations
     */
    document.querySelectorAll('[data-animate="opacity"]').forEach((e) => {
        const percentageScrolled = getPercentageScrolled(e, 0.3);
        e.style.opacity = (percentageScrolled) / 100;
    });


    /**
     * Custom animations
     */
    document.querySelectorAll('[data-animate="custom-hero-overlay"]').forEach((e) => {
        e.style.opacity = (window.scrollY / window.innerHeight) * 1.6;
    });
    document.querySelectorAll('[data-animate="custom-hero-content"]').forEach((e) => {
        e.style.opacity = 1 - ((window.scrollY / window.innerHeight) * 1.6);
        e.style.filter = "grayscale(" + ((window.scrollY / window.innerHeight) * 1.6) + ")";
    });
}

document.dispatchEvent(new Event('scroll'));
