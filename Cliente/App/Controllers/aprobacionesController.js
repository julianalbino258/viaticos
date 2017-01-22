(function(){
	
	'use strict';

	angular
		.module('GENSA.MGGV.App')
		.controller('GENSA.MGGV.AprobacionesController', AprobacionesController);

	AprobacionesController.$inject = [ 
		
	];	

	function AprobacionesController(){


		var vm = this;

		vm.ConfiguracionGlobalFactory = ConfiguracionGlobalFactory;

		vm.Save = Save;

		function Save () {
			vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.AprobacionViajeModel.GuardarTipoComponente(UtilsConstants.EnumTipoTramite.SOL_VIAJE_ANTICIPO).then(
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
	}
	

})();