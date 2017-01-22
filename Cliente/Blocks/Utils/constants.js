(function(){

	'use strict';

	var UtilsConstants = {

		// URL's Request
		URLS: {
			ServerRelativeURLPath: "Servidor/Servicios/api/",
			
			GuardarParametroURL: "",
			ListarParametroURL: "",
			GuardarTramiteURL: "",
			ListarTramiteURL: ""
		},

		EnumResult: {
			ERROR: 0,
			SUCCESS: 1
		},

		EnumTipoParametro: {
			GASTO: 1,
			FINANCIERO: 2,
			COMISION: 3,
			GASTO_INTERNACIONAL: 4,
			GASTO_GENERAL: 5
		},

		EnumTipoTramite: {
			SOL_VIAJE_ANTICIPO: 1,
			LEG_GASTO_VIAJE: 2,
			APROBACION_GASTO_LEGALIZACION: 3
		},

		EnumTipoInformes: {
			HIST_SOLICITUDES: 1,
			TABLA_VIATICO_GENERAL: 2,
			TABLA_VIATICO_INTERNACIONAL: 3
		},

		EnumTipoMoneda: {
			EURO: 1,
			DOLAR: 2
		},

		EnumTipoTransporte: {
			AEREO: 1,
			EMPRESATRANSPORTE: 2,
			PARTICULAR: 3,
			GENSA: 4
		},

		EnumAlojamiento: {
			SEDE: 1,
			HOTEL: 2
		},

		EnumAlimentacion: {
			CASINO: 1,
			RESTAURANTE: 2				
		},
		
		EnumAnticipo: {
			SI: 1,
			NO: 2
		},

		EnumConCargo: {
			FUNCIONAMIENTO: 1,
			HONORARIOS: 2,
			OPERACION: 3
		},

		EnumTipoViajero: {
			EMPLEADO: 1,
			CONTRATISTA: 2
		},

		EnumCategoriaFuncionario: {
			PRESIDENTE: 1,
			DIRECTIVO: 2,
			PROFESIONAL: 3,
			ASISTENTE: 4
		},

		EnumTipoCiudad: {
			TIPO_I: 1,
			TIPO_II: 2,
			TIPO_III: 3,
			TIPO_IV: 4, 
			TIPO_V: 5
		}
	};

	UtilsConstants.CategoriaFuncionarioList = [
		{
			Label: 'Presidente',
			Value: UtilsConstants.EnumCategoriaFuncionario.PRESIDENTE
		},
		{
			Label: 'Directivo',
			Value: UtilsConstants.EnumCategoriaFuncionario.DIRECTIVO
		},
		{
			Label: 'Profesional',
			Value: UtilsConstants.EnumCategoriaFuncionario.PROFESIONAL
		},
		{
			Label: 'Asistente',
			Value: UtilsConstants.EnumCategoriaFuncionario.ASISTENTE
		}
	];

	UtilsConstants.TipoCiudadList = [
		{
			Label: 'TIPO I',
			Value: UtilsConstants.EnumTipoCiudad.TIPO_I
		},
		{
			Label: 'TIPO II',
			Value: UtilsConstants.EnumTipoCiudad.TIPO_II
		},
		{
			Label: 'TIPO III',
			Value: UtilsConstants.EnumTipoCiudad.TIPO_III
		},
		{
			Label: 'TIPO IV',
			Value: UtilsConstants.EnumTipoCiudad.TIPO_IV
		},
		{
			Label: 'TIPO V',
			Value: UtilsConstants.EnumTipoCiudad.TIPO_V
		}

	];

	angular
		.module('GENSA.MGGV.Blocks.Utils')
		.constant('GENSA.MGGV.Blocks.Utils.Constants', UtilsConstants);

})();