<template>
    <MDBCard class="hover-card">
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
