<template>
    <MDBCard style="width: 18rem">
        <MDBCardImg top src="https://mdbootstrap.com/img/new/standard/city/062.webp" alt="..."/>
        <MDBListGroup flush>
            <h3>Online Store</h3>
            <p><a href="">www.comtem.com</a></p>
            <p>Phone: <a href="tel:+37166778899">+371 66778899</a></p>
            <p>Email: <a href="mailto:info@comtem.com">info@comtem.com</a></p>
            <p>Working Days: 09:00 – 18:00</p>
            <p>Saturday: Closed</p>
            <p>Sunday: Closed</p>
        </MDBListGroup>
    </MDBCard>
</template>


<script>
import { MDBCard, MDBCardBody, MDBCardTitle, MDBCardText, MDBCardLink, MDBCardImg, MDBCardGroup, MDBListGroupItem, MDBListGroup } from "mdb-vue-ui-kit";
export default {
    components: {
        MDBCard,
        MDBCardBody,
        MDBCardTitle,
        MDBCardText,
        MDBCardLink,
        MDBCardImg,
        MDBCardGroup,
        MDBListGroupItem,
        MDBListGroup
    }
};
</script>
