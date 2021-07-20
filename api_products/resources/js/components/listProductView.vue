<template>
    <div>
        <div v-for="(produto, index) in produtos" :key="index">
            <list-product-item :produto="produto"/>
        </div>
    </div>
</template>

<script>

import listProductItem from "./listProductItem.vue"

export default {

    props: ['produtos'],
    components: {
        listProductItem
    }

}
</script>

<style>

</style>
