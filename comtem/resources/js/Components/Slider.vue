<template>
    <MDBCarousel
        v-model="carousel1"
        :items="items1"
        fade
    />
</template>



<script>
import { ref } from "vue";
import { MDBCarousel } from "mdb-vue-ui-kit";
export default {
    components: {
        MDBCarousel
    },
    setup() {
        const items1 = [
            {
                src: "../../images/front/slbg1.png",
                alt: "...",
                label: "Asus",
                // caption: "Nulla vitae elit libero, a pharetra augue mollis interdum."
            },
            {
                src: "../../images/front/slbg2.png",
                alt: "...",
                label: "Nvidia",
                // caption: "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
            },
            {
                src: "../../images/front/slbg3.png",
                alt: "...",
                label: "Radeon",
                // caption: "Praesent commodo cursus magna, vel scelerisque nisl consectetur."
            }
        ];
        const carousel1 = ref(0);
        return {
            items1,
            carousel1
        };
    }
};
</script>
