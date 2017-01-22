(function(){

	'use strict';

	angular
		.module('GENSA.MGGV.App')
		.factory('GENSA.MGGV.NavegacionFactory', NavegacionFactory);

	NavegacionFactory.$inject = [
		'$state',
		'GENSA.MGGV.Blocks.Utils.Constants',
		'GENSA.MGGV.ConfiguracionGlobalFactory'
	];	

	function NavegacionFactory($state,
							   UtilsConstants,
							   ConfiguracionGlobalFactory)
	{
		var service = {
			GoToParametroConceptoGasto: GoToParametroConceptoGasto,
			GoToParametroIndicadoresFinancieros: GoToParametroIndicadoresFinancieros,
			GoToParametroGastosInternacionales: GoToParametroGastosInternacionales,
			GoToParametroTipoComision: GoToParametroTipoComision,
			GoToParametroGastoGeneral: GoToParametroGastoGeneral,
			GoToViajesAnticipo: GoToViajesAnticipo,
			GoToGastosViaje: GoToGastosViaje,
			GoToGastosLegalizacion: GoToGastosLegalizacion,
			GoToHistoricoSolicitudes: GoToHistoricoSolicitudes, 
			GoToTablaViaticosGeneral: GoToTablaViaticosGeneral,
			GoToTablaViaticosInternacional: GoToTablaViaticosInternacional
		};

		function GoToParametroConceptoGasto()
		{
			ConfiguracionGlobalFactory.ConfiguracionGlobalModel.EnumTipoComponente = UtilsConstants.EnumTipoParametro.GASTO;
			ConfiguracionGlobalFactory.ConfiguracionGlobalModel.GetComponenteActual();
			$state.go('app.conc_gasto');
		}

		function GoToParametroIndicadoresFinancieros()
		{
			ConfiguracionGlobalFactory.ConfiguracionGlobalModel.EnumTipoComponente = UtilsConstants.EnumTipoParametro.FINANCIERO;
			ConfiguracionGlobalFactory.ConfiguracionGlobalModel.GetComponenteActual();
			$state.go('app.ind_financieros');
		}

		function GoToParametroGastosInternacionales()
		{
			ConfiguracionGlobalFactory.ConfiguracionGlobalModel.EnumTipoComponente = UtilsConstants.EnumTipoParametro.GASTO_INTERNACIONAL;
			ConfiguracionGlobalFactory.ConfiguracionGlobalModel.GetComponenteActual();
			$state.go('app.para_viaticoInternacional');
		}

		function GoToParametroTipoComision()
		{
			ConfiguracionGlobalFactory.ConfiguracionGlobalModel.EnumTipoComponente = UtilsConstants.EnumTipoParametro.COMISION;
			ConfiguracionGlobalFactory.ConfiguracionGlobalModel.GetComponenteActual();
			$state.go('app.tipo_comision');
		}

		function GoToParametroGastoGeneral()
		{
			ConfiguracionGlobalFactory.ConfiguracionGlobalModel.EnumTipoComponente = UtilsConstants.EnumTipoParametro.GASTO_GENERAL;
			ConfiguracionGlobalFactory.ConfiguracionGlobalModel.GetComponenteActual();
			$state.go('app.param_viaticosGeneral');
		}

		function GoToViajesAnticipo()
		{
			ConfiguracionGlobalFactory.ConfiguracionGlobalModel.EnumTipoComponente = UtilsConstants.EnumTipoParametro.SOL_VIAJE_ANTICIPO;
			ConfiguracionGlobalFactory.ConfiguracionGlobalModel.GetComponenteActual();
			$state.go('app.solicitud_viaje');
		}

		function GoToGastosViaje()
		{
			ConfiguracionGlobalFactory.ConfiguracionGlobalModel.EnumTipoComponente = UtilsConstants.EnumTipoParametro.LEG_GASTO_VIAJE;
			ConfiguracionGlobalFactory.ConfiguracionGlobalModel.GetComponenteActual();
			$state.go('app.legalizacion');
		}

		function GoToGastosLegalizacion()
		{
			ConfiguracionGlobalFactory.ConfiguracionGlobalModel.EnumTipoComponente = UtilsConstants.EnumTipoParametro.APROBACION_GASTO_LEGALIZACION;
			$state.go('app.aprobaciones');
		}

		function GoToHistoricoSolicitudes()
		{
			$state.go('app.hist_solicitudes');
		}

		function GoToTablaViaticosGeneral()
		{
			$state.go('app.tabla_viaticos');
		}

		function GoToTablaViaticosInternacional()
		{
			$state.go('app.tabla_internacional');
		}

		return service;
	}

})();