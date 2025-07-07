

// modal
var id;
jQuery('[data-target][data-toggle=modal]').on('click', function () {
    id = jQuery(this).attr('data-target');
    Title = {
        'Homemeeting': "Put your interests in action, get all the details right now.",
        'DownloadBrochure': "Mention your whatsapp number to receive Brochure on whatsapp",
        'PriceSection': "Get explicit details about the pricing and on spot offers",
        'FloorPlan': "You are trying to download a big file, get it on Whatsapp",
        'Location': "Due to huge rush at site we would request you to book your sitevisit in advance",
        'Gallery': "Inside features of the project at a glance",
        'video_call': 'Virtual Zoom Meetings - With the Experts',
        'default': "PLEASE SHARE YOUR DETAILS. OUR SALES EXPERT WILL CALL YOU SHORTLY"
    }
    jQuery('.modal.form h4').text(Title[id])
    jQuery('.modal.form').attr('id', id).modal('show');

});
