<div id="page-content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10">
        <div class="panel">
          <a  ui-sref="app.parametros" class="btn btn-default" id="menu-home"><span class="glyphicon glyphicon glyphicon-chevron-left"></a>
          <a ui-sref="app.main" class="btn btn-default" id="menu-home"><span class="glyphicon glyphicon glyphicon-home"></a>
        </div>
        <div class="panel panel-primary">
              <div class="panel-heading">
                  <h3 class="panel-title">Parametrización Tabla de Viáticos General</h3>
              </div>
              <div class="panel-body">
                <form role="form">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                          <label for="codigoConceptoGasto">Código Concepto de Gasto</label>
                          <input type="text"
                             class="form-control"
                             id="doc"
                             placeholder="Ingrese Código Concepto de Gasto"
                             ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.ParametroViaticoGeneralModel.ConceptoGasto">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                          <label for="categoriaFuncionario">Categoría Solicitante</label>
                          <select class="form-control"
                                  ng-options="categoriaFuncionario.Value as categoriaFuncionario.Label for categoriaFuncionario in vm.UtilsConstants.CategoriaFuncionarioList"
                                  ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.ParametroViaticoGeneralModel.CategoriaFuncionario">
                          </select>
                      </div>                      
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                          <label for="categoriaFuncionario">Tipo Ciudad</label>
                          <select class="form-control"
                                  ng-options="tipoCiudad.Value as tipoCiudad.Label for tipoCiudad in vm.UtilsConstants.TipoCiudadList"
                                  ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.ParametroViaticoGeneralModel.TipoCiudad">
                          </select>
                      </div>                      
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                          <label for="categoriaFuncionario">Monto</label>
                          <input type="text"
                             class="form-control"
                             id="doc"
                             placeholder="Ingrese Valor"
                             ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.ParametroViaticoGeneralModel.Valores">
                      </div>
                    </div>
                  </div>
                  <div class="btn-toolbar" role="toolbar">
                      <div class="btn-group" role="group">
                           <button type="button" class="btn btn-success" ng-click="vm.Save()">Asociar</button>
                           <button type="button" class="btn btn-warning">Cancelar</button>             
                      </div>
                  </div>
                </form>
              </div>              
        </div>
      </div>
    </div>
  </div>
</div>