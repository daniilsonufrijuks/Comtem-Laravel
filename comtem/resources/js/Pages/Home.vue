<template>
    <Navbar />
    <Search class="search" />
    <div class="main-container">
        <Slider />

<!--        Cards-->
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <Card />
                </div>
                <div class="col-md-3">
                    <Card />
                </div>
                <div class="col-md-3">
                    <Card />
                </div>
                <div class="col-md-3">
                    <Card />
                </div>
            </div>
        </div>

<!--        Shipping-->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <Shipping />
                </div>
                <div class="col-md-4">
                    <Shipping />
                </div>
                <div class="col-md-4">
                    <Shipping />
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <Shipping />
                </div>
                <div class="col-md-4">
                    <Shipping />
                </div>
                <div class="col-md-4">
                    <Shipping />
                </div>
            </div>
        </div>
<!--Shipping-->

        <Testimonial />
        <Contact />
        <Footer />
    </div>
</template>

<script>
import Navbar from '../Components/Navbar.vue';
import Slider from '../Components/Slider.vue';
import Footer from '../Components/Footer.vue';
import Card from '../Components/Card.vue';
import Testimonial from '../Components/Testimonial.vue';
import Contact from '../Components/Contact.vue';
import Shipping from "../Components/Shipping.vue";
import Search from "../Components/Search.vue";


export default {
    name: 'Home',
    components: {
        Navbar,
        Slider,
        Footer,
        Card,
        Testimonial,
        Contact,
        Shipping,
        Search,
    },
}
</script>

<style scoped>
.main-container {
    display: flex;
    flex-direction: column;
    gap: 70px; /* Adjust as needed */
}

.col-md-3 {
    margin-bottom: 20px; /* Add spacing between rows */
}
</style>
