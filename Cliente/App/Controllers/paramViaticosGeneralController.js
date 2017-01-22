(function(){
	
	'use strict';

	angular
		.module('GENSA.MGGV.App')
		.controller('GENSA.MGGV.paramViaticosGeneralController', paramViaticosGeneralController);

	paramViaticosGeneralController.$inject = [
		'GENSA.MGGV.Blocks.Utils.Constants',
		'GENSA.MGGV.ConfiguracionGlobalFactory'		
	];	

	function paramViaticosGeneralController(UtilsConstants, 
											ConfiguracionGlobalFactory)
	{
		var vm = this;

		vm.UtilsConstants = UtilsConstants;
		vm.ConfiguracionGlobalFactory = ConfiguracionGlobalFactory;
		
		vm.Save = Save;

		function Save () {
			vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.ParametroViaticoGeneralModel.GuardarTipoComponente(UtilsConstants.EnumTipoParametro.GASTO_GENERAL).then(
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