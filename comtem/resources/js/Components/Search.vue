<template>
    <MDBInput
        v-model="search1"
        inputGroup
        :formOutline="false"
        wrapperClass="mb-3"
        placeholder="Search"
        aria-label="Search"
        aria-describedby="button-addon2"
    >
        <MDBBtn color="primary">
            <MDBIcon icon="search" />
        </MDBBtn>
    </MDBInput>
</template>


<script>
import { MDBInput, MDBBtn, MDBIcon } from 'mdb-vue-ui-kit';
import { ref } from 'vue';

export default {
    components: {
        MDBInput,
        MDBBtn,
        MDBIcon
    },
    setup() {
        const search1 = ref('');

        return {
            search1,
        };
    },
};
</script>

