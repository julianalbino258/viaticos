(function(){
	
	'use strict';

	angular
		.module('GENSA.MGGV.App')
		.controller('GENSA.MGGV.SolicitudViajeController', SolicitudViajeController);

	SolicitudViajeController.$inject = [ 
		'GENSA.MGGV.Blocks.Utils.Constants',
		'GENSA.MGGV.ConfiguracionGlobalFactory',
		'GENSA.MGGV.Tramites.SolicitudViajeModel'
	];	

	function SolicitudViajeController(UtilsConstants,
									  ConfiguracionGlobalFactory,
									  SolicitudViajeModel)
	{
		var vm = this;

		vm.ConfiguracionGlobalFactory = ConfiguracionGlobalFactory;

		vm.GuardadSolicitudViaje = GuardadSolicitudViaje;
		vm.ObtenerFuncionario = ObtenerFuncionario;

		//Métodos Públicos

		function GuardadSolicitudViaje() 
		{
			vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.GuardarTipoComponente(UtilsConstants.EnumTipoTramite.SOL_VIAJE_ANTICIPO).then(
				function (resultActionsModel){

					if(resultActionsModel.HasError)
					{
						alert(resultActionsModel.Message);
						console.log(resultActionsModel.StackTraceMessage);
						return;
					}

					alert(resultActionsModel.Message);
				},
				function (error){
					alert('Error');
					console.log(error);
				}
			);
		}

		function ObtenerFuncionario()
		{
			vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel.ObtenerFuncionario(UtilsConstants.EnumTipoTramite.SOL_VIAJE_ANTICIPO).then(
				function (resultActionsModel)
				{
					if(resultActionsModel.HasError)
					{
						alert(resultActionsModel.Message);
						console.log(resultActionsModel.StackTraceMessage);
						return;
					}

					vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.SolicitudViajeModel = new SolicitudViajeModel(resultActionsModel.ResultData[0]);
				},
				function (error){
					alert('Error');
					console.log(error);
				}
			);
		}

		// Métodos Privados

	}
})();