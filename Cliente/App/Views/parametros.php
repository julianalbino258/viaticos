<div id="page-content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="panel">
          <a ui-sref="app.main" class="btn btn-default" id="menu-home"><span class="glyphicon glyphicon glyphicon-home"></a>
        </div>
        <div class="panel panel-primary">
             <div class="panel-heading">
                <h3 class="panel-title">Parámetros Generales</h3>
             </div>
              <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                      <div class="panel panel-warning">
                        <div class="panel-heading"><h3 class="panel-title">Conceptos de Gasto</h3></div>
                        <div class="panel-body">
                          <a class="btn btn-primary" id="menu-toggle" ng-click="vm.NavegacionFactory.GoToParametroConceptoGasto()"><span class="glyphicon glyphicon-folder-open"></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="panel panel-warning">
                          <div class="panel-heading">
                            <h3 class="panel-title">Indicadores Financieros</h3>
                          </div>
                          <div class="panel-body">
                            <a class="btn btn-primary" id="menu-toggle" ng-click="vm.NavegacionFactory.GoToParametroIndicadoresFinancieros()"><span class="glyphicon glyphicon-folder-open"></a>
                          </div>
                      </div>
                    </div>
                  <div class="col-md-4">
                        <div class="panel panel-warning">
                        <div class="panel-heading"><h3 class="panel-title">Parámetros Gastos Internacionales</h3></div>
                        <div class="panel-body">
                          <a class="btn btn-primary" id="menu-toggle" ng-click="vm.NavegacionFactory.GoToParametroGastosInternacionales()"><span class="glyphicon glyphicon-folder-open"></a>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                    <div class="panel panel-warning">
                      <div class="panel-heading"><h3 class="panel-title">Tipos de Comisión</h3></div>
                         <div class="panel-body">
                           <a class="btn btn-primary" id="menu-toggle" ng-click="vm.NavegacionFactory.GoToParametroTipoComision()"><span class="glyphicon glyphicon-folder-open"></a>
                         </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="panel panel-warning">
                          <div class="panel-heading">
                            <h3 class="panel-title">Parámetros Gastos General</h3>
                          </div>
                          <div class="panel-body">
                            <a class="btn btn-primary" id="menu-toggle" ng-click="vm.NavegacionFactory.GoToParametroGastoGeneral()"><span class="glyphicon glyphicon-folder-open"></a>
                          </div>
                      </div>
                    </div>
                  </div>                  
                  </div>                  
                </div>                
            </div>
        </div>
    </div>
</div>