<script setup>
import BaseLayout from '../components/BaseLayout.vue';
</script>
<template>
    <BaseLayout>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="card">
                        <div class="card-header">Example Component</div>

                        <div class="card-body">
                            I'm an example component 22.
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </BaseLayout>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
