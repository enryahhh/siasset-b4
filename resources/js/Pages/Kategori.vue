<script setup>
import BaseLayout from '../components/BaseLayout.vue';
import KategoriModal from '../components/KategoriModal.vue';
</script>
<template>
    <BaseLayout>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="card">
                        <div class="card-header">Example Component</div>

                        <div class="card-body">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Launch kategori backdrop modal
                            </button>

                        </div>
                    </div>
                </div>
            </div>
    </div>

    <KategoriModal></KategoriModal>
    </BaseLayout>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
