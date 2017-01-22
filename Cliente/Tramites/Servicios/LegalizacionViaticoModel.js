(function(){
	
	'use strict';

	angular
		.module('GENSA.MGGV.Tramites')
		.factory('GENSA.MGGV.Tramites.LegalizacionViaticoModel', LegalizacionViaticoModel);

		LegalizacionViaticoModel.$inject = [
			'$q',
			'$http',
			'GENSA.MGGV.Blocks.Utils.Constants',
			'GENSA.MGGV.Blocks.Utils.ResultActionsModel'
		];	

		function LegalizacionViaticoModel ($q,
										   $http,
										   UtilsConstants,
										   ResultActionsModel) 
		{
				var Model = function(dataDTO){

					var _self = this;

					angular.extend(this, {

						MostrarDetalleManutencion: false,
						DetalleManutencionList: [],

						MostrarDetalleOtrosGastos: false,
						RegistrarOtrosGastosList: [],

						/*Valores por defecto de la tabla de Funcionarios*/

						Ciudad: null,
						FechaDil: new Date(),
						Gerencia: null,
						Costos: null,
						Cedula: null,   /*Este valor puede modificarse en caso de que el usuario haga la solicitud de otra persona*/
						Nombre: null,
						Cargo: 	null,
						Categoria: null,
						Celular: null,						
						Email: null,
						CiudadOri: null,						
						CiudadDest: null,
						FechaSal: null,
						DiasComision: null,						
						TipoCiudad: null,
						Kilometros: null,
						ActividadesComision: null,
						ConCargo: null,
						Cdp: null,
						Monto: null,
						
						/*Datos modal Manutención*/

						Fecha: new Date(),
						HoraSalida: new Date(),
						HoraRegreso: new Date(),
						Trayecto: null,
						Valor: null,
						TotalDia: null,

						/*Datos modal Detallar otros gastos*/

						Nit: null,
						RazonSocial: null,
						ValorFactura: null,
						Iva: null,
						ValorIva: null,
						ReteFuente: null,
						ReteIva: null,
						ReteIca: null,
						OtrosDescuentos: null,
						ValorPagado: null,

						GuardarTipoComponente: GuardarTipoComponente,
						ListarTipoComponente: ListarTipoComponente,
						RegistrarDetalleManutencion: RegistrarDetalleManutencion,
						RegistrarOtrosGastos: RegistrarOtrosGastos,
						ValidarTipoComponente: ValidarTipoComponente

					}, dataDTO);
		
					function GuardarTipoComponente(enumTipoComponente)
					{
						var deferred = $q.defer();
						var resultActionsModel = new ResultActionsModel();

						try
						{
							var requestDTO = 
							{
								EnumTipoComponente: enumTipoComponente,
								ComponenteActual: this
							};

							$http
								.post(UtilsConstants.URLS.GuardarTramiteURL, 
									angular.toJson(requestDTO))
									.success(
										function(data){
											deferred.resolve(new ResultActionsModel(data));
										}
									)
									.error(
										function(error){
											deferred.reject(new ResultActionsModel(error));
										}
									);
						}	
						catch (e)
						{
							resultActionsModel.SetStackTraceMessageError("Ha ocurrido un error durante el guardado de los datos", e.toString());
							deferred.reject(resultActionsModel);
						}	

						return deferred.promise;	
					}

					function ListarTipoComponente(enumTipoComponente)
					{

					}

					function RegistrarDetalleManutencion()
					{
						var resultActionsModel = ValidarDetalleManutencion();

						if(resultActionsModel.HasError)
						{
							return resultActionsModel;
						}

						_self.DetalleManutencionList.push(
							{
								Fecha: _self.Fecha,
								HoraSalida: _self.HoraSalida,
								HoraRegreso: _self.HoraRegreso,
								Trayecto: _self.Trayecto,
								Valor: _self.Valor
							}
						);

						_self.MostrarDetalleManutencion = true;
					}

					function RegistrarOtrosGastos()
					{
						var resultActionsModel = ValidarRegistrarOtrosGastos();
						
						if(resultActionsModel.HasError)
						{
							return resultActionsModel;
						}

						_self.RegistrarOtrosGastosList.push(
							{
								Nit: _self.Nit,
								RazonSocial: _self.RazonSocial,
								ValorFactura: _self.ValorFactura,
								Iva: _self.Iva,
								ValorIva: _self.ValorIva,
								ReteFuente: _self.ReteFuente,
								ReteIva: _self.ReteIva,
								ReteIca: _self.ReteIca,
								OtrosDescuentos: _self.OtrosDescuentos,
								ValorPagado: _self.ValorPagado

							}
						);

						_self.MostrarDetalleOtrosGastos = true;
					}

					function ValidarTipoComponente () 
					{
						var resultActionsModel = new ResultActionsModel();	

						if(_self.Ciudad === null ||
						   _self.Ciudad === undefined)
						{
							resultActionsModel.SetMessageError("El Campo Ciudad no puede ser vacío");
							return resultActionsModel;	
						}

						if(_self.FechaDil === null ||
						   _self.FechaDil === undefined)
						{
							resultActionsModel.SetMessageError("El Campo Fecha Diligenciamiento no puede ser vacío");
							return resultActionsModel;	
						}

						if(_self.Gerencia === null ||
						   _self.Gerencia === undefined)
						{
							resultActionsModel.SetMessageError("El Campo Gerencia no puede ser vacío");
							return resultActionsModel;	
						}

						if(_self.Costos === null ||
						   _self.Costos === undefined)
						{
							resultActionsModel.SetMessageError("El Campo Centro de Costos no puede ser vacío");
							return resultActionsModel;	
						}

						if(_self.Cedula === null ||
						   _self.Cedula === undefined)
						{
							resultActionsModel.SetMessageError("El Campo Cédula no puede ser vacío");
							return resultActionsModel;	
						}

						if(_self.Nombre === null ||
						   _self.Nombre === undefined)
						{
							resultActionsModel.SetMessageError("El Campo Nombre no puede ser vacío");
							return resultActionsModel;	
						}

						if(_self.Cargo === null ||
						   _self.Cargo === undefined)
						{
							resultActionsModel.SetMessageError("El Campo Cargo no puede ser vacío");
							return resultActionsModel;	
						}

						if(_self.Categoria === null ||
						   _self.Categoria === undefined)
						{
							resultActionsModel.SetMessageError("El Campo Categoria no puede ser vacío");
							return resultActionsModel;	
						}

						if(_self.Celular === null ||
						   _self.Celular === undefined)
						{
							resultActionsModel.SetMessageError("El Campo Celular no puede ser vacío");
							return resultActionsModel;	
						}

						if(_self.Email === null ||
						   _self.Email === undefined)
						{
							resultActionsModel.SetMessageError("El Campo Email no puede ser vacío");
							return resultActionsModel;	
						}

						if(_self.CiudadOri === null ||
						   _self.CiudadOri === undefined)
						{
							resultActionsModel.SetMessageError("El Campo Ciudad Origen no puede ser vacío");
							return resultActionsModel;	
						}

						if(_self.CiudadDest === null ||
						   _self.CiudadDest === undefined)
						{
							resultActionsModel.SetMessageError("El Campo Ciudad Destino no puede ser vacío");
							return resultActionsModel;	
						}

						if(_self.FechaSal === null ||
						   _self.FechaSal === undefined)
						{
							resultActionsModel.SetMessageError("El Campo Fecha Salida no puede ser vacío");
							return resultActionsModel;	
						}

						if(_self.DiasComision === null ||
						   _self.DiasComision === undefined)
						{
							resultActionsModel.SetMessageError("El Campo Dias Comision no puede ser vacío");
							return resultActionsModel;	
						}

						if(_self.TipoCiudad === null ||
						   _self.TipoCiudad === undefined)
						{
							resultActionsModel.SetMessageError("El Campo Tipo Ciudad no puede ser vacío");
							return resultActionsModel;	
						}

						if(_self.Kilometros === null ||
						   _self.Kilometros === undefined)
						{
							resultActionsModel.SetMessageError("El Campo Kilometros no puede ser vacío");
							return resultActionsModel;	
						}

						if(_self.ActividadesComision === null ||
						   _self.ActividadesComision === undefined)
						{
							resultActionsModel.SetMessageError("El Campo Actividades Comision no puede ser vacío");
							return resultActionsModel;	
						}

						if(_self.ConCargo === null ||
						   _self.ConCargo === undefined)
						{
							resultActionsModel.SetMessageError("El Campo Con Cargo no puede ser vacío");
							return resultActionsModel;	
						}

						if(_self.Cdp === null ||
						   _self.Cdp === undefined)
						{
							resultActionsModel.SetMessageError("El Campo CDP no puede ser vacío");
							return resultActionsModel;	
						}

						if(_self.Monto === null ||
						   _self.Monto === undefined)
						{
							resultActionsModel.SetMessageError("El Campo Monto no puede ser vacío");
							return resultActionsModel;	
						}						
					}

					function  ValidarDetalleManutencion() 
					{
						var resultActionsModel = new ResultActionsModel();

						return resultActionsModel;
						
					}

					function  ValidarRegistrarOtrosGastos()
					{
						var resultActionsModel = new ResultActionsModel();

						return resultActionsModel;
					}

				};

			return Model;	
		}	

})();