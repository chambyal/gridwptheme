$(function(){
    $('#sidebarMenuToogle').on('click', function(){
        $('body').addClass('sidebar-open');
    });
});
$(function(){
    $('#sidebarMenuClose').on('click', function(){
        $('body').removeClass('sidebar-open');
    });
});