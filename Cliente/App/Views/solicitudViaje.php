<div id="page-content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10">
        <div class="panel">
          <a  ui-sref="app.tramites" class="btn btn-default" id="menu-home"><span class="glyphicon glyphicon glyphicon-chevron-left"></a>
          <a ui-sref="app.main" class="btn btn-default" id="menu-home"><span class="glyphicon glyphicon glyphicon-home"></a>
        </div>         
        <div class="panel panel-primary">         
          <div class="panel-body">
            <div class="table-responsive">
                  <table width="95%" 
                         border="1" 
                         align="center" 
                         cellspacing="0" 
                         cellpadding="0" 
                         bordercolor="#CCCCCC">
                      <tr>
                        <td rowspan="4" width="20%" align="center">
                          <img src="Cliente/App/content/images/logo1.jpg">
                        </td>
                        <td rowspan="2" width="54%" align="center" class="Estilo09">DIRECCION ADMINISTRATIVA DE TALENTO HUMANO Y TECNOLOGÍA</td>
                        <td width="8%" class="Estilo01">Código</td>
                        <td width="8%" align="right" class="Estilo01">F-001</td>
                      </tr>
                      <tr>
                        <td class="Estilo01">Vigencia</td>
                        <td align="right" class="Estilo01">17/03/2013</td>
                      </tr>
                      <tr>
                        <td rowspan="2" align="center" class="Estilo02">SOLICITUD DE VIAJES</td>
                        <td class="Estilo01">Versión</td>
                        <td align="right" class="Estilo01">9</td>
                      </tr>
                      <tr>
                        <td class="Estilo01">Página</td>
                        <td align="right" class="Estilo01">1</td>
                      </tr>
                    </table>
            </div>
          </br>
            <form role="form">
               <ol class="breadcrumb">1. INFORMACIÓN GENERAL.</ol>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                      <label for="doc"> Ciudad</label>
                      <input type="text"
                             class="form-control"
                             id="doc"
                             placeholder="ciudad"
                             ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.Ciudad">
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                       <label for="Fec_Dil">Fecha Diligenciamiento</label>
                       <input type="date"
                              id="Fec_Dil"
                              class="form-control"
                              ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.FechaDil">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <label for="doc"> Gerencia o Dirección</label>
                    <input type="text"
                         class="form-control"
                         id="doc"
                         placeholder="Gerencia"
                         ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.Gerencia">
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <label for="doc"> Centro de Costos</label>
                    <input type="text"
                         class="form-control"
                         id="doc"
                         placeholder="Centro de Costos"
                         ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.Costos">
                  </div>
                </div>
              </div>
              <ol class="breadcrumb">2. INFORMACIÓN SOLICITANTE.</ol>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <label for="doc"> Digite su Cédula</label>
                    <input type="text"
                          class="form-control"
                          id="doc"
                          placeholder="Cédula"
                          ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.Cedula">
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <label for="nc">Nombre y apellidos</label>
                    <input type="text"
                         class="form-control"
                         id="nc"
                         placeholder="Nombre completo"
                         ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.Nombre">
                  </div>
                </div>                   
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <label for="cargo">Cargo</label>
                    <input type="text"
                          class="form-control"
                          id="cargo"
                          placeholder="Cargo"
                          ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.Cargo">
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <label for="cel">Celular</label>
                    <input type="text"
                          class="form-control"
                          id="cel"
                          placeholder="Contacto"
                          ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.Celular">
                  </div>
                </div>                       
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <label for="correo">E-mail</label>
                    <input type="text"
                          class="form-control"
                          id="correo"
                          placeholder="E-mail"
                          ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.Email">
                  </div>
                </div>
              </div>

              <button ng-click="vm.ObtenerFuncionario()">Obtener</button>

              <ol class="breadcrumb">3. INFORMACIÓN DEL VIAJE.</ol>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <label>Ciudad origen</label>
                    <input type="text"
                           class="form-control"
                           placeholder="Ciudad orígen"
                           ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.CiudadOri">
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <label for="ejemplo_password_1">Ciudad intermedia</label>
                    <input type="text"
                          class="form-control"
                          placeholder="Ciudad intermedia"
                          ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.CiudadInt">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <label for="ejemplo_password_1">Ciudad destino</label>
                    <input type="text"
                           class="form-control" placeholder="Ciudad destino"
                           ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.CiudadDest">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <label for="Fec_Salida">Fecha de Salida</label>
                    <input type="date"
                           id="Fec_Salida"
                           class="form-control"
                           ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.FechaSal">
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <label for="Fec_Regreso">Fecha de Regreso</label>
                    <input type="date"
                           id="Fec_Regreso"
                           class="form-control"
                           ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.FechaReg">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label>Objeto del viaje (Justifique el no uso de videoconferencia)</label>
                       <textarea class="form-control"
                                 rows="3"
                                 ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.ObjetoViaje">
                       </textarea>
                  </div>
                </div>
              </div>
              <div class="form-group">
                     <label for="Destino">Tipo Viajero</label>
                      <div class="radio">
                          <label>
                              <input type="radio"
                                   name="Tipo_usuario"
                                   id="Empl"                                   
                                   ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.EnumTipoViajero.EMPLEADO">
                               Empleado
                          </label>
                          <label>
                              <input type="radio"
                                   name="Tipo_usuario"
                                   id="Contr"                                   
                                   ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.EnumTipoViajero.CONTRATISTA">
                               Contratista
                          </label>
                      </div>
              </div>           
              <div class="form-group">
                       <label for="ejemplo_archivo_1">Tipo de tansporte</label>
                         <div class="radio">
                          <label>
                             <input type="radio"
                               name="trans"
                               id="tran_a"
                               ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.EnumTipoTransporte.AEREO">
                               Transporte aéreo
                          </label>
                         </div>
                         <div class="radio">
                           <label>
                             <input type="radio"
                                    name="trans"
                                    id="tran_t"
                                    ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.EnumTipoTransporte.EMPRESATRANSPORTE">
                              Empresa de Transportes
                         </label>
                         </div>
                         <div class="radio">
                            <label>
                            <input type="radio"
                               name="trans"
                               id="tran_p"
                               ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.EnumTipoTransporte.PARTICULAR">
                               Vehículo Propio
                          </label>
                         </div>
                         <div class="radio">
                            <label>
                            <input type="radio"
                               name="trans"
                               id="tran_gensa"
                               ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.EnumTipoTransporte.GENSA">
                               Vehículo Gensa
                          </label>
                         </div>
                       </div>
                    <div class="form-group">
                       <label>Tipo de Alojamiento</label>
                          <div class="radio">
                           <label>
                            <input type="radio"
                                   name="alojamiento"
                                   id="si_Alojamiento"
                                   ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.EnumAlojamiento.SEDE">
                               Alojamiento en Sede
                          </label>
                        </div>
                        <div class="radio">
                           <label>
                            <input type="radio"
                               name="alojamiento"
                               id="no_Alojamiento"
                               ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.EnumAlojamiento.HOTEL">
                               Requiere Hotel
                           </label>
                        </div>
                    </div>
                    <div class="form-group">
                       <label for="ejemplo_archivo_1">Alimentación En</label>
                          <div class="radio">
                           <label>
                            <input type="radio"
                                   name="casino"
                                   id="si_Casino"
                                   ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.EnumAlimentacion.CASINO">
                               Sede con Casino
                          </label>
                        </div>
                        <div class="radio">
                           <label>
                            <input type="radio"
                                   name="casino"
                                   id="no_Casino"
                                   ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.EnumAlimentacion.RESTAURANTE">
                               Sede sin Casino (Requiere incluir Gastos de Alimentación)
                           </label>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="ejemplo_archivo_1">Con Cargo A:</label>
                      <div class="radio">    
                        <label>
                          <input type="radio"
                                 name="funcionamiento"
                                 id="funcionamiento"
                                 ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.EnumConCargo.FUNCIONAMIENTO">
                                 Gastos de Funcionamiento
                        </label>                       
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio"
                                 name="funcionamiento"
                                 id="honorarios"
                                 ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.EnumConCargo.HONORARIOS"> 
                                 Honorarios
                        </label>                     
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio"
                                 name="funcionamiento"
                                 id="operacion"
                                 ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.EnumConCargo.OPERACION">
                                 Gastos de Operación
                        </label>                     
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="ejemplo_archivo_1">Requiere Anticipo</label>
                      <div class="radio">    
                        <label>
                          <input type="radio"
                                 name="anticipo"
                                 id="si_anticipo"
                                 ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.EnumAnticipo.SI">
                                 Si
                        </label>                       
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" 
                                 name="anticipo"
                                 id="no_anticipo"
                                 ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.EnumAnticipo.NO">
                                 No
                        </label>                     
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                          <label for="cdp">Número CDP</label>
                          <input class="form-control"
                                 id="cdp"
                                 type="text"
                                 ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.Cdp">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                          <label for="vr_viaticos">Valor Proyectado Viáticos</label>
                          <input class="form-control"
                                 id="vr_viaticos"
                                 type="text">
                        </div>
                      </div>
                    </div>                    
                    <div class="form-group">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <textarea readonly class="form-control">Autorizo a GENSA para deducir de mi salario o de mis prestaciones sociales, en caso de retiro definitivo los valores anticipados no reintegrados dentro de los cinco días siguientes a la realización de la comisión
                          </textarea>
                        </div>
                      </div>                       
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary" ng-click="vm.GuardadSolicitudViaje()">Guardar</button>                      
                      <button type="button" class="btn btn-success">Enviar</button>
                      <button type="button" class="btn btn-danger">Cancelar</button>
                    </div>
                  </form>
                </div>
        </div>
      </div>
    </div>
  </div>
</div>