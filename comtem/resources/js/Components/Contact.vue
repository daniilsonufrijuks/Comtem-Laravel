<template>
    <MDBRow tag="form" class="g-3 needs-validation" novalidate @submit.prevent="checkForm">
        <div class="map_container">
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2175.752002814705!2d24.101903377117267!3d56.95305007355204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecf7bac058ce9%3A0x96a8a0e931b27448!2z0KDQuNC20YHQutC40Lkg0LPQvtGB0YPQtNCw0YDRgdGC0LLQtdC90L3Ri9C5INGC0LXRhdC90LjQutGD0Lw!5e0!3m2!1sru!2slv!4v1725731560133!5m2!1sru!2slv" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
        </div>
        <MDBCol md="4">
            <MDBInput
                label="First name"
                v-model="input1"
                invalidFeedback="Please provide your first name"
                validFeedback="Looks good!"
                required
            />
        </MDBCol>
        <MDBCol md="4">
            <MDBInput
                label="Last name"
                v-model="input2"
                invalidFeedback="Please provide your last name"
                validFeedback="Looks good!"
                required
            />
        </MDBCol>
        <MDBCol md="4">
            <MDBInput
                inputGroup
                aria-label="Username"
                aria-describedby="basic-addon1"
                placeholder="Username"
                v-model="input3"
                invalidFeedback="Please choose a username."
                validFeedback="Looks good!"
                required
            >
                <template v-slot:prepend>
                    <span class="input-group-text" id="basic-addon1">@</span>
                </template></MDBInput
            >
        </MDBCol>
        <MDBCol md="6">
            <MDBInput
                label="City"
                v-model="input4"
                invalidFeedback="Please provide a valid city."
                validFeedback="Looks good!"
                required
            />
        </MDBCol>
        <MDBCol md="6">
            <MDBInput
                label="Zip"
                v-model="input5"
                invalidFeedback="Please provide a valid zip."
                validFeedback="Looks good!"
                required
            />
        </MDBCol>
        <MDBCol col="12">
            <MDBCheckbox
                label="Agree to terms and conditions"
                v-model="checkbox1"
                invalidFeedback="You must agree before submitting."
                validFeedback="Looks good!"
                required
            />
        </MDBCol>
        <MDBCol col="12">
            <MDBBtn color="primary" type="submit">Submit form</MDBBtn>
        </MDBCol>
    </MDBRow>
</template>


<script>
import { MDBCol, MDBRow, MDBInput, MDBCheckbox, MDBBtn } from "mdb-vue-ui-kit";
import { ref } from "vue";

export default {
    components: {
        MDBCol,
        MDBRow,
        MDBInput,
        MDBCheckbox,
        MDBBtn
    },
    setup() {
        const checkForm = e => {
            e.target.classList.add("was-validated");
        };
        const input1 = ref("Mark");
        const input2 = ref("Otto");
        const input3 = ref("");
        const input4 = ref("");
        const input5 = ref("");
        const checkbox1 = ref(false);

        return {
            input1,
            input2,
            input3,
            input4,
            input5,
            checkbox1,
            checkForm
        };
    }
};
</script>
