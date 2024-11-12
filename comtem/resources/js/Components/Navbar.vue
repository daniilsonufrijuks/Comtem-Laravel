<template>
    <MDBNavbar
        container
        expand="lg"
        bg="light"
        class="d-flex justify-content-between"
    >
        <MDBNavbarBrand>
            <img src="https://laravel.com/img/logotype.min.svg" alt="" size="2x" />
        </MDBNavbarBrand>

        <!-- Navbar dropdown -->
        <MDBDropdown class="nav-item dropdown-responsive" v-model="dropdown1">
            <MDBDropdownToggle
                tag="a"
                class="nav-link"
                @click="dropdown1 = !dropdown1"
            >Dropdown</MDBDropdownToggle>
            <MDBDropdownMenu aria-labelledby="dropdownMenuButton">
                <MDBDropdownItem href="#">Action</MDBDropdownItem>
                <MDBDropdownItem href="#">Another Action</MDBDropdownItem>
                <MDBDropdownItem href="#">Something else here</MDBDropdownItem>
            </MDBDropdownMenu>
        </MDBDropdown>

        <MDBNavbarToggler
            target="#navbarColor01"
            @click="collapse7 = !collapse7"
        ></MDBNavbarToggler>
        <MDBCollapse id="navbarColor01" v-model="collapse7">
            <MDBNavbarNav class="mb-2 mb-lg-0">
                <MDBNavbarItem href="#" linkClass="link-secondary">Dashboard</MDBNavbarItem>
                <MDBNavbarItem href="#" linkClass="link-secondary">Team</MDBNavbarItem>
                <MDBNavbarItem href="#" linkClass="link-secondary">Projects</MDBNavbarItem>
            </MDBNavbarNav>
        </MDBCollapse>

        <MDBNavbarNav class="mb-2 mb-lg-0 d-flex flex-row">
            <MDBNavbarItem to="#" class="me-3 me-lg-0" linkClass="link-secondary">
                <MDBIcon icon="shopping-cart"></MDBIcon>
            </MDBNavbarItem>
            <MDBNavbarItem to="#" class="me-3 me-lg-0" linkClass="link-secondary">
                <MDBIcon icon="bell" />
                <MDBBadge notification color="danger" pill>1</MDBBadge>
            </MDBNavbarItem>
            <MDBNavbarItem href="#" class="me-3 me-lg-0">
                <img
                    src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"
                    class="rounded-circle"
                    height="30"
                    width="25"
                    alt=""
                    loading="lazy"
                />
            </MDBNavbarItem>
        </MDBNavbarNav>
    </MDBNavbar>
</template>

<script>
import {
    MDBNavbar,
    MDBNavbarItem,
    MDBNavbarBrand,
    MDBNavbarNav,
    MDBNavbarToggler,
    MDBBadge,
    MDBIcon,
    MDBCollapse,
    MDBDropdown,
    MDBDropdownToggle,
    MDBDropdownMenu,
    MDBDropdownItem
} from 'mdb-vue-ui-kit';
import { ref } from "vue";

export default {
    components: {
        MDBNavbar,
        MDBNavbarItem,
        MDBNavbarBrand,
        MDBNavbarNav,
        MDBNavbarToggler,
        MDBBadge,
        MDBIcon,
        MDBCollapse,
        MDBDropdown,
        MDBDropdownToggle,
        MDBDropdownMenu,
        MDBDropdownItem
    },
    setup() {
        const collapse7 = ref(false);
        const dropdown1 = ref(false);
        return {
            collapse7,
            dropdown1
        }
    }
};
</script>

<style scoped>
/* Hide dropdown on screens smaller than 700px */
@media (max-width: 1000px) {
    .dropdown-responsive {
        display: none;
    }
}
</style>
