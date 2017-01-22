(function(){

	'use strict';

	angular
		.module('GENSA.MGGV.App')
		.config(MGGVAppConfiguration);

	MGGVAppConfiguration.$inject = [
		'$stateProvider', 
		'$urlRouterProvider'
	];	

	function MGGVAppConfiguration($stateProvider,
								  $urlRouterProvider)
	{
		$stateProvider
			.state('app', {
				url: '/',
				views: {
					'menu': {
						templateUrl: 'Cliente/App/Views/menu.php'
					},
					'currentview': {
						templateUrl: 'Cliente/App/Views/main.php'						
					}
				}
			})
			.state('app.main', {
				url: 'main',
				views: {
					'currentview@': {
						templateUrl: 'Cliente/App/Views/main.php'						
					}
				}
			})
			.state('app.parametros', {
				url: 'parametros',
				views: {
					'currentview@': {
						templateUrl: 'Cliente/App/Views/parametros.php',
						controller: 'GENSA.MGGV.ParametrosController',
						controllerAs: 'vm'
					}
				}
			})
			.state('app.conc_gasto', {
				url: 'conceptoGasto',
				views: {
					'currentview@': {
						templateUrl: 'Cliente/App/Views/conceptoGasto.php',
						controller: 'GENSA.MGGV.ConceptoGastoController',
						controllerAs: 'vm'
					}
				}
			})
			.state('app.ind_financieros', {
				url: 'indFinancieros',
				views: {
					'currentview@': {
						templateUrl: 'Cliente/App/Views/indFinancieros.php',
						controller: 'GENSA.MGGV.IndicadoresFinancierosController',
						controllerAs: 'vm'
					}
				}
			})
			.state('app.para_viaticoInternacional', {
				url: 'paramViaticosInter',
				views: {
					'currentview@': {
						templateUrl: 'Cliente/App/Views/paramViaticosInter.php',
						controller: 'GENSA.MGGV.ParamViaticosInternacionalController',
						controllerAs: 'vm'
					}
				}
			})
			.state('app.tipo_comision', {
				url: 'tipoComision',
				views: {
					'currentview@': {
						templateUrl: 'Cliente/App/Views/tipoComision.php',
						controller: 'GENSA.MGGV.TipoComisionController',
						controllerAs: 'vm'
					}
				}
			})

			.state('app.param_viaticosGeneral', {
				url: 'paramViaticosGeneral',
				views: {
					'currentview@': {
						templateUrl: 'Cliente/App/Views/paramViaticosGeneral.php',
						controller: 'GENSA.MGGV.paramViaticosGeneralController',
						controllerAs: 'vm'
					}
				}
			})

			.state('app.tramites', {
				url: 'tramites',
				views: {
					'currentview@': {
						templateUrl: 'Cliente/App/Views/tramites.php',
						controller: 'GENSA.MGGV.TramitesController',
						controllerAs: 'vm'
					}
				}
			})
			.state('app.solicitud_viaje', {
				url: 'solicitudViaje',
				views: {
					'currentview@': {
						templateUrl: 'Cliente/App/Views/solicitudViaje.php',
						controller: 'GENSA.MGGV.SolicitudViajeController',
						controllerAs: 'vm'
					}
				}
			})
			.state('app.legalizacion', {
				url: 'legalizacion',
				views: {
					'currentview@': {
						templateUrl: 'Cliente/App/Views/legalizacion.php',
						controller: 'GENSA.MGGV.LegalizacionController',
						controllerAs: 'vm'
					}
				}
			})
			.state('app.aprobaciones', {
				url: 'aprobaciones',
				views: {
					'currentview@': {
						templateUrl: 'Cliente/App/Views/aprobaciones.php',
						controller: 'GENSA.MGGV.AprobacionesController',
						controllerAs: 'vm'
					}
				}
			})
			.state('app.informes', {
				url: 'informes',
				views: {
					'currentview@': {
						templateUrl: 'Cliente/App/Views/informes.php',
						controller: 'GENSA.MGGV.InformesController',
						controllerAs: 'vm'
					}
				}
			})
			.state('app.hist_solicitudes', {
				url: 'histSolicitudes',
				views: {
					'currentview@': {
						templateUrl: 'Cliente/App/Views/histSolicitudes.php',
						controller: 'GENSA.MGGV.HistSolicitudesController',
						controllerAs: 'vm'
					}
				}
			})			
			.state('app.tabla_viaticos', {
				url: 'tablaViaticos',
				views: {
					'currentview@': {
						templateUrl: 'Cliente/App/Views/tablaViaticos.php',
						controller: 'GENSA.MGGV.TablaViaticosController',
						controllerAs: 'vm'
					}
				}
			})
			.state('app.tabla_internacional', {
				url: 'tablaInternacional',
				views: {
					'currentview@': {
						templateUrl: 'Cliente/App/Views/tablaInternacional.php',
						controller: 'GENSA.MGGV.TablaInternacionalController',
						controllerAs: 'vm'
					}
				}
			})

		$urlRouterProvider.otherwise('/');
	}

})();