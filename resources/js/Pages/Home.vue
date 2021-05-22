<template>
    <Layout title="Inertia Laravel">
        <h1>Hello {{ title }}</h1>
        <inertia-link href="/about">About</inertia-link>
    </Layout>
</template>
<style>

</style>
<script>
import Layout from '../Shared/Layout.vue'
export default{
    props: ['title'],
    components:{
        Layout
    }
}

</script>
