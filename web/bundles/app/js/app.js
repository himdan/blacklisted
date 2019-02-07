/**
 * CLAIM DATATABLE
 */
/**
 *
 * @type {{scrollCollapse, dom, buttons, pageLength, columns, language, sAjaxDataProp, ajax, serverSide, filter, responsive, processing, pagingType, scrollX, drawCallback}}
 */
let zeroConfig = buildOptionDt();
var fullUrl = Routing.generate("claim_list", {});
zeroConfig.ajax = Routing.generate("claim_list", {});
zeroConfig.processing = true;
zeroConfig.buttons = [
    buildExportMenu([1,2,3,4,5,6,7,8,9], 'Claim List'),
    {
        extend: 'colvis',
        columns: ':not(:first-child)',
        className: 'btn btn-circle btn-sm btn-orange todo-bold visibility'
    },
    {
        text: 'Add new claim <i class="icon-plus"></i>',
        className: 'btn btn-circle btn-sm btn-orange todo-bold'
    }
];


zeroConfig.columns = [
    {data: "id" },
    {data: "title" },
    {data: "description"},
    {data: "created_at"},
    {
        mData:null,
        mRender:function (data) {
            let menuData = {
                route:'claim_show',
                param:{id:data.id}
            };
            let config = configFactory(menuData);
            return  new ActionMenu(config).build();
        }
    }
];
zeroConfig.order = [[1, 'asc']];

(function ($) {
    zeroConfig.drawCallback = function(){
        $('button').on('click',function (event) {
            let identifier = $(event.target).prop('id').split('_');
            let action = identifier[0];
            let resource  = identifier[1];
            if(action&&resource){
                switch (action) {
                    case 'Edit':
                        console.log('fire edit modal', resource);
                        break;
                    case 'Viewdetail':
                        console.log('fire view detail', resource);
                        break;
                }
            }

        });
    };
    let claimsTable = $('#claims').DataTable(zeroConfig);
    $('#searchClaimForm').on('submit', function (event) {
        let searchQuery = $('#searchClaimForm').serialize();
        event.preventDefault();
        claimsTable.ajax.url(fullUrl + '?' +searchQuery);
        claimsTable.ajax.reload();

    })
})($);