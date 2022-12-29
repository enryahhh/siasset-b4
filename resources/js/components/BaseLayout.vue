<script setup>
import Navbar from './Navbar.vue';
import Sidebar from './Sidebar.vue';
import Breadcrumb from './Breadcrumb.vue';
</script>
<template>
    <div class="h-100 d-block">
        <div class="row">
            <Sidebar></Sidebar>
            
            <div class="col g-0">
                <div class="container-fluid g-0">
                <Navbar></Navbar>
                <Breadcrumb></Breadcrumb>
                        <main role="main" class="col mt-5">
                            <slot></slot>
                        </main>
                </div>
            </div>
        </div>
    </div>
</template>