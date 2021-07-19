
import { http } from './config'

export default {

    listar:() => {
        return http.get('products')
    },

    salvar:(produto) => {
        return http.post('products', produto)
    },

    atualizar:(id, produto) => {
        return http.put('products/' + id, produto)
    },

    deletar:(id) => {
        return http.delete('products/' + id)
    },

    listarProduto:(id) => {
        return http.get('products/' + id)
    }

}