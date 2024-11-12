<template>
    <Navbar />
    <Search class="search" />
    <div class="main-container">
        <Slider />

        <!-- Cards -->
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <Card :image="'https://mdbootstrap.com/img/new/standard/nature/184.webp'" :link="'#link1'" />
                </div>
                <div class="col-md-3">
                    <Card :image="'https://mdbootstrap.com/img/new/standard/nature/185.webp'" :link="'#link2'" />
                </div>
                <div class="col-md-3">
                    <Card :image="'https://mdbootstrap.com/img/new/standard/nature/186.webp'" :link="'#link3'" />
                </div>
                <div class="col-md-3">
                    <Card :image="'https://mdbootstrap.com/img/new/standard/nature/187.webp'" :link="'#link4'" />
                </div>
            </div>
        </div>

<!--        Shipping-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-3">
                    <Shipping />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <Shipping />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <Shipping />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
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
    gap: 90px; /* Adjust as needed */
}

.col-md-3 {
    margin-bottom: 20px; /* Add spacing between rows */
}
</style>
