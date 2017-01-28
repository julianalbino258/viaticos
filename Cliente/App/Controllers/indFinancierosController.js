(function(){
	
	'use strict';

	angular
		.module('GENSA.MGGV.App')
		.controller('GENSA.MGGV.IndicadoresFinancierosController', IndicadoresFinancierosController);

	IndicadoresFinancierosController.$inject = [ 
		'GENSA.MGGV.Blocks.Utils.Constants',
		'GENSA.MGGV.ConfiguracionGlobalFactory'
	];	

	function IndicadoresFinancierosController(UtilsConstants,
											  ConfiguracionGlobalFactory)
	{
		var vm = this;

		vm.ConfiguracionGlobalFactory = ConfiguracionGlobalFactory;

		vm.GuardarParametro = GuardarParametro;

		function GuardarParametro () {
			
			vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.ParametroViaticoModel.GuardarTipoComponente(UtilsConstants.EnumTipoParametro.FINANCIERO).then(
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