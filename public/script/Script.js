$(document).ready(function(){
    $(".delete_btn").click(function(){
        const newsId = $(this).data('news-id');
        $("#deleteId").val(newsId);


    });
    
    $(".deleteeve_btn").click(function(){
        const newsId = $(this).data('news-id');
        $("#deleteEveId").val(newsId);


    });

    $(".edit_btn").click(function(){
        const newsId = $(this).data('news-id');
        const newsTitle = $(this).data('news-title');
        const newsDesc = $(this).data('news-desc');
        const newsDate = $(this).data('news-date');

        $("#editId").val(newsId);
        $("#newsTitle").val(newsTitle);
        $("#newsDescription").val(newsDesc);
        $("#newsDate").val(newsDate);

    });


    $(".edit-event").click(function(){
        const eventId = $(this).data('events-id');
        const eventTitle = $(this).data('events-title');
        const eventDesc = $(this).data('events-desc');
        const eventDate = $(this).data('events-date');
        const eventTime = $(this).data('events-time');
        const eventCover = $(this).data('events-cover');
        $("#eventId").val(eventId);
        $("#eventsTitle").val(eventTitle);
        $("#eventsDescription").val(eventDesc);
        $("#eventsDate").val(eventDate);
        $("#eventsTime").val(eventTime);
    });

    $(".edit-news").click(function(){
        const newsId = $(this).data('news-id');
        const newsTitle = $(this).data('news-title');
        const newsDesc = $(this).data('news-desc');
        const newsDate = $(this).data('news-date');
        const newsCover = $(this).data('news-cover');

        $("#news_Id").val(newsId);
        $("#newsTitle").val(newsTitle);
        $("#newsDescription").val(newsDesc);
        $("#newsCover").val(newsCover);
    });


    $(".delete-news").click(function(){
        const newsId = $(this).data('news-id');
        $("#news_id").val(newsId);
          //alert(newsId);
    });

    $(".delete-events").click(function(){
        const eventsId = $(this).data('events-id');
        $("#events_id").val(eventsId);
        
    });

    $(".admin-deac").click(function(){
        const adminId = $(this).data('admin-id');
        $("#id").val(adminId);
    });

    $(".approve_job").click(function(){
        const jobId = $(this).data('job-id');
        $("#id").val(jobId);
    });

    $(".edit-job").click(function(){
        const id = $(this).data('job-id');
        const title = $(this).data('job-title');
        const company = $(this).data('job-company');
        const desc = $(this).data('job-desc');
        const category = $(this).data('job-category');
        const address = $(this).data('job-address');
        const city = $(this).data('job-city');
        const salary = $(this).data('job-salary');
        const email = $(this).data('job-email');
        const contact = $(this).data('job-contact');
        const web = $(this).data('job-web');
        $("#id").val(id);
        $("#title").val(title);
        $("#company").val(company);
        $("#description").val(desc);
        $("#jobCategory").val(category);
        $("#jobAddress").val(address);
        $("#jobCity").val(city);
        $("#jobSalary").val(salary);
        $("#jobEmail").val(email);
        $("#jobContacts").val(contact);
        $("#jobWebsite").val(web);

    });
    $(".delete-job").click(function(){
        const id = $(this).data('job-id');
        $("#delete-id").val(id);
    });
    
  

    $(".edit-donation").click(function(){
        const id = $(this).data('donation-id');
        const title = $(this).data('donation-title');
        const date = $(this).data('donation-date');
        const desc = $(this).data('donation-desc');
    
        $("#id").val(id);
        $("#title").val(title);
        $("#description").val(desc);
        $("#date").val(date);
       
        
    });

    $(".delete-donation").click(function(){
        const id = $(this).data("donation-id");
        //alert(id);
        $("#delete-id").val(id);
    });

    $(".edit-jobPartner").click(function(){
        const id = $(this).data('partner-id');
        const title = $(this).data('partner-title');
        const company = $(this).data('partner-company');
        const desc = $(this).data('partner-desc');
        const category = $(this).data('partner-category');
        const address = $(this).data('partner-address');
        const city = $(this).data('partner-city');
        const salary = $(this).data('partner-salary');
        const email = $(this).data('partner-email');
        const contact = $(this).data('partner-contact');
        const web = $(this).data('partner-web');
        const cover = $(this).data('partner-cover');
       
        $("#id").val(id);
        $("#title").val(title);
        $("#company").val(company);
        $("#description").val(desc);
        $("#jobCategory").val(category);
        $("#jobAddress").val(address);
        $("#jobCity").val(city);
        $("#jobSalary").val(salary);
        $("#jobEmail").val(email);
        $("#jobContacts").val(contact);
        $("#jobWebsite").val(web);
        $("#job_cover").val(cover);
        

    });

    $(".delete-userId").click(function(){
        const deacId = $(this).data('deleteuser-id');
        $("#deacId").val(deacId);
    });



});

