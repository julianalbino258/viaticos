(function(){
	
	'use strict';

	angular
		.module('GENSA.MGGV.App')
		.controller('GENSA.MGGV.ParametrosController', ParametrosController);

	ParametrosController.$inject = [
		'GENSA.MGGV.NavegacionFactory'
	];	

	function ParametrosController(NavegacionFactory)
	{
		var vm = this;

		vm.NavegacionFactory = NavegacionFactory;
	}

})();