(function(){
	
	'use strict';

	angular
		.module('GENSA.MGGV.Parametros')
		.factory('GENSA.MGGV.Parametros.ParametroViaticoModel', ParametroViaticoModel);

		ParametroViaticoModel.$inject = [
			'$q',
			'$http',
			'GENSA.MGGV.Blocks.Utils.Constants',
			'GENSA.MGGV.Blocks.Utils.ResultActionsModel'
		];	

		function ParametroViaticoModel($q,
									   $http,
									   UtilsConstants,
									   ResultActionsModel) 
		{
			var Model = function(dataDTO){

				angular.extend(this, {

					Codigo: null,
					Nombre: null,
					Observaciones: null,
					TipoParametro: UtilsConstants.EnumTipoParametro.GASTO,

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
							.post(UtilsConstants.URLS.GuardarParametroURL, 
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
					var resultActionsModel = new ResultActionsModel();

					if(this.Codigo === null ||
					   this.Codigo === undefined)
					{
						resultActionsModel.SetMessageError("El campo Código no puede ser vacío");
						return resultActionsModel;
					}

					if(this.Nombre === null ||
					   this.Nombre === undefined)
					{
						resultActionsModel.SetMessageError("El campo Nombre no puede ser vacío");
						return resultActionsModel;
					}

					return resultActionsModel;
				}

			};

			return Model;	
		}	

})();