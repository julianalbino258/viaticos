(function(){
	
	'use strict';

	angular
		.module('GENSA.MGGV.App')
		.controller('GENSA.MGGV.InformesController', InformesController);

	InformesController.$inject = [ 
		'GENSA.MGGV.NavegacionFactory'
	];	

	function InformesController(NavegacionFactory)
	{
		var vm = this;

		vm.NavegacionFactory = NavegacionFactory;
	}
	

})();