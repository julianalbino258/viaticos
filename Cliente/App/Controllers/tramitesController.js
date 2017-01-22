(function(){
	
	'use strict';

	angular
		.module('GENSA.MGGV.App')
		.controller('GENSA.MGGV.TramitesController', TramitesController);

	TramitesController.$inject = [ 
		'GENSA.MGGV.NavegacionFactory'
	];	

	function TramitesController(NavegacionFactory)
	{
		var vm = this;

		vm.NavegacionFactory = NavegacionFactory;
	}
	

})();