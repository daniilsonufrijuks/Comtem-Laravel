<template>
    <MDBCard class="hover-card">
        <MDBCardImg
            src="https://mdbootstrap.com/img/new/standard/nature/184.webp"
            top
            alt="..."
        />
        <MDBCardBody>
            <MDBCardTitle>Card title</MDBCardTitle>
            <MDBCardText>
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
            </MDBCardText>
            <MDBBtn tag="a" href="#!" color="primary">Button</MDBBtn>
        </MDBCardBody>
    </MDBCard>
</template>

<script>
import { MDBCard, MDBCardBody, MDBCardTitle, MDBCardText, MDBCardImg, MDBBtn } from "mdb-vue-ui-kit";
export default {
    components: {
        MDBCard,
        MDBCardBody,
        MDBCardTitle,
        MDBCardText,
        MDBCardImg,
        MDBBtn
    }
};
</script>

<style scoped>
.hover-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hover-card:hover {
    transform: scale(1.05); /* Slightly scale up */
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2); /* Add a shadow */
}
</style>
