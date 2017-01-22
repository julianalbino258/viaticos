(function(){
	
	'use strict';

	angular
		.module('GENSA.MGGV.Tramites')
		.factory('GENSA.MGGV.Tramites.AprobacionViajeModel', AprobacionViajeModel);

		AprobacionViajeModel.$inject = [
			'$q',
			'$http',
			'GENSA.MGGV.Blocks.Utils.Constants',
			'GENSA.MGGV.Blocks.Utils.ResultActionsModel'
		];	

		function AprobacionViajeModel ($q,
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

					}

				};

			return Model;	
		}	

})();