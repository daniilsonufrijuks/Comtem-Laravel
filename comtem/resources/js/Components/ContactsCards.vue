<template>
    <MDBCard style="width: 18rem">
        <MDBCardImg top src="https://mdbootstrap.com/img/new/standard/city/062.webp" alt="..."/>
        <MDBCardBody>
            <MDBCardTitle>Card title</MDBCardTitle>
            <MDBCardText>
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
            </MDBCardText>
        </MDBCardBody>
        <MDBListGroup flush>
            <MDBListGroupItem>Cras justo odio</MDBListGroupItem>
            <MDBListGroupItem>Dapibus ac facilisis in</MDBListGroupItem>
            <MDBListGroupItem>Vestibulum at eros</MDBListGroupItem>
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
