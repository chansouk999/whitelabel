<template>
    <div class="wrapper container-whitelabel">
        <navbar></navbar>
        <asides></asides>
        <alertside></alertside>

    </div>
</template>
<script>
import navbar from './welcome/navbar';
import asides from './welcome/asides';
import alertside from './alertsidebar';
export default {
    components:{
        navbar,
        asides,
        alertside
    }
}
</script>
<style scoped>

</style>

