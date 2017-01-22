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
            <h3 class="panel-title">Conceptos de Gasto</h3>
          </div>
          <div class="panel-body">
            <parametro-viaticos 
              parametro-viaticos-dto="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.ParametroGastoModel"
              enum-tipo-componente="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.EnumTipoComponente">
            </parametro-viaticos>
          </div>          
        </div>                
      </div>
    </div>
  </div>
</div>