<template>
  <!-- Pre Loader -->
  <div>
      <div id="dvLoading"></div>
      <div class="wrapper">
        <!-- header -->
       <Header/>
        <!-- header_End -->
        <!-- Content_right -->
        <div class="container_full">
            <Sidebar/>
            <slot></slot>
            <Footer/>
        </div>
      </div>
  </div>

</template>

<script setup>

import Footer from '../Shared/Footer.vue';
import Header from '../Shared/Header.vue';
import Sidebar from '../Shared/Sidebar.vue';
</script>

