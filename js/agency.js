/*!
 * Start Bootstrap - Agnecy Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

jQuery(document).ready(function($){
    
    var $active = false;
    
    $('.work').click(function(e){
        e.preventDefault();
        
        var $work = $(this);
        var $detail = $work.parent().nextAll('.row_detail:first');
        var $work_detail = $('.work_detail', $work).clone();
        
        var showElement = function(){
            $detail.append($work_detail);
            $work_detail.slideDown();
            $active = $work_detail;
        }
        
        var hideActive = function(){
            var $el = $active;
            $el.slideUp(500, function(){
                $el.remove();
            });
        }
        
        if($active){ hideActive(); }
        showElement();
        
        
    });
    
});

// jQuery for page scrolling feature - requires jQuery Easing plugin
