$(document).ready(function(){

    $('#cssmenu').showLoading();
    var user_id = $("#user_id").val();

    $.ajax({url: "../inicial/menu",
            dataType:"json",
            data: "user_id="+user_id,
            type: "POST"})
            .done(function(data){
                var menus = data.menus;
                var submenus = data.submenus;
                var submenus2 = data.submenus2;

                var menu_inicial = "<ul id='lv1'>";
                
                $.each( menus, function(key, menu) {
                    
                    var mclass;
                    if(key === 0){
                        mclass = "first-child";
                    } else if (key === (menus.length - 1) && key !== 0){
                         mclass = "last-child";
                    }
                    
                    if(menu.has_sub){
                        
                        menu_inicial += "<li class='has-sub' ><a id="+menu.url+" href='#' class="+mclass+">"+
                                "<span>"+menu.nome+"</span></a><ul id='lv2'>";
                         
                        $.each( submenus, function(skey, submenu) {                      
                        
                            if(submenu.menu_id === menu.id){
                            
                                if(submenu.has_sub){
                                
                                    menu_inicial += "<li class='has-sub' id="+submenu.url+"><a href='#'>"+
                                            "<span>"+submenu.nome+"</span></a><ul id='lv3'>";

                                     $.each( submenus2, function(s2key, submenu2) {
                                    
                                         if(submenu2.parent_id === submenu.id){

                                             menu_inicial += "<li class='no-has-sub' id="+submenu2.url+"><a href='#'>"+
                                                    "<span>"+submenu2.nome+"</span></a></li>";    
                                       
                                         }                                     
                                     });
                                     
                                     menu_inicial += "</ul></li>";
                                 
                                 } else {
                                     
                                    menu_inicial += "<li class='no-has-sub'><a id="+submenu.url+" href='#'>"+
                                            "<span>"+submenu.nome+"</span></a></li>";
                                
                                 }
                            }
                         });
                         
                         menu_inicial += "</ul></li>";
                         
                    } else {
                        
                       menu_inicial += "<li class='no-has-sub'><a id="+ menu.url +" href='#' class="+mclass+">"+
                               "<span>"+ menu.nome +"</span></a></li>";
                    
                     }                               
                });                        
                
                menu_inicial += "</ul>";

                $('#cssmenu').hideLoading();
                $('#cssmenu').empty().append(menu_inicial);
                
                $('li.no-has-sub').on("click", 'a', function(event){
                    
                    $.ajax({url: "../inicial/loadFuncionality",
                            dataType:"html",
                            data: "page="+$(this).attr('id'),
                            type: "POST"
                     })
                     .done(function(data) { 
                        $('#content').empty().html(data);
                        $('#lv2').hide();
                        
                        $('#lv1 > li > a').hover(function(){
                            $('#lv2').removeAttr('style');
                        });
                    });

                });
                
                
                
                
    });
});