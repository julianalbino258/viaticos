(function(){
	
	'use strict';

	angular
		.module('GENSA.MGGV.Tramites')
		.factory('GENSA.MGGV.Tramites.SolicitudViajeModel', SolicitudViajeModel);

		SolicitudViajeModel.$inject = [
			'$q',
			'$http',
			'GENSA.MGGV.Blocks.Utils.Constants',
			'GENSA.MGGV.Blocks.Utils.ResultActionsModel'
		];	

		function SolicitudViajeModel ($q,
									  $http,
									  UtilsConstants,
									  ResultActionsModel) 
		{
			var _self = this;

				var Model = function(dataDTO){

					angular.extend(this, {

						/*Valores por defecto de la tabla de Funcionarios*/

						
						Cedula: null,   /*Este valor puede modificarse en caso de que el usuario haga la solicitud de otra persona*/
						Nombre: null,
						Cargo: 	null,
						Ciudad: null,
						Gerencia: null,
						Costos: null,
						FechaDil: new Date(),
						Email: null,
						Celular: null,						

						/*Valores Registrados por el usuario*/

						CiudadOri: null,
						CiudadInt: null, /*Campo opcional para el usuario*/
						CiudadDest: null,
						FechaSal: null,
						FechaReg: null,
						ObjetoViaje: null,
						TipoTransporte: UtilsConstants.EnumTipoTransporte.AEREO,
						Alojamiento: UtilsConstants.EnumAlojamiento.SEDE,
						Alimentacion: UtilsConstants.EnumAlimentacion.CASINO,						
						Anticipo: UtilsConstants.EnumAnticipo.SI,
						ConCargo: UtilsConstants.EnumConCargo.FUNCIONAMIENTO,
						TipoViajero: UtilsConstants.EnumTipoViajero.EMPLEADO,
						Cdp: null,
						Monto: null,

						GuardarTipoComponente: GuardarTipoComponente,
						ListarTipoComponente: ListarTipoComponente,
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

					function ValidarTipoComponente () 
					{
						if(_self.Cedula === null ||
						   _self.Cedula === undefined)
						{
							resultActionsModel.SetMessageError("La cédula no puede ser vacío");
							return resultActionsModel;
						}

						if(_self.Nombre === null ||
						   _self.Nombre === undefined)
						{
							resultActionsModel.SetMessageError("El Nombre no puede ser vacío");
							return resultActionsModel;
						}

						if(_self.Cargo === null ||
						   _self.Cargo === undefined)
						{
							resultActionsModel.SetMessageError("El Cargo no puede ser vacío");
							return resultActionsModel;
						}

						if(_self.Ciudad === null ||
						   _self.Ciudad === undefined)
						{
							resultActionsModel.SetMessageError("La Ciudad no puede ser vacío");
							return resultActionsModel;
						}

						if(_self.Gerencia === null ||
						   _self.Gerencia === undefined)
						{
							resultActionsModel.SetMessageError("La Gerencia no puede ser vacío");
							return resultActionsModel;
						}

						if(_self.Costos === null ||
						   _self.Costos === undefined)
						{
							resultActionsModel.SetMessageError("El Centro de Costos no puede ser vacío");
							return resultActionsModel;
						}

						if(_self.FechaDil === null ||
						   _self.FechaDil === undefined)
						{
							resultActionsModel.SetMessageError("La Fecha de Diligencia no puede ser vacío");
							return resultActionsModel;
						}

						if(_self.Email === null ||
						   _self.Email === undefined)
						{
							resultActionsModel.SetMessageError("El Email no puede ser vacío");
							return resultActionsModel;
						}

						if(_self.Celular === null ||
						   _self.Celular === undefined)
						{
							resultActionsModel.SetMessageError("el Celular no puede ser vacío");
							return resultActionsModel;
						}

						if(_self.CiudadOri === null ||
						   _self.CiudadOri === undefined)
						{
							resultActionsModel.SetMessageError("La Ciudad Origen no puede ser vacío");
							return resultActionsModel;
						}

						if(_self.CiudadInt === null ||
						   _self.CiudadInt === undefined)
						{
							resultActionsModel.SetMessageError("La Ciudad Intermedia no puede ser vacío");
							return resultActionsModel;
						}

						if(_self.CiudadDest === null ||
						   _self.CiudadDest === undefined)
						{
							resultActionsModel.SetMessageError("La Ciudad Destino no puede ser vacío");
							return resultActionsModel;
						}

						if(_self.FechaSal === null ||
						   _self.FechaSal === undefined)
						{
							resultActionsModel.SetMessageError("La Fecha de Salida no puede ser vacío");
							return resultActionsModel;
						}

						if(_self.FechaReg === null ||
						   _self.FechaReg === undefined)
						{
							resultActionsModel.SetMessageError("La Fecha de Regreso no puede ser vacío");
							return resultActionsModel;
						}

						if(_self.ObjetoViaje === null ||
						   _self.ObjetoViaje === undefined)
						{
							resultActionsModel.SetMessageError("El Objeto del Viaje no puede ser vacío");
							return resultActionsModel;
						}

						if(_self.Cdp === null ||
						   _self.Cdp === undefined)
						{
							resultActionsModel.SetMessageError("El Campo CDP no puede ser vacío");
							return resultActionsModel;
						}
					}

				};

			return Model;	
		}	

})();