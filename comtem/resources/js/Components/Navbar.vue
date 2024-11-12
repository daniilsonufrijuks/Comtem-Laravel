<template>
    <MDBNavbar expand="lg" light bg="light" container>
            <MDBNavbar expand="lg" light bg="light" container>
                <MDBNavbarNav>
                    <!-- Badge -->
                    <MDBNavbarItem href="#">
                        <span><MDBIcon icon="shopping-cart"></MDBIcon></span>
                    </MDBNavbarItem>
                </MDBNavbarNav>
            </MDBNavbar>
        <!-- Toggle button -->
        <MDBNavbarToggler
            target="#navbarRightAlignExample"
            @click="collapse5 = !collapse5"
        ></MDBNavbarToggler>
        <!-- Collapsible wrapper -->
        <MDBCollapse v-model="collapse5" id="navbarRightAlignExample">
            <MDBNavbarNav right class="mb-2 mb-lg-0">
                <!-- Right links -->
                <MDBNavbarItem to="#" active>
                    Home
                </MDBNavbarItem>
                <MDBNavbarItem href="#" active>
                    Link
                </MDBNavbarItem>
                <MDBNavbarItem href="#" active>
                    Link
                </MDBNavbarItem>
                <MDBNavbarItem href="#" active>
                    Link
                </MDBNavbarItem>
                <MDBNavbarItem href="#" active>
                    Link
                </MDBNavbarItem>
                <!-- Navbar dropdown -->
                <MDBDropdown class="nav-item" v-model="dropdown8">
                    <MDBDropdownToggle
                        tag="a"
                        class="nav-link"
                        @click="dropdown8 = !dropdown8"
                    >Dropdown</MDBDropdownToggle
                    >
                    <MDBDropdownMenu>
                        <MDBDropdownItem href="#">Action</MDBDropdownItem>
                        <MDBDropdownItem href="#">Another Action</MDBDropdownItem>
                        <MDBDropdownItem href="#"
                        >Something else here</MDBDropdownItem
                        >
                    </MDBDropdownMenu>
                </MDBDropdown>
                <!-- Right links -->
            </MDBNavbarNav>
        </MDBCollapse>
        <!-- Collapsible wrapper -->
    </MDBNavbar>
</template>


<script>
import {
    MDBNavbar,
    MDBNavbarToggler,
    MDBNavbarBrand,
    MDBNavbarNav,
    MDBNavbarItem,
    MDBCollapse,
    MDBDropdown,
    MDBDropdownToggle,
    MDBDropdownMenu,
    MDBDropdownItem,
    MDBIcon
} from 'mdb-vue-ui-kit';
import { ref } from 'vue';

export default {
    components: {
        MDBNavbar,
        MDBNavbarToggler,
        MDBNavbarBrand,
        MDBNavbarNav,
        MDBNavbarItem,
        MDBCollapse,
        MDBDropdown,
        MDBDropdownToggle,
        MDBDropdownMenu,
        MDBDropdownItem,
        MDBIcon
    },
    setup() {
        const collapse5 = ref(false);
        const dropdown8 = ref(false);

        return {
            collapse5,
            dropdown8
        }
    }
};
</script>
