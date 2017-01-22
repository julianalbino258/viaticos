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
                     <h3 class="panel-title">Parametrización Tabla de Viáticos Internacionales</h3>
                 </div>
                 <div class="panel-body">
                   <form role="form">
                     <div class="form-group">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                          <label for="codigo_VI">Código</label>
                            <input type="text" 
                                   class="form-control"
                                   id="Cod_VI"
                                   placeholder="Ingrese código"
                                   ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.ParametroViaticoInternacionalModel.Codigo">
                         </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <label for="Destino">Destino</label>
                          <input type="text" 
                                 class="form-control"
                                 id="Destino"
                                 placeholder="Ingrese Nombre Destino"
                                 ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.ParametroViaticoInternacionalModel.Destino">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Seleccione Moneda</label>
                           <div class="radio">
                             <label>
                               <input type="radio"
                                    name="Moneda" 
                                    id="Euro"
                                    ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.ParametroViaticoInternacionalModel.EnumTipoMoneda.EURO">
                                 Euros
                             </label>
                             </div>
                             <div class="radio">
                             <label>
                               <input type="radio"
                                      name="Moneda"
                                      id="Dolar"
                                      ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.ParametroViaticoInternacionalModel.EnumTipoMoneda.DOLAR">
                                 Dolares
                             </label>
                             </div>
                          </div>                        
                        <div class="form-group">
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                              <label for="Destino">Valor</label>
                           <input type="text"
                                  class="form-control"
                                  id="monto_Int"
                                  placeholder="Ingrese Monto"
                                  ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.ParametroViaticoInternacionalModel.Monto">
                            </div>
                          </div>                       	   
                        </div>
                        <div class="btn-toolbar" role="toolbar">
                         <div class="btn-group" role="group">
                           <button type="button" class="btn btn-success" ng-click="vm.Save()">Guardar</button>
                           <button type="button" class="btn btn-warning">Borrar</button>
                         </div>
                       </div>
                   </form>
                </div>                
             </div>
           </div>
        </div>
    </div>
</div>