(function(){
	
	'use strict';

	angular
		.module('GENSA.MGGV.App')
		.controller('GENSA.MGGV.ParamViaticosInternacionalController', ParamViaticosInternacionalController);

	ParamViaticosInternacionalController.$inject = [
		'GENSA.MGGV.Blocks.Utils.Constants',
		'GENSA.MGGV.ConfiguracionGlobalFactory'		
	];	

	function ParamViaticosInternacionalController(UtilsConstants, 
												  ConfiguracionGlobalFactory)
	{
		var vm = this;

		vm.ConfiguracionGlobalFactory = ConfiguracionGlobalFactory;
		
		vm.Save = Save;

		function Save () {
			
			vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.ParametroViaticoInternacionalModel.GuardarTipoComponente(UtilsConstants.EnumTipoParametro.GASTO_INTERNACIONAL).then(
				function(resultActionsModel){

					if(resultActionsModel.HasError)
					{
						alert(resultActionsModel.Message);
						console.log(resultActionsModel.StackTraceMessage);
						return;
					}

					alert(resultActionsModel.Message);
				},
				function (error){
					console.log(error);
				}
			);
		}
	}
	

})();