(function(){
	
	'use strict';

	angular
		.module('GENSA.MGGV.App')
		.factory('GENSA.MGGV.ConfiguracionGlobalFactory', ConfiguracionGlobalFactory);

		ConfiguracionGlobalFactory.$inject = [
			'GENSA.MGGV.ConfiguracionGlobalModel'
		];	

		function ConfiguracionGlobalFactory(ConfiguracionGlobalModel) 
		{
			var _self = this;
			
			var service = {
				ConfiguracionGlobalModel: new ConfiguracionGlobalModel()
			};

			return service;
		}	

})();