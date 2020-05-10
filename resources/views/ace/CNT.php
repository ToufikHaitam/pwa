<!DOCTYPE html>

<?php
session_start();










?>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Portail de connexion de générale téléphone</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../../../public/ace/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../../../public/ace/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="../../../public/ace/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../../../public/ace/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
        <link rel="stylesheet" href="../../../public/ace/css/ace-part2.min.css" class="ace-main-stylesheet"/>
        <![endif]-->
		<link rel="stylesheet" href="../../../public/ace/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../../../public/ace/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
        <link rel="stylesheet" href="../../../public/ace/css/ace-ie.min.css"/>
        <![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="../../../public/ace/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
        <script src="../../../public/ace/js/html5shiv.min.js"></script>
        <script src="../../../public/ace/js/respond.min.js"></script>
        <![endif]-->
	</head>

	<body class="skin-1">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Générale de téléphone
						</small>
					</a>
				</div>


			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">



				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="">
						<a href="accuei.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Accueil </span>
						</a>

						<b class="arrow"></b>

						</li>
					<li class="active">

						<a href="CNT.php" >
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Gérer les contrats NT
							</span>


						</a>

						<b class="arrow"></b>


					</li>

					<li class="">
						<a href="CEC.php" >
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Gérer les contrats EC </span>


						</a>

						<b class="arrow"></b>


					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Gérer les relances </span>


						</a>

						<b class="arrow"></b>


					</li>



					<li class="">
						<a href="calendar.html">
							<i class="menu-icon fa fa-calendar"></i>

							<span class="menu-text">
								Voir les contrats H


							</span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="gallery.html">
							<i class="menu-icon fa fa-picture-o"></i>
							<span class="menu-text"> Voir les contrats NH </span>
						</a>

						<b class="arrow"></b>
					</li>




				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">

					</div>

					<div class="page-content">
						<!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Contrats Non Traités

							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form>
								<div class="alert alert-info">
									<button class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>



								<table id="grid-table"></table>

								<div id="grid-pager"></div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
							</form>
						</div>



















								<!-- PAGE CONTENT ENDS -->

						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="orange bolder">Générale de téléphone</span>
							&copy; 2017
						</span>


					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="../../../public/ace/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
        <script src="../../../public/ace/js/jquery-1.11.3.min.js"></script>
        <![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../../../public/ace/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../../../public/ace/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
<script src="../../../public/ace/js/bootstrap-datepicker.min.js"></script>
		<script src="../../../public/ace/js/jquery.jqGrid.min.js"></script>
		<script src="../../../public/ace/js/grid.locale-en.js"></script>
		<!--[if lte IE 8]>
        <script src="../../../public/ace/js/excanvas.min.js"></script>
        <![endif]-->

		<!-- ace scripts -->
		<script src="../../../public/ace/js/ace-elements.min.js"></script>
		<script src="../../../public/ace/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->




















		<script type="text/javascript">
		// In this example we will be fetching a list of files in a specified document (remember that in M-Files
			// a "document" and a "file" are two different concepts - after all, a single document can contain
			// multiple files). See processToken() function below for details.

			// We are using jQuery's AJAX methods (and promise pattern) to simplify making
			// REST API calls (jQuery will add headers like "Content-type: application/json" automatically).
			// For details, please see especially:
			// http://api.jquery.com/jquery.post/
			// http://api.jquery.com/jquery.get/
			// http://api.jquery.com/jquery.ajax/

			// Waiting for the DOM to be ready before proceeding.

			var globale = new Array();
			var Host1;
			var tokeen;
			$(document).ready(function() {

				// TODO: configure these to match your setup.
				// NOTE! In real life applications, always use HTTPS to avoid sending clear-text credentials accross the network!
				var host = 'http://localhost/M-Files/REST';
				var vault = '{AF6AA738-B886-452E-9B0B-105A51F5DE67}';
				Host1=host;
				// Register the connect() function below as click handler for the Start button.
				//$('#start-button').click(connect);
	var p = connect();
				// Connects (authenticates) to a vault with the username & password given by the user via the HTML
				// input fields.
				function connect() {
					// E.g. "http://localhost/M-Files/REST/server/authenticationtokens"
					$.post(host + '/server/authenticationtokens', JSON.stringify({
						Username: "NAJAM",				// From user input, e.g. "Test1"
						Password: "Leswinners19.",				// From user input, e.g. "Test1"
						VaultGuid: vault
					}))
					.done(processToken)		// All good, process the authentication token
					.fail(processError);	// Error occurred, process the error
				}

				function processToken(token) {
					// Authentication token received successfully, store it for later use (the
					// header will be added to all subsequent REST calls made with jQuery).
					$.ajaxSetup({ headers: { 'X-Authentication' : token.Value } });
					tokeen=token;
					// Update UI to show correct status:
					$('#status').text('Connected, token received');
















					// Continue by fetching e.g. the files in the specified document (notice how the
					// file ID will be different from document ID):
					var clientID = "NT";
					// ID of the property in Project that refers to a Customer
					var clientPropDefID = 1148;
					// Construct a URL paramater accordingly, e.g. '&p1079=141' (if customerID not given, param will be empty)
					var clientParam = clientID ? '&p' + clientPropDefID + '=' + clientID : '';


					var piID = $('#PI-ID').val();
					// ID of the property in Project that refers to a Customer
					var piPropDefID = 1049;
					// Construct a URL paramater accordingly, e.g. '&p1079=141' (if customerID not given, param will be empty)
					var piParam = piID ? '&p' + piPropDefID + '=' + piID : '';


					var dateID = $('#date-ID').val();
					// ID of the property in Project that refers to a Customer
					var datePropDefID = 1150;
					// Construct a URL paramater accordingly, e.g. '&p1079=141' (if customerID not given, param will be empty)
					var dateParam = dateID ? '&p' + datePropDefID + '=' + dateID : '';



					console.log(clientParam + piParam + dateParam);

					$.get(host + '/objects/0?objecttype=0'  + clientParam + piParam + dateParam + '&auth=' + token.Value)
						.done(function(result) {
							console.log(result.Items);
						var i = 0;
						var tableBody = $('#table-body3');
							tableBody.empty();
							while(i<result.Items.length){




									// Use our helper funtion to display results in an HTML table
						if(result.Items[i].Files.length != 0){
					console.log(result.Items[i].Files[0].ID);
						var linkHref =host + '/objects/0/' +result.Items[i].ObjVer.ID+ '/latest/files/' +result.Items[i].Files[0].ID+ '/content?auth=' + token.Value ;
						console.log(result.Items[i].Files[0]);
						Propfile(result.Items[i].ObjVer.ID);

						//$("#link")
						//.attr("href", "http://localhost/M-Files/REST/objects/0/353/latest/files/381/content?auth=" + token.Value)
						var link = '<a class="documentLink" href="' + linkHref + '">' +result.Items[i].Files[0].Name+ '</a>';

						/* var tableRow = '<tr>'
									+ '<td>' + link + '</td>'
									+ '<td>' +result.Items[i].Files[0].ID+  '</td>'
									+ '<td>' +result.Items[i].ObjVer.ID+  '</td>'

									+ '</tr>';



						tableBody.append(tableRow);
						*/
						console.log(link);
						}
					i = i +1;
						}
					})

					function Propfile(filID) {
					//var filID = $('#fil-ID').val();

					globale.push(filID);



					//"/objects/0/136/" + ov.ObjVer.Version + "/properties/0"
					// E.g. "http://localhost/M-Files/REST/objects/0/353/latest/files"
					$.get(host + '/objects/0/' +filID+ '/properties?&auth=' + token.Value)
					.done(function(result1) {
						// Simply print the results to the console:



						showInTable(result1,filID);

						console.log(JSON.stringify(result1, null, 2));

					})
					.fail(processError);


				}


						var tableBody=[] ;
				function showInTable(items,filID) {
					// Destroy any possible existing content in the table


					var grid_data =
			[
				{id:"1",name:"Desktop Computer",note:"note",stock:"Yes",ship:"FedEx", sdate:"2007-12-03"},

			];



					//var tableRow= "{\"1\",";
					// Generate a row in the table for each item (this code is not very efficient, consider using
					// a templating library such as Knockout.js in real life applications).
					var tableRow = {};
					$.each( items, function (i, item) {

						// Construct and store the link for fetching the project's properties later.
						// (See: http://www.m-files.com/mfws/resources/objects/type/objectid/version/properties.html)
						// E.g. "http://localhost/M-Files/REST/objects/101/32/1/properties?forDisplay=true"

						console.log(item.DisplayValue);


									tableRow['id']=filID;




						// Create and append a row for each project in the HTML table

					$.get(host + '/structure/properties/' +item.PropertyDef + '?auth=' + token.Value)
					.done(function(result1) {
						// Simply print the results to the console:
						console.log(result1.Name);



						if(result1.Name=="Nom ou Titre"){
						tableRow['name']=item.TypedValue.DisplayValue;}
						if(result1.Name=="num client"){
						tableRow['note']=item.TypedValue.DisplayValue;}
						if(result1.Name=="num client"){
						tableRow['stock']=item.TypedValue.DisplayValue;}
						if(result1.Name=="num client"){
						tableRow['ship']=item.TypedValue.DisplayValue;}
						if(result1.Name=="num client"){
						tableRow['sdate']=item.TypedValue.DisplayValue;}
						console.log(tableRow['note']);
						//if(result1.Name== )
						//tableRow[item.Name] = item.TypedValue.DisplayValue;

					console.log(tableRow);















						// Create and append a row for each project in the HTML table
						//tableRow += ",\""+item.TypedValue.DisplayValue+"\"";



					/*	'<tr>'
									+ '<td>' +result1.Name + '</td>'
									+ '<td>' +item.TypedValue.DisplayValue+ '</td>'
									+ '</tr>';

									{id:"1",name:"Desktop Computer",note:"note",stock:"Yes",ship:"FedEx", sdate:"2007-12-03"
									*/

						//tableBody.append(tableRow);
						})
						//tableRow+="}";
						console.log(tableRow);


					//.fail(processError);

					});
					tableBody.push(tableRow);


					jQuery(function($) {

				var grid_selector = "#grid-table";
				var pager_selector = "#grid-pager";


				var parent_column = $(grid_selector).closest('[class*="col-"]');
				//resize to fit page size
				$(window).on('resize.jqGrid', function () {
					$(grid_selector).jqGrid( 'setGridWidth', parent_column.width() );
			    })

				//resize on sidebar collapse/expand
				$(document).on('settings.ace.jqGrid' , function(ev, event_name, collapsed) {
					if( event_name === 'sidebar_collapsed' || event_name === 'main_container_fixed' ) {
						//setTimeout is for webkit only to give time for DOM changes and then redraw!!!
						setTimeout(function() {
							$(grid_selector).jqGrid( 'setGridWidth', parent_column.width() );
						}, 20);
					}
			    })

				//if your grid is inside another element, for example a tab pane, you should use its parent's width:
				/**
				$(window).on('resize.jqGrid', function () {
					var parent_width = $(grid_selector).closest('.tab-pane').width();
					$(grid_selector).jqGrid( 'setGridWidth', parent_width );
				})
				//and also set width when tab pane becomes visible
				$('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
				  if($(e.target).attr('href') == '#mygrid') {
					var parent_width = $(grid_selector).closest('.tab-pane').width();
					$(grid_selector).jqGrid( 'setGridWidth', parent_width );
				  }
				})
				*/





				jQuery(grid_selector).jqGrid({
					//direction: "rtl",

					//subgrid options
					subGrid : false,
					//subGridModel: [{ name : ['No','Item Name','Qty'], width : [55,200,80] }],
					//datatype: "xml",
					subGridOptions : {
						plusicon : "ace-icon fa fa-plus center bigger-110 blue",
						minusicon  : "ace-icon fa fa-minus center bigger-110 blue",
						openicon : "ace-icon fa fa-chevron-right center orange"
					},
					//for this example we are using local data
					subGridRowExpanded: function (subgridDivId, rowId) {
						var subgridTableId = subgridDivId + "_t";
						$("#" + subgridDivId).html("<table id='" + subgridTableId + "'></table>");
						$("#" + subgridTableId).jqGrid({
							datatype: 'local',
							data: subgrid_data,
							colNames: ['No','Item Name','Qty'],
							colModel: [
								{ name: 'id', width: 50 },
								{ name: 'name', width: 150 },
								{ name: 'qty', width: 50 }
							]
						});
					},



					data: tableBody,
					datatype: "local",
					height: 250,
					colNames:[' ', 'Num contrat','Date signature','Nom client', 'Num PI', 'produit','Notes'],
					colModel:[
						{name:'myac',index:'', width:80, fixed:true, sortable:false, resize:false,
							formatter:'actions',
							formatoptions:{
								keys:true,
								//delbutton: false,//disable delete button

								delOptions:{recreateForm: true, beforeShowForm:beforeDeleteCallback},
								//editformbutton:true, editOptions:{recreateForm: true, beforeShowForm:beforeEditCallback}
							}
						},
						{name:'id',index:'id', width:60, sorttype:"int", editable: true},
						{name:'sdate',index:'sdate',width:90, editable:true, sorttype:"date",unformat: pickDate},
						{name:'name',index:'name', width:150,editable: true,editoptions:{size:"20",maxlength:"30"}},
						{name:'stock',index:'stock', width:70, editable: true,edittype:"checkbox",editoptions: {value:"Yes:No"},unformat: aceSwitch},
						{name:'ship',index:'ship', width:90, editable: true,edittype:"select",editoptions:{value:"FE:FedEx;IN:InTime;TN:TNT;AR:ARAMEX"}},
						{name:'note',index:'note', width:150, sortable:false,editable: true,edittype:"textarea", editoptions:{rows:"2",cols:"10"}}
					],

					viewrecords : true,
					rowNum:10,
					rowList:[10,20,30,40],
					pager : pager_selector,
					altRows: true,
					//toppager: true,

					multiselect: true,
					//multikey: "ctrlKey",
			        multiboxonly: true,

					loadComplete : function() {
						var table = this;
						setTimeout(function(){
							styleCheckbox(table);

							updateActionIcons(table);
							updatePagerIcons(table);
							enableTooltips(table);
						}, 0);
					},

					editurl: "./dummy.php",//nothing is saved
					caption: "Liste des contrats non traités"

					//,autowidth: true,


					/**
					,
					grouping:true,
					groupingView : {
						 groupField : ['name'],
						 groupDataSorted : true,
						 plusicon : 'fa fa-chevron-down bigger-110',
						 minusicon : 'fa fa-chevron-up bigger-110'
					},
					caption: "Grouping"
					*/

				});
				$(window).triggerHandler('resize.jqGrid');//trigger window resize to make the grid get the correct size



				//enable search/filter toolbar
				//jQuery(grid_selector).jqGrid('filterToolbar',{defaultSearch:true,stringResult:true})
				//jQuery(grid_selector).filterToolbar({});


				//switch element when editing inline
				function aceSwitch( cellvalue, options, cell ) {
					setTimeout(function(){
						$(cell) .find('input[type=checkbox]')
							.addClass('ace ace-switch ace-switch-5')
							.after('<span class="lbl"></span>');
					}, 0);
				}
				//enable datepicker
				function pickDate( cellvalue, options, cell ) {
					setTimeout(function(){
						$(cell) .find('input[type=text]')
							.datepicker({format:'yyyy-mm-dd' , autoclose:true});
					}, 0);
				}


				//navButtons
				jQuery(grid_selector).jqGrid('navGrid',pager_selector,
					{ 	//navbar options
						edit: false,
						editicon : 'ace-icon fa fa-pencil blue',
						add: false,
						addicon : 'ace-icon fa fa-plus-circle purple',
						del: false,
						delicon : 'ace-icon fa fa-trash-o red',
						search: false,
						searchicon : 'ace-icon fa fa-search orange',
						refresh: true,
						refreshicon : 'ace-icon fa fa-refresh green',
						view: false,
						viewicon : 'ace-icon fa fa-search-plus grey',
					},
					{
						//edit record form
						//closeAfterEdit: true,
						//width: 700,
						recreateForm: true,
						beforeShowForm : function(e) {
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
							style_edit_form(form);
						}
					},
					{
						//new record form
						//width: 700,
						closeAfterAdd: true,
						recreateForm: true,
						viewPagerButtons: false,
						beforeShowForm : function(e) {
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar')
							.wrapInner('<div class="widget-header" />')
							style_edit_form(form);
						}
					},
					{
						//delete record form
						recreateForm: true,
						beforeShowForm : function(e) {
							var form = $(e[0]);
							if(form.data('styled')) return false;

							form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
							style_delete_form(form);

							form.data('styled', true);
						},
						onClick : function(e) {
							//alert(1);
						}
					},
					{
						//search form
						recreateForm: true,
						afterShowSearch: function(e){
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
							style_search_form(form);
						},
						afterRedraw: function(){
							style_search_filters($(this));
						}
						,
						multipleSearch: true,
						/**
						multipleGroup:true,
						showQuery: true
						*/
					},
					{
						//view record form
						recreateForm: true,
						beforeShowForm: function(e){
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
						}
					}
				)



				function style_edit_form(form) {
					//enable datepicker on "sdate" field and switches for "stock" field
					form.find('input[name=sdate]').datepicker({format:'yyyy-mm-dd' , autoclose:true})

					form.find('input[name=stock]').addClass('ace ace-switch ace-switch-5').after('<span class="lbl"></span>');
							   //don't wrap inside a label element, the checkbox value won't be submitted (POST'ed)
							  //.addClass('ace ace-switch ace-switch-5').wrap('<label class="inline" />').after('<span class="lbl"></span>');


					//update buttons classes
					var buttons = form.next().find('.EditButton .fm-button');
					buttons.addClass('btn btn-sm').find('[class*="-icon"]').hide();//ui-icon, s-icon
					buttons.eq(0).addClass('btn-primary').prepend('<i class="ace-icon fa fa-check"></i>');
					buttons.eq(1).prepend('<i class="ace-icon fa fa-times"></i>')

					buttons = form.next().find('.navButton a');
					buttons.find('.ui-icon').hide();
					buttons.eq(0).append('<i class="ace-icon fa fa-chevron-left"></i>');
					buttons.eq(1).append('<i class="ace-icon fa fa-chevron-right"></i>');
				}

				function style_delete_form(form) {
					var buttons = form.next().find('.EditButton .fm-button');
					buttons.addClass('btn btn-sm btn-white btn-round').find('[class*="-icon"]').hide();//ui-icon, s-icon
					buttons.eq(0).addClass('btn-danger').prepend('<i class="ace-icon fa fa-trash-o"></i>');
					buttons.eq(1).addClass('btn-default').prepend('<i class="ace-icon fa fa-times"></i>')
				}

				function style_search_filters(form) {
					form.find('.delete-rule').val('X');
					form.find('.add-rule').addClass('btn btn-xs btn-primary');
					form.find('.add-group').addClass('btn btn-xs btn-success');
					form.find('.delete-group').addClass('btn btn-xs btn-danger');
				}
				function style_search_form(form) {
					var dialog = form.closest('.ui-jqdialog');
					var buttons = dialog.find('.EditTable')
					buttons.find('.EditButton a[id*="_reset"]').addClass('btn btn-sm btn-info').find('.ui-icon').attr('class', 'ace-icon fa fa-retweet');
					buttons.find('.EditButton a[id*="_query"]').addClass('btn btn-sm btn-inverse').find('.ui-icon').attr('class', 'ace-icon fa fa-comment-o');
					buttons.find('.EditButton a[id*="_search"]').addClass('btn btn-sm btn-purple').find('.ui-icon').attr('class', 'ace-icon fa fa-search');
				}

				function beforeDeleteCallback(e) {
					var form = $(e[0]);
					if(form.data('styled')) return false;

					form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
					style_delete_form(form);

					form.data('styled', true);
				}

				function beforeEditCallback(e) {
					var form = $(e[0]);
					form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
					style_edit_form(form);
				}



				//it causes some flicker when reloading or navigating grid
				//it may be possible to have some custom formatter to do this as the grid is being created to prevent this
				//or go back to default browser checkbox styles for the grid
				function styleCheckbox(table) {
				/**
					$(table).find('input:checkbox').addClass('ace')
					.wrap('<label />')
					.after('<span class="lbl align-top" />')


					$('.ui-jqgrid-labels th[id*="_cb"]:first-child')
					.find('input.cbox[type=checkbox]').addClass('ace')
					.wrap('<label />').after('<span class="lbl align-top" />');
				*/

				}


				//unlike navButtons icons, action icons in rows seem to be hard-coded
				//you can change them like this in here if you want
				function updateActionIcons(table) {
					/**
					var replacement =
					{
						'ui-ace-icon fa fa-pencil' : 'ace-icon fa fa-pencil blue',
						'ui-ace-icon fa fa-trash-o' : 'ace-icon fa fa-trash-o red',
						'ui-icon-disk' : 'ace-icon fa fa-check green',
						'ui-icon-cancel' : 'ace-icon fa fa-times red'
					};
					$(table).find('.ui-pg-div span.ui-icon').each(function(){
						var icon = $(this);
						var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
						if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
					})
					*/
				}

				//replace icons with FontAwesome icons like above
				function updatePagerIcons(table) {
					var replacement =
					{
						'ui-icon-seek-first' : 'ace-icon fa fa-angle-double-left bigger-140',
						'ui-icon-seek-prev' : 'ace-icon fa fa-angle-left bigger-140',
						'ui-icon-seek-next' : 'ace-icon fa fa-angle-right bigger-140',
						'ui-icon-seek-end' : 'ace-icon fa fa-angle-double-right bigger-140'
					};
					$('.ui-pg-table:not(.navtable) > tbody > tr > .ui-pg-button > .ui-icon').each(function(){
						var icon = $(this);
						var $class = $.trim(icon.attr('class').replace('ui-icon', ''));

						if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
					})
				}

				function enableTooltips(table) {
					$('.navtable .ui-pg-button').tooltip({container:'body'});
					$(table).find('.ui-pg-div').tooltip({container:'body'});
				}

				//var selr = jQuery(grid_selector).jqGrid('getGridParam','selrow');

				$(document).one('ajaxloadstart.page', function(e) {
					$.jgrid.gridDestroy(grid_selector);
					$('.ui-jqdialog').remove();
				});
			});


					// Register a click handler for each link in the table

				}



















				}

				function processError(err) {
					$('#status').text('Error occurred, please see the browser\'s developer console for details!');
					console.log('jQuery error object:');
					console.log(err);
				}
			});



				 function checkOut(idd,st){
			  // Construct the URL.
			  // .../REST/objects/(type)/(id)/(version)/checkedout?_method=PUT

			  console.log("okk1");
			  var url = Host1 + "/objects/0/"+idd+"/latest/checkedout.aspx?&auth=" + tokeen.Value ;
			  //var url = "http://example.org/REST/objects/" +  [type, id, version].join("/") + "/checkedout.aspx?_method=PUT";

			  // Request an encrypted token with the login information.
			  $.ajax({
			  url: url,
			  headers: { 'X-Authentication' : tokeen.Value },
			  type: "PUT",
			  dataType: "json",
			  contentType: "application/json",
			  data: JSON.stringify({ Value: st /* Checked out to me */ }),
			  success: modifyObject,
			  error: function(xhr) {console.log(xhr);}
			  });
			  };

			  var modifyObject = function (objectVersion){
			  console.log("okk");
			  // Object is checked out.
			  };




		function valider(){
			 for(var j=0; j<globale.length;j++){
			if (document.getElementById("jqg_grid-table_"+globale[j]).checked){
			// la requete pour changer la valeur de la proprieté .................
			console.log(globale[j]);
			 var idd=globale[j];


			var check = checkOut(idd,2);














						$.ajax({
						url: Host1 + "/objects/0/"+globale[j]+"/latest/properties/1148?auth=" + tokeen.Value,
						type: "PUT",
						headers: { 'X-Authentication' : tokeen.Value },
						dataType: "json",
						contentType: "application/json",
						data: JSON.stringify({ PropertyDef : 1148, TypedValue : { Datatype : 1, Value: "EC" } }),

					error: function(xhr) {console.log(xhr);},
					success: function (objvers) {
                    console.log(objvers.Title + " created successfully but no files attached since this feature is still missing.");
                },
				});
			console.log(globale[j]);
			var checka = checkOut(idd,0);
			}
			//console.log(globale);
			// redirection ..............................
		}}
		</script>
		<input type="button" name="submit" value="Valider" onClick="valider()">
	</body>
</html>
