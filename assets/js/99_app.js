(function ($) {
    $('#myTable').DataTable({
        language: {
            searchPlaceholder: "Search..",
            search: "",
            lengthMenu: "Rows per page _MENU_",
            info: "_START_-_END_ of _TOTAL_",
            infoEmpty: "No result found",
            infoFiltered: "",
            oPaginate: {
                sNext: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
                sPrevious: '<i class="fa fa-angle-left" aria-hidden="true"></i>'
            }
        }
    });

    __picker.init('2017-11-05', '2017-11-11', 'index');
})(window.jQuery);
