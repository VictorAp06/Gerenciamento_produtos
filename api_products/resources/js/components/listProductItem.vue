<template>
        <tr>
            <td>{{ produto.id }}</td>
            <td>{{ produto.cod_produto }}</td>
            <td>{{ produto.nome }}</td>
            <td>{{ produto.valor }}</td>
            <td>{{ produto.estoque }}</td>
            <td>{{ produto.cidade.nome }}</td>
            <td>
            <button @click="editar(produto)" class="waves-effect btn-small blue darken-1"><i class="material-icons">create</i></button>
            <button @click="deletar(produto.id)" class="waves-effect btn-small red darken-1"><i class="material-icons">delete_sweep</i></button>
            </td>
        </tr>
</template>

<script>

import Produto from '../produtos'

export default {
    props: ['produto'],
    methods: {
        //listarProduto(id){
        //Produto.listarProduto(id).then(resposta => {
          // produto: resposta.data
          // console.log(produto)
        //})},
        editar(produto){
            produto: produto
        },
        deletar(produto){
            Produto.deletar(produto).then(resposta => {
            this.resposta = resposta
            alert('Produto deletado com sucesso')
        })
        }
    }
}
</script>

<style>
td {
    width: 100%;
}

</style>
