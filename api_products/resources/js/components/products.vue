<template>


    <div class="container">



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

          <tr v-for="produto in produtos" :key="produto.id"> 

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

        </tbody>
      
      </table>

    </div>

</template>

<script>


import Produto from '../produtos'
import Cidade from '../cidades'

export default {

  data: function(){
    return {
      id: '',
      produto: {
        cod_produto: '',
        nome: '',
        valor: '',
        estoque: '',
        cidade_id: ''
      },
      atualizaProduto: {
        id: '',
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
    this.listar()
    this.listarCidades()
  },

  methods:{

  }
}
</script>

<style>
  button {
    margin: 3px
  }
</style>
