<template>
    <MDBRow tag="form" class="g-3 needs-validation" novalidate @submit.prevent="checkForm">
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
