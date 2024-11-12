<template>
    <MDBCard style="width: 18rem">
        <MDBCardImg top src="https://mdbootstrap.com/img/new/standard/nature/184.webp" alt="..."/>
        <MDBCardBody>
            <MDBCardText>
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
            </MDBCardText>
        </MDBCardBody>
    </MDBCard>
</template>


<script>
import {MDBCard, MDBCardBody, MDBCardTitle, MDBCardText, MDBCardLink, MDBCardImg} from "mdb-vue-ui-kit";
export default {
    components: {
        MDBCard,
        MDBCardBody,
        MDBCardTitle,
        MDBCardText,
        MDBCardLink,
        MDBCardImg,
    }
};
</script>
