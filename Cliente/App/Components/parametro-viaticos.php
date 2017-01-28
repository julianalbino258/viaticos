<form role="form">
    <div class="form-group">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
          <label for="codigo_cg">Código</label>
          <input type="text" 
               class="form-control col-md-5" 
               id="ID_CG"
               placeholder="Ingrese código"
               ng-model="$ctrl.parametroViaticosDto.Codigo">  
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
          <label for="nombre_cg">Nombre</label>
          <input type="text" 
                 class="form-control" 
                 id="nombre_CG"
                 placeholder="Ingrese Nombre Concepto de Gasto"
                 ng-model="$ctrl.parametroViaticosDto.Nombre">
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <label for="nombre_cg">Observaciones</label>
          <textarea class="form-control" 
                    rows="3"
                    ng-model="$ctrl.parametroViaticosDto.Observaciones">
          </textarea>
        </div>
      </div>
    </div>       
    <div class="btn-toolbar" role="toolbar">
      <div class="btn-group" role="group">         
        <button type="button" class="btn btn-success" ng-click="$ctrl.GuardarParametro()">Guardar</button> 
        <button type="button" class="btn btn-warning" ng-click="$ctrl.Clear()">Limpiar</button>
      </div>
    </div>
  </form>