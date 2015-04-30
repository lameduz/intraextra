<!DOCTYPE html>
<html>
<head>
	<title>Vodospace</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
	<link href="{{URL::asset('css/global/plugins/bootstrap.min.css')}}"rel="stylesheet" type="text/css"/>
	<link href="{{URL::asset('css/global/plugins/uniform.default.css')}}"rel="stylesheet" type="text/css"/>
	<link href="{{URL::asset('css/global/plugins/bootstrap-switch.min.css')}}"rel="stylesheet" type="text/css"/>
	<link href="{{URL::asset('css/global/components.css')}}"rel="stylesheet" type="text/css"/>
	<link href="{{URL::asset('css/global/plugins.css')}}"rel="stylesheet" type="text/css"/>
	<link href="{{URL::asset('css/layout/layout.css')}}"rel="stylesheet" type="text/css"/>
	<link href="{{URL::asset('css/layout/theme/default.css')}}"rel="stylesheet" type="text/css"/>
	<link href="{{URL::asset('css/layout/custom.css')}}"rel="stylesheet" type="text/css"/>

	
</head>

<body>
<body class="page-header-fixed page-quick-sidebar-over-content">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			<img src="../../assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler hide">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right list-inline">
				<!-- BEGIN USER LOGIN DROPDOWN -->
					<span class="username">
                        <li><a href="{!! action('OrganisationsController@create')!!}">Ouvrir un compte</a></li>
                        @if(Auth::guest())
                            <li><a href="{!! action('ContactsController@getLogin') !!}">Connexion</a></li>
                            @else
                            Bonjour {!! Auth::user()->firstname !!}
                        @endif
                    </span>


				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
			
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                <span><a href="{!! action('OrganisationsController@create') !!}">Ouvrir un compte</a></span>
				<li class="start active open">
					<a href="javascript:;">
					<i class="icon-home"></i>
					<span class="title">@if(Auth::guest())
                                            Mon espace
                        @else
                     Bonjour {!! Auth::user()->firstname !!}
                    @endif</span>

					</a>
					<ul class="sub-menu">
						<li class="active">
                        @if(Auth::guest())
                        <li><a href="{!! action('ContactsController@getLogin') !!}">Connexion</a></li>
                        @else
                            <li><a href="{!! action('ContactsOrganisationsController@index', [Auth::user()->id] )!!}">Mes organisations</a></li>
                            <li><a href="#">Mes services</a></li>
                            <li><a href="{!! action('ContactsController@getLogout')!!}">Déconnexion</a></li>
                        @endif
					
					</ul>
				</li>

			
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->

			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Dashboard <small>dashboard & statistics</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li class="pull-right">
							<div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
								<i class="icon-calendar"></i>
								<span></span>
								<i class="fa fa-angle-down"></i>
							</div>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
		
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			<div class="row">
			
				<div class="col-md-6 col-sm-6">
					<!-- BEGIN PORTLET-->
				
			</div>
			<div class="clearfix">
			</div>
			<div class="row ">
                <div class="container">
                    @yield('content')
                </div>
			</div>
			<div class="clearfix">
			</div>
		
				
			</div>
			<div class="clearfix">
			</div>
			<div class="row ">
				
				
					<!-- END PORTLET-->
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
	
	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		2014 - Metronic
	</div>
	<div class="page-footer-tools">
		<span class="go-top">
		<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
	<script src=" {{ URL::asset('js/global/plugins/jquery-1.11.0.min.js') }}"></script>
	<script src=" {{ URL::asset('js/global/plugins/jquery-migrate-1.2.1.min.js') }}"></script>
	<script src=" {{ URL::asset('js/global/plugins/jquery-ui-1.10.3.custom.min.js') }}"></script>
	<script src=" {{ URL::asset('js/global/metronic.js') }}"></script>
	<script src=" {{ URL::asset('js/global/plugins/bootstrap.min.js') }}"></script>
	<script src=" {{ URL::asset('js/global/plugins/bootstrap-hover-dropdown.min.js') }}"></script>
	<script src=" {{ URL::asset('js/global/plugins/jquery.slimscroll.min.js') }}"></script>
	<script src=" {{ URL::asset('js/global/plugins/jquery.blockui.min.js') }}"></script>
	<script src=" {{ URL::asset('js/global/plugins/jquery.cokie.min.js') }}"></script>
	<script src=" {{ URL::asset('js/global/plugins/jquery.uniform.min.js') }}"></script>
	<script src=" {{ URL::asset('js/global/plugins/bootstrap-switch.min.js') }}"></script>
	<script src=" {{ URL::asset('js/global/layout/layout.js') }}"></script>
	<script src=" {{ URL::asset('js/global/layout/quick-sidebar.js') }}"></script>
	<script src=" {{ URL::asset('js/global/layout/index.js') }}"></script>
	<script src=" {{ URL::asset('js/global/layout/tasks.js') }}"></script>

	<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init() // init quick sidebar
});
</script>
</body>
</html>