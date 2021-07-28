import AppForm from '../app-components/Form/AppForm';

Vue.component('product-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                cidade_id:  '' ,
                cod_produto:  '' ,
                estoque:  '' ,
                nome:  '' ,
                valor:  '' ,
                
            }
        }
    }

});