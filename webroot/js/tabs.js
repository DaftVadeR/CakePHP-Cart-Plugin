;(function($) {   
    $.fn.tabs = function() {
        if (!$(this).length || $(this).length>1) {            
            return this;
        }
        
        var e = this;        
        
        $(e).find('.tab').first().addClass('current');
        $(e).find('.tab_links a').first().addClass('current');
        
        function change_tab(index)
        {            
            $(e).find('.tab').removeClass('current').eq(index).addClass('current');
        }
        
        $(e).find('.tab_links a').each(function(i){
            $(this).click(function(){
                change_tab(i);
                return false;
            });
        });
        
        return true;
    };
})(jQuery);