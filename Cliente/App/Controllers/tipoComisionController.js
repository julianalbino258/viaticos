(function(){
	
	'use strict';

	angular
		.module('GENSA.MGGV.App')
		.controller('GENSA.MGGV.TipoComisionController', TipoComisionController);

	TipoComisionController.$inject = [
		'GENSA.MGGV.Blocks.Utils.Constants', 		
		'GENSA.MGGV.ConfiguracionGlobalFactory'		
	];	

	function TipoComisionController(UtilsConstants,
								    ConfiguracionGlobalFactory)
	{
		var vm = this;

		vm.ConfiguracionGlobalFactory = ConfiguracionGlobalFactory;

		vm.Save = Save;

		function Save () {
			
			vm.ConfiguracionGlobalFactory.ConfiguracionGlobalModel.ParametroViaticoModel.GuardarTipoComponente(UtilsConstants.EnumTipoParametro.COMISION).then(
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