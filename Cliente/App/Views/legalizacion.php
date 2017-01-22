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
			                        <td rowspan="2" width="54%" align="center" class="Estilo09">DIRECCION FINANCIERA</td>
			                        <td width="8%" class="Estilo01">Código</td>
			                        <td width="8%" align="right" class="Estilo01">F-002</td>
			                      </tr>
			                      <tr>
			                        <td class="Estilo01">Vigencia</td>
			                        <td align="right" class="Estilo01">18/08/2016</td>
			                      </tr>
			                      <tr>
			                        <td rowspan="2" align="center" class="Estilo02">FORMATO LEGALIZACIÓN DE VIAJES</td>
			                        <td class="Estilo01">Versión</td>
			                        <td align="right" class="Estilo01">11</td>
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
					                         ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.Ciudad">
					                  </div>
					                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
					                       <label for="Fec_Dil">Fecha Diligenciamiento</label>
					                       <input type="date"
					                              id="Fec_Dil"
					                              class="form-control"
					                              ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.FechaDil">
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
					                         ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.Gerencia">
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
					                          ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.Cedula">
					                  </div>
					                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
					                    <label for="nc">Nombre y apellidos</label>
					                    <input type="text"
					                         class="form-control"
					                         id="nc"
					                         placeholder="Nombre completo"
					                         ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.Nombre">
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
					                          ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.Cargo">
					                  </div>
					                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
					                    <label for="cel">Celular</label>
					                    <input type="text"
					                          class="form-control"
					                          id="cel"
					                          placeholder="Contacto"
					                          ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.Celular">
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
					                          ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.Email">
					                  </div>
					                </div>
					              </div>
					              <ol class="breadcrumb">3. INFORMACIÓN DEL VIAJE.</ol>
								  <div class="form-group">
							                <div class="row">
							                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
							                    <label>Ciudad origen</label>
							                    <input type="text"
							                           class="form-control"
							                           placeholder="Ciudad orígen"
							                           ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.CiudadOri">
							                  </div>
							                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
							                    <label for="ejemplo_password_1">Ciudad destino</label>
							                    <input type="text"
							                           class="form-control" placeholder="Ciudad destino"
							                           ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.CiudadDest">
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
							                           ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.FechaSal">
							                  </div>
							                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
							                    <label for="Num_Dias">Días de Comisión</label>					 
							                    <input type="text"
							                           class="form-control"
							                     	   id="Num_Dias"
							                     	   ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.DiasComision">
							                  </div>
							                </div>
							              </div>
							              <ol class="breadcrumb">4. DETALLE GASTOS CAUSADOS.</ol>
							              <div class="form_group">
							              	<div class="row">
							              		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
							              			<label for="Tip_Ciudad">Tipo Ciudad</label>
							              	        <input type="text"
				                     	                   class="form-control"
				                     	                   id="Tip_Ciudad"
				                     	                   ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.TipoCiudad">
							              		</div>
							              		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
								          			<label for="KmRecorridos">Kilómetros Recorridos</label>					 
				                        			<input type="text"
					                     	   			   class="form-control"
					                     	               id="KmRecorridos"
					                     	               ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.Kilometros">
								          		</div>
							              	</div>						              	   
								          </div>
								          </br>
								          <div class="form-group">
								          	<label>DETALLE MANUTENCIÓN</label>
								          	<button class="btn btn-success" data-target="#manutencion_form_modal" data-toggle="modal">
								          		<span class="glyphicon glyphicon-pencil"></span>
								          	</button>
								          </div>
								          <div class="table-responsive" ng-show="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.MostrarDetalleManutencion">
										<table class="table table-bordered">									     
									     <thead>
									           <tr>
										         <th class="active">Fecha</th>
										         <th class="active">Hora Salida</th>
										         <th class="active">Hora Regreso</th>
										         <th class="active">Trayecto</th>												 
												 <th class="active">Valor</th>												 
									          </tr>
									     </thead>
									     <tbody>
									         <tr ng-repeat="detalleManutencion in vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.DetalleManutencionList">
										         <td>
										         	{{detalleManutencion.Fecha}}
										         </td>
										         <td>
										         	{{detalleManutencion.HoraSalida}}
										         </td>
										         <td>
										         	{{detalleManutencion.HoraRegreso}}
										         </td>
										         <td>
										         	{{detalleManutencion.Trayecto}}
										         </td>
												 <td>
												 	{{detalleManutencion.Valor}}
												 </td>										 
									         </tr>
									     </tbody>
								     </table>
									</div>
									<div class="form-group">
								          	<label>DESAGREGAR OTROS GASTOS</label>
								          	<button class="btn btn-success" data-target="#otrosGastos_form_modal" data-toggle="modal">
								          		<span class="glyphicon glyphicon-pencil"></span>
								          	</button>
								    </div>
									<div class="table-responsive" ng-show="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.MostrarDetalleOtrosGastos">
										<table class="table table-bordered">
									     <caption>DESAGREGAR OTROS GASTOS</caption>
									     <thead>
									           <tr>
										         <th class="active">NIT</th>
										         <th class="active">Razón Social</th>
										         <th class="active">Valor</th>
										         <th class="active">IVA</th>
												 <th class="active">Total(IVA)</th>
												 <th class="active">Retefuente</th>
												 <th class="active">ReteIva</th>
												 <th class="active">ReteIca</th>
												 <th class="active">Otros Desc</th>
												 <th class="active">Vr Pagado</th>
									          </tr>
									     </thead>
									     <tbody>
									         <tr ng-repeat="registrarOtrosGastos in vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.RegistrarOtrosGastosList">
										         <td>
										         	{{registrarOtrosGastos.Nit}}
										         </td>
										         <td>
										         	{{registrarOtrosGastos.RazonSocial}}
										         </td>
										         <td>
										         	{{registrarOtrosGastos.ValorFactura}}
										         </td>
										         <td>
										         	{{registrarOtrosGastos.Iva}}
										         </td>
												 <td>
												 	{{registrarOtrosGastos.ValorIva}}
												 </td>
												 <td>
												 	{{registrarOtrosGastos.ReteFuente}}
												 </td>
												 <td>
												 	{{registrarOtrosGastos.ReteIva}}
												 </td>
												 <td>
												 	{{registrarOtrosGastos.ReteIca}}
												 </td>
												 <td>
												 	{{registrarOtrosGastos.OtrosDescuentos}}
												 </td>
												 <td>
												 	{{registrarOtrosGastos.ValorPagado}}
												 </td>
									         </tr>
									     </tbody>
								     </table>
									</div>
									<div class="table-responsive">
										<table class="table table-bordered">
									     <caption>TOTALES</caption>
									     <thead>
									           <tr>
										         <th class="active">Total Otros Gastos</th>
										         <th class="active">Retenciones Practicadas</th>
										         <th class="active">Subtotal</th>
										         <th class="active">Anticipo Recibido</th>
												 <th class="active">Vr a Reintegrar</th>
												 <th class="active">Vr a Pagar</th>								 
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
									         </tr>
									     </tbody>
								     </table>
									</div>
									<div class="form-group">
										<label for="Obs_Leag">Actividades Realizadas Durante la Comisión</label>
				                     	<textarea class="form-control"
				                     			  rows="3"
				                     			  ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.ActividadesComision">
				                     	</textarea>
									</div>
				                     <div class="form-group">
				                     	<label for="Convenio">Con Cargo al Convenio y/o Proyecto</label>
				                     	<input type="text"
				                     		   class="form-control"
				                     		   id="Convenio"
				                     		   ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.Convenio">
				                     </div>									 
				                     <div class="form-group">
				                     	<label for="CDP">CDP No:</label>					 
				                     	<input type="text"
				                     		   class="form-control"
				                     		   id="CDP"
				                     		   ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.Cdp">
				                     </div>					 
				                     <div class="btn-toolbar" role="toolbar">
	                         			<div class="btn-group">
						                      <button type="button" class="btn btn-primary" ng-click="vm.Save()">Guardar</button>                      
						                      <button type="button" class="btn btn-success">Enviar</button>
						                      <button type="button" class="btn btn-danger">Cancelar</button>
	                   		 		    </div>
                   		 		     </div>
                    		</form>
                	</div>	                
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Detalle Manutencion Modal -->
<div class="modal fade" 
	 tabindex="-1" 
	 role="dialog" 
	 id="manutencion_form_modal"
	 data-backdrop="static"
	 data-keyboard="false">
  <div class="modal-dialog" role="document">
  	<div class="panel panel-primary">
  		<div class="panel-heading">
  			<button class="close" aria-label="Close" data-dismiss="modal">
  				<span aria-hidden="true">&times;</span>
  			</button>
  			<h4 class="panel-title">
  				Detalle Manutención
  			</h4>
  		</div>
  		<div class="modal-body">
  			<form role="form">
			    <div class="form-group">
			      <div class="row">
			        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
			          <label>Fecha</label>
			          <input type="date"
			               	 class="form-control col-md-5" 
			                 id="fechaModalManutencion"			                 
			                 ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.Fecha">
			        </div>
			        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
			          <label>Hora Salida</label>
			          <input type="time" 
			               	 class="form-control col-md-5" 
			                 id="horaSalidaModal"			                 
			                 ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.HoraSalida">
			        </div>
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="row">
			        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
			        	<label>Hora Regreso</label>
			          	<input type="time" 
			               	 class="form-control col-md-5" 
			                 id="horaRegresoModal"			                 
			                 ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.HoraRegreso">
			        </div>
			        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
			        	<label for="codigo_cg">Trayecto</label>
			          	<input type="text" 
			               	 class="form-control col-md-5" 
			                 id="trayectoModal"			                 
			                 ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.Trayecto">
			        </div>
			      </div>
			    </div>
			    <div class="form-group">
			    	<div class="row">
			    		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
			    			<label>Valor</label>
			          		<input type="text" 
			               	       class="form-control col-md-5" 
			                       id="valorModal"			                       
			                       ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.Valor">
			    		</div>
			    	</div>
			    </div>
			  </form>
  		</div>
  		<div class="modal-footer">
  			<button class="btn btn-primary" ng-click="vm.RegistrarDetalleManutencion()">Registrar</button>
  		</div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Desagregar Otros Gastos Modal -->
<div class="modal fade" 
	 tabindex="-1" 
	 role="dialog" 
	 id="otrosGastos_form_modal"
	 data-backdrop="static"
	 data-keyboard="false">
  <div class="modal-dialog" role="document">
  	<div class="panel panel-primary">
  		<div class="panel-heading">
  			<button class="close" aria-label="Close" data-dismiss="modal">
  				<span aria-hidden="true">&times;</span>
  			</button>
  			<h4 class="panel-title">
  				Detallar Otros Gastos
  			</h4>
  		</div>
  		<div class="modal-body">
  			<form role="form">
			    <div class="form-group">
			      <div class="row">
			        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
			          <label for="codigo_cg">NIT</label>
			          <input type="text"
			               	 class="form-control col-md-5" 
			                 id="ID_CG"
			                 placeholder="Ingrese código"
			                 ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.Nit">
			        </div>
			        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
			          <label for="codigo_cg">Razón Social</label>
			          <input type="text"
			               	 class="form-control col-md-5" 
			                 id="ID_CG"
			                 placeholder="Razón Social"
			                 ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.RazonSocial">
			        </div>
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="row">
			        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
			        	<label for="codigo_cg">Valor Factura</label>
			          	<input type="text" 
			               	 class="form-control col-md-5" 
			                 id="ID_CG"
			                 placeholder="Valor Factura"
			                 ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.ValorFactura">
			        </div>
			        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
			        	<label for="codigo_cg">IVA</label>
			          	<input type="text" 
			               	 class="form-control col-md-5" 
			                 id="ID_CG"
			                 placeholder="IVA"
			                 ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.Iva">
			        </div>
			      </div>
			    </div>
			    <div class="form-group">
			    	<div class="row">
			    		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
			    			<label for="codigo_cg">Valor + IVA</label>
			          		<input type="text" 
			               	       class="form-control col-md-5" 
			                       id="ID_CG"
			                       placeholder="Valor + IVA"
			                       ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.ValorIva">
			    		</div>
			    		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
			    			<label for="codigo_cg">ReteFuente</label>
			          		<input type="text" 
			               	       class="form-control col-md-5" 
			                       id="ID_CG"
			                       placeholder="ReteFuente"
			                       ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.ReteFuente">
			    		</div>
			    	</div>
			    </div>
			    <div class="form-group">
			    	<div class="row">
			    		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
			    			<label for="codigo_cg">ReteIVA</label>
			          		<input type="text" 
			               	       class="form-control col-md-5" 
			                       id="ID_CG"
			                       placeholder="ReteIVA"
			                       ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.ReteIva">
			    		</div>
			    		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
			    			<label for="codigo_cg">ReteIca</label>
			          		<input type="text" 
			               	       class="form-control col-md-5" 
			                       id="ID_CG"
			                       placeholder="ReteIca"
			                       ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.ReteIca">
			    		</div>
			    	</div>
			    </div>
			    <div class="form-group">
			       <div class="row">
			    		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
							 <label for="codigo_cg">Otros descuentos</label>
					         <input type="text" 
					                class="form-control col-md-5" 
					                id="ID_CG"
					               placeholder="Otros Descuentos"
					               ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.OtrosDescuentos">
			    	    </div>
			    		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
					    	<label for="codigo_cg">Valor Pagado</label>
					    	<input type="text" 
					      	       class="form-control col-md-5" 
					               id="ID_CG"
					               placeholder="Valor Pagado"
					               ng-model="vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.ValorPagado">
			    		</div>
			    	</div>
			    </div>
			    </div>
			  </form>
			  <div class="modal-footer">
		  			<button class="btn btn-primary" ng-click="vm.RegistrarOtrosGastos()">Registrar</button>
  		     </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->