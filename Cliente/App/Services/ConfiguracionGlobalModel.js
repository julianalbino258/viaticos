(function(){
	
	'use strict';

	angular
		.module('GENSA.MGGV.App')
		.factory('GENSA.MGGV.ConfiguracionGlobalModel', ConfiguracionGlobalModel);

		ConfiguracionGlobalModel.$inject = [
			'GENSA.MGGV.Blocks.Utils.Constants',
			'GENSA.MGGV.Parametros.ParametroViaticoModel',
			'GENSA.MGGV.Parametros.ParametroViaticoInternacionalModel',
			'GENSA.MGGV.Parametros.ParametroViaticoGeneralModel',
			'GENSA.MGGV.Tramites.SolicitudViajeModel',
			'GENSA.MGGV.Tramites.LegalizacionViaticoModel'
		];	

		function ConfiguracionGlobalModel(UtilsConstants,
										  ParametroViaticoModel,
										  ParametroViaticoInternacionalModel,
										  ParametroViaticoGeneralModel,
										  SolicitudViajeModel,
										  LegalizacionViaticoModel)
		{
			var Model = function(dataDTO){

				var _self = this;
				var _componenteActual = null;

				angular.extend(this, {

					EnumTipoComponente: UtilsConstants.EnumTipoParametro.GASTO,

					ParametroGastoModel: new ParametroViaticoModel(),
					ParametroFinancieroModel: new ParametroViaticoModel(),
					ParametroComisionModel: new ParametroViaticoModel(),
					ParametroViaticoGeneralModel: new ParametroViaticoGeneralModel(),
					ParametroViaticoInternacionalModel: new ParametroViaticoInternacionalModel(),
					SolicitudViajeModel: new SolicitudViajeModel(),
					LegalizacionViaticoModel: new LegalizacionViaticoModel(),

					GetComponenteActual: GetComponenteActual,

					GuardarTipoComponente: GuardarTipoComponente,
					ListarTipoComponente: ListarTipoComponente,
					ValidarTipoComponente: ValidarTipoComponente,

					IsParametroGasto: IsParametroGasto,
					IsParametroFinanciero: IsParametroFinanciero,
					IsParametroComision: IsParametroComision,
					IsParametroViaticoGeneral: IsParametroViaticoGeneral,
					IsParametroViaticoInternacional: IsParametroViaticoInternacional,
					IsSolicitudViaje: IsSolicitudViaje,
					IsLegalizacionViaje: IsLegalizacionViaje						

				}, dataDTO);

				function GetComponenteActual()
				{
					if(IsParametroGasto())
					{
						return this.ParametroGastoModel;
					}

					if(IsParametroFinanciero())
					{
						return this.ParametroFinancieroModel;
					}

					if(IsParametroComision())
					{
						return this.ParametroComisionModel;
					}

					if(IsParametroViaticoGeneral())
					{
						return this.ParametroViaticoGeneralModel;
					}

					if(IsParametroViaticoInternacional())
					{
						return this.ParametroViaticoInternacionalModel;
					}

					if(IsSolicitudViaje())
					{
						return this.SolicitudViajeModel;
					}

					if(IsLegalizacionViaje())
					{
						return this.LegalizacionViaticoModel;
					}
				}

				function GuardarTipoComponente()
				{
					return _componenteActual.GuardarTipoComponente(this.EnumTipoComponente);
				}

				function ListarTipoComponente()
				{
					return _componenteActual.ListarTipoComponente(this.EnumTipoComponente);
				}

				function ValidarTipoComponente()
				{
					return _componenteActual.ValidarTipoComponente();
				}

				function IsParametroGasto()
				{	
					return _self.EnumTipoComponente === UtilsConstants.EnumTipoParametro.GASTO;
				}

				function IsParametroFinanciero()
				{
					return _self.EnumTipoComponente === UtilsConstants.EnumTipoParametro.FINANCIERO;
				}

				function IsParametroComision()
				{
					return _self.EnumTipoComponente === UtilsConstants.EnumTipoParametro.COMISION;
				}

				function IsParametroViaticoGeneral()
				{
					return _self.EnumTipoComponente === UtilsConstants.EnumTipoParametro.GASTO_GENERAL;
				}

				function IsParametroViaticoInternacional()
				{
					return _self.EnumTipoComponente === UtilsConstants.EnumTipoParametro.GASTO_INTERNACIONAL;
				}	

				function IsSolicitudViaje()
				{
					return _self.EnumTipoComponente === UtilsConstants.EnumTipoParametro.SOL_VIAJE_ANTICIPO;
				}

				function IsLegalizacionViaje()
				{
					return _self.EnumTipoComponente === UtilsConstants.EnumTipoParametro.LEG_GASTO_VIAJE;
				}

			};

			return Model;	
		}	

})();