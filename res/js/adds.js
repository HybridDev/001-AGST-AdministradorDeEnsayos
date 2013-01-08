$(document).ready(function(){
//||||||||||||||||||LIGHTBOX|||||||||||||||||||
    $("#mostrar").click(function(){
        $("#fade").fadeIn(200);
        $("#lightbox").fadeIn(0);
        $("#lightbox").animate({top: '30%', opacity: 1 }, 400 )
    })
    $("#ocultar").click(function(){
        $("#fade").fadeOut(200);
        $("#lightbox").animate({top: '20%', opacity: 0 }, 400 );
        $("#lightbox").fadeOut(0)
    })

//|||||||||||||||||PAGINADOR|||||||||||||||||||
    $('table.paginated').each(function(){
        var currentPage = 0;
        var numPerPage = 5; //numero maximo de elementos visibles por pagina
        var $table = $(this);
        $table.bind('repaginate', function() {
            $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
        });
        $table.trigger('repaginate');
        var numRows = $table.find('tbody tr').length;
        var numPages = Math.ceil(numRows / numPerPage);
        var $pager = $('<div class="pager"></div>');
        for (var page = 0; page < numPages; page++) {
            $('<span class="page-number"></span>').text(page + 1).bind('click', {
                newPage: page
            }, function(event) {
                currentPage = event.data['newPage'];
                $table.trigger('repaginate');
                $(this).addClass('active').siblings().removeClass('active');
            }).appendTo($pager).addClass('clickable');
        }
        $pager.insertAfter($table).find('span.page-number:first').addClass('active');
    });
})