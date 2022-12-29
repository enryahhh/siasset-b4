<script setup>
import { Link } from '@inertiajs/inertia-vue3'
</script>
<template>
    <!-- sidebar -->
<div class="col-md-3 col-lg-1 bg-white sidebar vh-100 border-end">
  <div class="sidebar-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <Link class="nav-link" href="/home">
          <span data-feather="shopping-cart"></span>
          Asset
        </Link>
      </li>
      <li class="nav-item">
        <Link class="nav-link" href="/kategori">
          <span data-feather="shopping-cart"></span>
          Kategori
        </Link>
      </li>
      <li class="nav-item">
        <Link class="nav-link" href="/merek">
          <span data-feather="shopping-cart"></span>
          Merek
        </Link>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="users"></span>
          Logout
        </a>
      </li>
    </ul>
  </div>
</div>

</template>
