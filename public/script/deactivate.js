$(document).ready(function(){
    $(".news_disable").click(function(){
        const newsId = $(this).data('news-id');
        const newsTitle = $(this).data('news-title');
        $("#news-title").text(newsTitle);
        $("#news-id").val(newsId);

        
    });

    $(".events_disable").click(function(){
        const eventId = $(this).data('events-id');
        const newsTitle = $(this).data('events-title');
        $("#events-title").text(newsTitle);
        $("#events-id").val(newsId);

        
    });

    
});