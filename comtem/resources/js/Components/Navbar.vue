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
                <MDBNavbarItem :href="routes.home" active>
                    Home
                </MDBNavbarItem>
                <MDBNavbarItem :href="routes.about" active>
                    About
                </MDBNavbarItem>
                <MDBNavbarItem :href="routes.contacts" active>
                    Contacts
                </MDBNavbarItem>
                <MDBNavbarItem :href="routes.discounts" active>
                    Discounts
                </MDBNavbarItem>
                <MDBNavbarItem :href="routes.market" active>
                    Market
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
                        <MDBDropdownItem href="#">Laptops</MDBDropdownItem>
                        <MDBDropdownItem href="#">Auction</MDBDropdownItem>
                        <MDBDropdownItem href="#">Components</MDBDropdownItem>
                        <MDBDropdownItem href="#">PC</MDBDropdownItem>
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
    props: {
        routes: {
            type: Object,
            required: true
        }
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
