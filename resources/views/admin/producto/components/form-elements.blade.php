<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Nombre'), 'has-success': fields.Nombre && fields.Nombre.valid }">
    <label for="Nombre" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto.columns.Nombre') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Nombre" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Nombre'), 'form-control-success': fields.Nombre && fields.Nombre.valid}" id="Nombre" name="Nombre" placeholder="{{ trans('admin.producto.columns.Nombre') }}">
        <div v-if="errors.has('Nombre')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Nombre') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Categoria'), 'has-success': fields.Categoria && fields.Categoria.valid }">
    <label for="Categoria" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto.columns.Categoria') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Categoria" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Categoria'), 'form-control-success': fields.Categoria && fields.Categoria.valid}" id="Categoria" name="Categoria" placeholder="{{ trans('admin.producto.columns.Categoria') }}">
        <div v-if="errors.has('Categoria')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Categoria') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Precio'), 'has-success': fields.Precio && fields.Precio.valid }">
    <label for="Precio" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.producto.columns.Precio') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Precio" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Precio'), 'form-control-success': fields.Precio && fields.Precio.valid}" id="Precio" name="Precio" placeholder="{{ trans('admin.producto.columns.Precio') }}">
        <div v-if="errors.has('Precio')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Precio') }}</div>
    </div>
</div>


