<div class="form-group row align-items-center" :class="{'has-danger': errors.has('cidade_id'), 'has-success': fields.cidade_id && fields.cidade_id.valid }">
    <label for="cidade_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.cidade_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.cidade_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cidade_id'), 'form-control-success': fields.cidade_id && fields.cidade_id.valid}" id="cidade_id" name="cidade_id" placeholder="{{ trans('admin.product.columns.cidade_id') }}">
        <div v-if="errors.has('cidade_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cidade_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('cod_produto'), 'has-success': fields.cod_produto && fields.cod_produto.valid }">
    <label for="cod_produto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.cod_produto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.cod_produto" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cod_produto'), 'form-control-success': fields.cod_produto && fields.cod_produto.valid}" id="cod_produto" name="cod_produto" placeholder="{{ trans('admin.product.columns.cod_produto') }}">
        <div v-if="errors.has('cod_produto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cod_produto') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('estoque'), 'has-success': fields.estoque && fields.estoque.valid }">
    <label for="estoque" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.estoque') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.estoque" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('estoque'), 'form-control-success': fields.estoque && fields.estoque.valid}" id="estoque" name="estoque" placeholder="{{ trans('admin.product.columns.estoque') }}">
        <div v-if="errors.has('estoque')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('estoque') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nome'), 'has-success': fields.nome && fields.nome.valid }">
    <label for="nome" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.nome') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nome" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nome'), 'form-control-success': fields.nome && fields.nome.valid}" id="nome" name="nome" placeholder="{{ trans('admin.product.columns.nome') }}">
        <div v-if="errors.has('nome')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nome') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('valor'), 'has-success': fields.valor && fields.valor.valid }">
    <label for="valor" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.valor') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.valor" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('valor'), 'form-control-success': fields.valor && fields.valor.valid}" id="valor" name="valor" placeholder="{{ trans('admin.product.columns.valor') }}">
        <div v-if="errors.has('valor')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('valor') }}</div>
    </div>
</div>


