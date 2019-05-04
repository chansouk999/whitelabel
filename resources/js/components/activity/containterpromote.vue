<template>
<div>
        <div class="wrapper container-whitelabel">
        <navbar></navbar>
        <promote></promote>
        <alertsidebar></alertsidebar>
    </div>
</div>
</template>
<script>
import navbar from './navbar';
import promote from './promote';
import alertsidebar from '../alertsidebar';
import footers from '../welcome/footers';
export default {
    components:{
        navbar,
        promote,
        alertsidebar,
        footers
    }
}
</script>
<style scoped>

</style>

