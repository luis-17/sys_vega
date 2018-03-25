<div class="modal-header">
	<h4 class="modal-title"> {{ titleForm }} </h4>
</div> 
<div class="modal-body">  
	<form class="row" name="formProducto"> 
		<div class="form-group col-md-4 mb-md ">
			<label class="control-label mb-n"> Tipo de Elemento <small class="text-danger">(*)</small> </label>
            <select disabled class="form-control input-sm" ng-model="fData.tipo_elemento" ng-options="item as item.descripcion for item in fArr.listaTipoElemento" 
            	required tabindex="10" ></select> 
		</div>
		
		<div class="form-group col-md-8 mb-md">
			<label class="control-label mb-n"> Descripción <small class="text-danger">(*)</small> </label>
			<input type="text" class="form-control input-sm" ng-model="fData.descripcion_ele" placeholder="Describa el elemento" required tabindex="20" />
		</div>
    	<div class="form-group col-md-4 mb-md ">
			<label class="control-label mb-n"> Categoría <small class="text-danger">(*)</small> </label>
            <select class="form-control input-sm" ng-model="fData.categoria_elemento" ng-options="item as item.descripcion for item in fArr.listaCategoriasElemento" 
            	required tabindex="30" ></select> 
		</div>
		<div class="form-group col-md-4 mb-md ">
			<label class="control-label mb-n"> Unidad de Medida <small class="text-danger">(*)</small> </label>
            <select class="form-control input-sm" ng-model="fData.unidad_medida" ng-options="item as item.descripcion for item in fArr.listaUnidadMedida" 
            	required tabindex="40" ></select> 
		</div>
		<div class="form-group col-md-4 mb-md">
			<label class="control-label mb-n"> Precio Referencial: </label>
			<input type="text" class="form-control input-sm" ng-model="fData.precio_referencial" placeholder="Precio referencial" tabindex="50" />
		</div>
		
	</form>
</div>
<div class="modal-footer">
    <button class="btn btn-primary" ng-click="aceptar(); $event.preventDefault();" ng-disabled="formProducto.$invalid">Aceptar</button>
    <button class="btn btn-warning" ng-click="cancel()">Cerrar</button>
</div> 