(function(){
	
	'use strict';

	angular
		.module('GENSA.MGGV.App')
		.controller('GENSA.MGGV.LegalizacionController', LegalizacionController);

	LegalizacionController.$inject = [ 
		'GENSA.MGGV.Blocks.Utils.Constants',
		'GENSA.MGGV.ConfiguracionGlobalFactory'
	];	

	function LegalizacionController(UtilsConstants,
									  ConfiguracionGlobalFactory)
	{


		var vm = this;
		vm.ConfiguracionGlobalFactory = ConfiguracionGlobalFactory;

		vm.Save = Save;
		vm.RegistrarDetalleManutencion = RegistrarDetalleManutencion;
		vm.RegistrarOtrosGastos = RegistrarOtrosGastos;

		function Save () {
			vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.GuardarTipoComponente(UtilsConstants.EnumTipoTramite.LEG_GASTO_VIAJE).then(
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

		function RegistrarDetalleManutencion () 
		{
			vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.RegistrarDetalleManutencion();
		}

		function RegistrarOtrosGastos () 
		{
			vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.LegalizacionViaticoModel.RegistrarOtrosGastos();
		}		
	}	
	

})();