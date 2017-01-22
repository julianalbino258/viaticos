(function(){
	
	'use strict';

	angular
		.module('GENSA.MGGV.App')
		.controller('GENSA.MGGV.ConceptoGastoController', ConceptoGastoController);

	ConceptoGastoController.$inject = [ 
		'GENSA.MGGV.Blocks.Utils.Constants',
		'GENSA.MGGV.ConfiguracionGlobalFactory'
	];	

	function ConceptoGastoController(UtilsConstants,
									 ConfiguracionGlobalFactory)
	{
		var vm = this;

		vm.ConfiguracionGlobalFactory = ConfiguracionGlobalFactory;

		vm.Save = Save;

		function Save () {
			
			vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.ParametroViaticoModel.GuardarTipoComponente(UtilsConstants.EnumTipoParametro.GASTO).then(
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