// LoadMore Btn
function loadMorePosts() {
    var $ = jQuery;
    var page = parseInt($('#load-more-button').data('page'));
    
    $.ajax({
        url: ajaxurl,
        type: 'POST',
        data: {
            action: 'load_more_posts',
            page: page
        },
        success: function(response) {
            // Обновите контент на странице с помощью полученного ответа
            $('#content').append(response);
            
            // Увеличьте значение атрибута 'data-page' кнопки "Загрузить еще"
            $('#load-more-button').data('page', page + 1);
        }
    });
  }