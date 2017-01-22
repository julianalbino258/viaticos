<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
              <div class="panel">
                <a ui-sref="app.main" class="btn btn-default" id="menu-home"><span class="glyphicon glyphicon glyphicon-home"></a>
              </div>
              <div class="panel panel-primary">
                 <div class="panel-heading">
                    <h3 class="panel-title">Trámites</h3>
                 </div>
                   <div class="panel-body">
                    <div class="row">
                          <div class="col-md-4">
                            <div class="panel panel-warning">
                              <div class="panel-heading">
                                <h3 class="panel-title">Sol. de Viajes y Anticipo                                    
                                </h3>
                              </div>
                              <div class="panel-body">
                                <a class="btn btn-primary" id="menu-toggle" ng-click="vm.NavegacionFactory.GoToViajesAnticipo()"><span class="glyphicon glyphicon-folder-open"></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                              <div class="panel panel-warning">
                              <div class="panel-heading"><h3 class="panel-title">Leg. Gastos de Viaje.</h3></div>
                              <div class="panel-body">
                                <a class="btn btn-primary" id="menu-toggle" ng-click="vm.NavegacionFactory.GoToGastosViaje()"><span class="glyphicon glyphicon-folder-open"></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                              <div class="panel panel-warning">
                              <div class="panel-heading"><h3 class="panel-title">Aprobación Gastos y Legalización.</h3></div>
                              <div class="panel-body">
                                <a class="btn btn-primary" id="menu-toggle" ng-click="vm.NavegacionFactory.GoToGastosLegalizacion()"><span class="glyphicon glyphicon-folder-open"></a>
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