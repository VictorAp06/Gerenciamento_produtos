<template>
<div id="app">

    <nav>
      <div class="nav-wrapper blue darken-1">
        <a href="#" class="brand-logo center">Produtos Front</a>
      </div>
    </nav>
    
    <add-product-form></add-product-form>

    <table>        
        <thead>
            <tr>
                <th>Id</th>
                <th>Código</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Estoque</th>
                <th>Cidade</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="width: 100px"><input type="number" maxlength="10" placeholder="Valor" v-model="id"></td>
                <td colspan="5"></td>
                <td><button @click="listarProduto(id)" class="waves-effect btn-small blue darken-1"><i class="material-icons">search</i></button></td>
            </tr>
            <tr><list-product-view :produtos="produtos"></list-product-view></tr>
        </tbody>
    </table>

</div>
</template>

<script>

import addProductForm from './addProductForm.vue'
import ListProductView from './listProductView.vue'
import Produto from '../produtos'

export default {

    components: {
        addProductForm,
        ListProductView
    },
    data: function () {
        return {
            produtos: [] 
        }
    },
    methods: {
        listar(){
        Produto.listar().then(resposta => {
            console.log(resposta.data)
            this.produtos = resposta.data
        })}
    }, 
    async created(){
        this.listar()
    }

}
</script>
