$(document).ready(function(){
    $(".menu_icon").click(function(){
        $(this).toggleClass("menu_open");
        $(".menu_item").toggleClass("show");
        $(".admin_info").removeClass("show_hide");
    });
    $("dd .sub_menu a").click(function(){
        $("dd .sub_menu a").removeClass("menu_click");
        $("dd").removeClass("menu_click");
        $(this).addClass('menu_click')
        $(this).parent().parent().parent().parent().addClass('menu_click');
    });
    
    $(".menu_gp dd").click(function(){
       if (window.matchMedia("(max-width: 767px)").matches)
       {
        if($(this).children('.sub_menu').hasClass('show_hide')){
            $(this).children('.sub_menu').removeClass('show_hide')
        }else{
            $('.menu_gp dd .sub_menu').removeClass('show_hide');
            $(this).children('.sub_menu').addClass('show_hide');
        }
       }else{
        $('.menu_gp dd .sub_menu').removeClass('show_hide');
       }
    });
    
    // resize function
    $(window).resize(function(){
        $('.menu_gp dd .sub_menu').removeClass('show_hide');
    });

    //list delete
    $(".delete_list").click(function(){
        $(this).parent().parent().remove();
    });

    //admin detail drop
    $(".drop_info").click(function(){
        $(this).parent().children(".admin_more_details").toggleClass("show_hide");
    });
    $(".u_role").click(function(){
        $(".admin_more_details").removeClass("show_hide");
        $(".menu_item").removeClass("show");
        $(".menu_icon").removeClass("menu_open")
        $(".admin_info").toggleClass("show_hide");
    });

    //login form select change
    $(".user_login a.btn_01").click(function(){
        $(this).addClass('c_04').siblings().removeClass('c_04');
        $("form.login_form").css('display','none');
        if($(this).hasClass("id_01")){
            $(".item_01").css('display','block');
        }
        else if($(this).hasClass("id_02")){
            $(".item_02").css('display','block');
        }
        else{
            $(".item_03").css('display','block');
        }
    });

});