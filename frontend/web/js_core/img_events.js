(function() {
    $('.content-block').click((event) => {
        let element = $(event.target);

        while (element.prop('tagName') != 'DIV') {
            element = element.parent();
        }

        $.ajax({
            type: 'GET',
            url: 'img/html',
            data: {
                id: element.attr('data-id')
            },
            success: (html) => {
                html = JSON.parse(html);
                $('.main-svg').empty();
                $('.main-svg').append(html);
            }
        })
    });
})();