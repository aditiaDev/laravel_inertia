<template>
    <Layout title="About">
        <h1 v-text="name"></h1>
    </Layout>
</template>
<style>

</style>
<script>
import Layout from '../Shared/Layout.vue'
export default{
    props: ['name'],
    components:{
        Layout
    }
}

</script>
