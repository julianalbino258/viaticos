<div id="page-content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="panel">
          <a  ui-sref="app.tramites" class="btn btn-default" id="menu-home"><span class="glyphicon glyphicon glyphicon-chevron-left"></a>
          <a ui-sref="app.main" class="btn btn-default" id="menu-home"><span class="glyphicon glyphicon glyphicon-home"></a>
        </div>
        <div class="panel panel-primary">
              <div class="panel-heading">
                 <h3 class="panel-title">Solicitudes para Aprobación</h3>
              </div>
          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                 <tr>
                   <th class="warning">Cédula</th>
                   <th class="warning">Nombre</th>
                   <th class="warning">Fecha Viaje</th>
                   <th class="warning">Fecha Regreso</th>
                   <th class="warning">Motivo Comisión</th>
                   <th class="warning">Valor Anticipo</th>
                   <th class="warning">A favor Funcionario</th>
                   <th class="warning">A Reintegrar</th>
                   <th class="warning">Aprobado</th>
                   <th class="warning">Rechazado</th>
                 </tr>
              </thead>
              <tbody>
                 <tr>             
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td>
                     <div class="radio">
                          <label>
                            <input type="radio"
                                   name="estadoAprobacion"
                                   id="Aprobar">
                          </label>
                      </div>
                   </td>
                   <td>
                      <div class="radio">
                          <label>
                            <input type="radio"
                                   name="estadoAprobacion"
                                   id="Rechazar">
                          </label>
                      </div>
                   </td>
                 </tr>         
              </tbody>
            </table>
            <div class="form-group">
              <div class="btn-toolbar" role="toolbar">
              <div class="btn-group" role="group">         
                <button type="button" class="btn btn-success" ng-click="$ctrl.Save()">Aceptar</button> 
                <button type="button" class="btn btn-warning">Borrar</button>
              </div>
           </div>
         </div>        
      </div>      
    </div>
  </div>
</div>