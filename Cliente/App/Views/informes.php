<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
              <div class="panel">
                <a ui-sref="app.main" class="btn btn-default" id="menu-home"><span class="glyphicon glyphicon glyphicon-home"></a>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Informes</h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                  <div class="col-md-4">
                    <div class="panel panel-warning">
                      <div class="panel-heading"><h3 class="panel-title">Histórico de Solicitudes</h3></div>
                      <div class="panel-body">
                        <a class="btn btn-primary" id="menu-toggle" ng-click="vm.NavegacionFactory.GoToHistoricoSolicitudes()"><span class="glyphicon glyphicon-folder-open"></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                      <div class="panel panel-warning">
                      <div class="panel-heading"><h3 class="panel-title">Tabla de Viáticos General.</h3></div>
                      <div class="panel-body">
                        <a class="btn btn-primary" id="menu-toggle" ng-click="vm.NavegacionFactory.GoToTablaViaticosGeneral()"><span class="glyphicon glyphicon-folder-open"></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                      <div class="panel panel-warning">
                      <div class="panel-heading"><h3 class="panel-title">Tabla de Viáticos Internacional.</h3></div>
                      <div class="panel-body">
                        <a class="btn btn-primary" id="menu-toggle" ng-click="vm.NavegacionFactory.GoToTablaViaticosInternacional()"><span class="glyphicon glyphicon-folder-open"></a>
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
              