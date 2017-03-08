jQuery(document).ready(function($){
    $('.comment-list li').each(function() {
        var cid = $( this ).attr("id").replace(/comment-/g,'');
        $('.comment-metadata', this ).prepend('<div><span style="font-size: 1rem;" class="dashicons dashicons-share-alt"></span>SHORTSCORE ID: ' + cid + ' </div> ');
    });
});

