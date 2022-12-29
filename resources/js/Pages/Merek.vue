<script setup>
import BaseLayout from '../components/BaseLayout.vue';
import MerekModal from '../components/MerekModal.vue';
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
                                Launch Merek backdrop modal
                            </button>

                        </div>
                    </div>
                </div>
            </div>
    </div>

    <MerekModal></MerekModal>
    </BaseLayout>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
