function buildExportMenu(columns, title) {
    var icon = "icon-doc";
    var tab = [/*{
        "extend":"collection",
        "text": "Exporter la page <i class='fa fa-share'></i>",
        "className": "btn btn-circle btn-sm btn-xs btn-orange todo-bold visibility",
        "buttons": [
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                action:function(e, dt, button, config) {
                    mutateColumn(dt);
                    $.fn.dataTable.ext.buttons.pdfHtml5.action(e, dt, button, config);
                },
                className:"icon-doc",
                exportOptions: {
                    columns: columns
                },
                title: title
            },
            {
                extend: 'copyHtml5',
                orientation: 'landscape',
                className:"icon-check",
                exportOptions: {
                    columns: columns
                },
                title: title
            },
            {
                extend: 'excelHtml5',
                orientation: 'landscape',
                className:"icon-paper-clip",
                action:function(e, dt, button, config) {
                    if(dt.table().node().id == 'tableMarche'){
                        var affaires = dt.columns(4).data();
                        $.each(affaires[0], function(index, affaire){
                            var cell = dt.cell(index, 4);
                            cell.data(affaire.numAffaire + '-' + affaire.nomAffaire).draw();
                        });
                    }

                    $.fn.dataTable.ext.buttons.excelHtml5.action(e, dt, button, config);
                },
                exportOptions: {
                    columns: columns
                },
                title: title
            },
            {
                extend: 'csvHtml5',
                orientation: 'landscape',
                className:"icon-cloud-upload",
                action:function(e, dt, button, config) {
                    if(dt.table().node().id == 'tableMarche'){
                        var affaires = dt.columns(4).data();
                        $.each(affaires[0], function(index, affaire){
                            var cell = dt.cell(index, 4);
                            cell.data(affaire.numAffaire + '-' + affaire.nomAffaire).draw();
                        });
                    }

                    $.fn.dataTable.ext.buttons.csvHtml5.action(e, dt, button, config);
                },
                exportOptions: {
                    columns: columns
                },
                title: title
            }
        ]

    },*/{
        "extend":"collection",
        "text": "Exporter <i class='fa fa-share'></i>",
        "className": "btn btn-circle btn-sm btn-xs btn-orange todo-bold visibility export-all-btn",
        "buttons": [
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                action:function(e, dt, button, config) {
                    var anchor = dt.table().node().id;
                    var exportLink = new ExportLink(anchor,'pdf');
                    var filter = dt.data().ajax.json().filters;
                    // console.log(filter);
                    ExportProcess(exportLink, filter);



                },
                className:"icon-doc",
                exportOptions: {
                    columns: columns
                },
                title: title
            },
            {
                extend: 'excelHtml5',
                orientation: 'landscape',
                className:"icon-paper-clip",
                action:function(e, dt, button, config) {
                    var anchor = dt.table().node().id;
                    var exportLink = new ExportLink(anchor,'xsl');
                    var filter = dt.data().ajax.json().filters;
                    // console.log(filter);
                    ExportProcess(exportLink, filter);
                },
                exportOptions: {
                    columns: columns
                },
                title: title
            },
            {
                extend: 'csvHtml5',
                orientation: 'landscape',
                className:"icon-cloud-upload",
                action:function(e, dt, button, config) {
                    var anchor = dt.table().node().id;
                    var filter = dt.data().ajax.json().filters;
                    var exportLink = new ExportLink(anchor,'csv');
                    ExportProcess(exportLink, filter);
                },
                exportOptions: {
                    columns: columns
                },
                title: title
            }
        ]

    }

    ];

    return tab;
}
/** Export prototype **/
function ExportLink(anchor, type)
{   this.tables = ['accord', 'affaire', 'fichier', 'version', 'marche', 'convention', 'avenant'];
    this.routes = [
        {type:'pdf', name:'resahlr_create_export'},
        {type:'xsl', name:'resahlr_export_xsl'},
        {type:'csv', name:'resahlr_export_csv'},
        {type:'xml', name:'resahlr_export_xml'}
    ];
    this.anchor = anchor;
    this.type = type;
    this.table = '';

}
ExportLink.prototype.setTable = function(){
    var _anchor = this.anchor;
    var _tables = this.tables;
    var _table = '';
    $.each(_tables, function(idx, table){
        if(_anchor.toLowerCase().indexOf(table)!= -1){
            _table = table;
        }

    });
    this.table = _table;
    return this;
};
ExportLink.prototype.getRoute = function(){
    var _type = this.type;
    var _routes = this.routes;
    var _route = '';
    $.each(_routes, function(idx, route){
        // console.log(route.type);
        if(_type == route.type){
            _route = route.name;
        }
    });
    this.setTable();
    return _route;
}
ExportLink.prototype.getTable = function () {
    this.setTable();
    return this.table;
};
ExportLink.prototype.getAnchor = function () {
    return this.anchor;
}
ExportLink.prototype.getType = function () {
    return this.type;
}
function ExportProcess(exportLink, filter)
{
    var type = exportLink.getType();
    var jsonFilter = JSON.stringify(filter);
    var args ={table:exportLink.getTable(), filterJson:jsonFilter};
    var url = Routing.generate(exportLink.getRoute(),args);
    if(type == 'pdf'){
        PerformAjaxCall(url, null, function (result) {
            if(result.success){
                toastr.success(result.message);
            } else{
                toastr.error(result.error);
            }
        }, function (error) {
            console.log(err);
        });
    } else {
        window.location = url;
    }

}
function validateDate(dateDebut, dateFin)
{
    var dateDebutBuffer = dateDebut.split('/').map(function(item){return parseInt(item)});
    var dateFinBuffer = dateFin.split('/').map(function(item){return parseInt(item)});
    var dateDO = new Date(dateDebutBuffer[2], dateDebutBuffer[1], dateDebutBuffer[0]);
    var dateFO = new Date(dateFinBuffer[2], dateFinBuffer[1], dateFinBuffer[0]);
    return dateDO.getTime() < dateFO.getTime();
}

/**
 *
 * @param route
 * @param data
 * @param SuccessCallback
 * @param ErrorCallBack
 * @param method
 * @param isSynchro
 * @constructor
 */
// init the Form field From the webService
function PerformAjaxCall(route,data,SuccessCallback, ErrorCallBack, method, isSynchro) {

    $.ajax({
        type:(method)?method:"POST",
        url:route,
        data: data,
        success:SuccessCallback,
        error:ErrorCallBack,
        async: (isSynchro == true)? false: true

    });
}
function PerformAjaxCallWithLoader(route,data,SuccessCallback, ErrorCallBack) {

    $.ajax({
        type:"POST",
        url:route,
        data: data,
        success:SuccessCallback,
        error:ErrorCallBack,
        beforeSend: function () {
            $(document.body).append($('<div class="loading-message "><img src="' + assetsBaseDir + 'global/img/loading-spinner-grey.gif" align=""><span>&nbsp;&nbsp;Chargement...</span></div>'));
            $('.loading-message').show();
        },
        complete: function () {
            $(".loading-message").remove();
        }
    });
}
/**
 *
 * @param route
 * @param data
 * @param SuccessCallback
 * @param ErrorCallBack
 * @constructor
 */
function PerformDeleteAjaxCall(route,data,SuccessCallback, ErrorCallBack) {

    $.ajax({
        type:"DELETE",
        url:route,
        data: data,
        success:SuccessCallback,
        error:ErrorCallBack

    });
}
/**
 *
 * @param route
 * @param SuccessCallback
 * @param ErrorCallBack
 * @constructor
 */
function PerformGetAjaxCall(route,SuccessCallback, ErrorCallBack){
    $.ajax({
        type:"GET",
        url:route,
        success:SuccessCallback,
        error:ErrorCallBack

    });
}