<template>

<div>
          <form @submit.prevent="salvar">

          <label>Código Produto</label>
          <input type="number" maxlength="4" minlength="4" placeholder="Código Produto" v-model="produto.cod_produto">
          
          <label>Nome</label>
          <input type="text" maxlength="75" placeholder="Nome" v-model="produto.nome">
          
          <label>Valor</label>
          <input type="text" maxlength="10" placeholder="Valor" v-model="produto.valor">
          
          <label>Estoque</label>
          <input type="number" maxlength="10" minlength="1" placeholder="Quantidade" v-model="produto.estoque">
          
          <label>Cidade</label>
          <select class="browser-default" v-model="produto.cidade_id">
            <option selected disabled>Selecione</option>
            <option v-for="cidade of cidades" :key="cidade.id" v-bind:value="cidade.id" >{{cidade.nome}}</option>
          </select>

         <button class="waves-effect waves-light btn-small">Salvar<i class="material-icons left">save</i></button>

      </form>

</div>
</template>

<script>

import Produto from '../produtos'
import Cidade from '../cidades'

export default {

  data: function(){
    return {
      produto: {
        cod_produto: '',
        nome: '',
        valor: '',
        estoque: '',
        cidade_id: ''
      },
      produtos: [],
      cidades:[]
    }
  },
  async created(){
    this.listarCidades()
  },
  methods: {
    salvar(){
      console.log(this.produto)
      if(!this.produto.id){
        Produto.salvar(this.produto).then(resposta => {
          this.resposta = resposta
          alert('Produto salvo com sucesso')
          this.listar()
          this.produto = {}
        })
      }else{
        Produto.atualizar(this.produto.id, this.produto).then(resposta => {
        this.resposta = resposta
        alert('Produto atualizado com sucesso')
        this.listar()
        this.produto = {}
        })
      }
    },
    listarCidades(){
        Cidade.listar().then(resposta => {
        this.cidades = resposta.data
    })}
  }
}
</script>
