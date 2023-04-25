<template>
    <!-- <Layout>/ -->
        <div class="content_wrapper bg_homebefore inner-wrapper tables-sec">
        <div class="container-fluid">
            <!-- Start Breadcrumbbar -->
            <div class="breadcrumbbar">
            <!-- Start row -->
            <div class="row">
                <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Responsive Table</h4>

                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Tables </a></li>
                    <li class="breadcrumb-item active" aria-current="page">Responsive Table</li>
                    </ol>
                </div>
                </div>
                <div class="col-md-4 col-lg-4 mr-0">
                <div class="widgetbar">
                    <Link class="btn btn-primary" href="/item/create"><i class="ri-refresh-line mr-2"></i>Create</Link>
                </div>
                </div>
            </div>
            </div>
            <!-- End Breadcrumbbar -->
            <!-- state start-->
            <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="table-rep-plugin">
                    <div class="table-responsive" data-pattern="priority-columns">
                    <table id="tech-companies-1" class="table  table-striped">
                        <thead>
                        <tr>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th data-priority="1">Status</th>
                            <th data-priority="3">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="item in items" :key=item.id>
                            <td>{{ item.category.name }}</td>
                            <td>{{ item.name }}</td>
                            <td>₹ {{ item.price }}</td>
                            <td>{{ item.qty }}</td>
                            <td>
                                <span v-if="item.status == 1" class="badge badge-pill badge-success">Active</span>

                                <span v-else class="badge badge-pill badge-danger">Inactive</span>

                            </td>
                            <td>
                                <Link class="btn btn-primary btn-sm" :href="`/item/${item.id}/edit`">Edit</Link>
                            </td>

                        </tr>

                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <!-- End row -->
            <!-- state end-->

        </div>
        </div>
    <!-- </Layout> -->
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
// import Layout from '../Layout/Layout.vue';




defineProps({
    'items':Object,
})

</script>

