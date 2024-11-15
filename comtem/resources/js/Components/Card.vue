<template>
    <MDBCard class="hover-card fixed-height">
        <MDBCardImg :src="image" top alt="..." />
        <MDBCardBody>
            <MDBCardTitle style="text-align: center;">Card title</MDBCardTitle>
            <MDBCardText>
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
            </MDBCardText>
            <div class="d-flex justify-content-center">
                <MDBBtn :href="link" color="primary">VISIT</MDBBtn>
            </div>
        </MDBCardBody>
    </MDBCard>
</template>

<script>
import { MDBCard, MDBCardBody, MDBCardTitle, MDBCardText, MDBCardImg, MDBBtn } from "mdb-vue-ui-kit";
export default {
    props: {
        link: {
            type: String,
            required: true,
        },
        image: {
            type: String,
            required: true,
        }
    },
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
    transform: scale(1.05); /* Slightly scale up on hover */
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2); /* Add a shadow */
}

.fixed-height {
    height: 400px; /* Adjust the height as needed */
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Ensures content is spaced properly */
}
</style>
