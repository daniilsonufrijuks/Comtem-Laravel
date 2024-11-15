<template>
    <MDBCard class="hover-card fixed-height">
        <MDBCardImg
            :src="image"
            top
            alt="..."
        />
        <MDBCardBody>
            <MDBCardTitle style="text-align: center;">{{ title }}</MDBCardTitle>
            <MDBCardText>
                {{ text }}
            </MDBCardText>
        </MDBCardBody>
    </MDBCard>
</template>

<script>
import { MDBCard, MDBCardBody, MDBCardTitle, MDBCardText, MDBCardImg } from "mdb-vue-ui-kit";
export default {
    props: {
        image: {
            type: String,
            required: true,
        },
        title: {
            type: String,
            required: true,
        },
        text: {
            type: String,
            required: true,
        },
    },
    components: {
        MDBCard,
        MDBCardBody,
        MDBCardTitle,
        MDBCardText,
        MDBCardImg
    }
};
</script>

<style scoped>
.hover-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.hover-card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Add fixed height */
.fixed-height {
    height: 250px; /* Adjust the height as needed */
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Ensures content is spaced properly */
}
</style>
