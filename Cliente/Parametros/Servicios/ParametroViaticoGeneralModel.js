(function(){
	
	'use strict';

	angular
		.module('GENSA.MGGV.Parametros')
		.factory('GENSA.MGGV.Parametros.ParametroViaticoGeneralModel', ParametroViaticoGeneralModel);

		ParametroViaticoGeneralModel.$inject = [
			'$q',
			'$http',
			'GENSA.MGGV.Blocks.Utils.Constants',
			'GENSA.MGGV.Blocks.Utils.ResultActionsModel'
		];	

		function ParametroViaticoGeneralModel($q,
									   		  $http,
											  UtilsConstants,
											  ResultActionsModel) 
		{
			var Model = function(dataDTO){

				angular.extend(this, {

					ConceptoGasto: null,
					CategoriaFuncionario: UtilsConstants.EnumCategoriaFuncionario.ASISTENTE,					
					TipoCiudad: UtilsConstants.EnumTipoCiudad.TIPO_I,
					Valores:null,

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
					var deferred = $q.defer();
					var resultActionsModel = new ResultActionsModel();

					try
					{
						var requestDTO = 
						{
							EnumTipoComponente: enumTipoComponente
						};

						$http
							.post(UtilsConstants.URLS.ListarParametroURL, 
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

				function ValidarTipoComponente () 
				{
					var resultActionsModel = new ResultActionsModel();

					if(this.ConceptoGasto === null ||
					   this.ConceptoGasto === undefined)
					{
						resultActionsModel.SetMessageError("El código concepto de gasto no puede ser vacío");
						return resultActionsModel;
					}

					if(this.CategoriaFuncionario === null ||
					   this.CategoriaFuncionario === undefined)
					{
						resultActionsModel.SetMessageError("La categoría del solicitante no puede ser vacío");
						return resultActionsModel;
					}

					if(this.TipoCiudad === null ||
					   this.TipoCiudad === undefined)
					{
						resultActionsModel.SetMessageError("El tipo de ciudad no puede ser vacío");
						return resultActionsModel;
					}

					if(this.Valores === null ||
					   this.Valores === undefined)
					{
						resultActionsModel.SetMessageError("El Monto de la combinación no puede ser vacío");
						return resultActionsModel;
					}

					return resultActionsModel;
				}

			};

			return Model;
		}	

})();