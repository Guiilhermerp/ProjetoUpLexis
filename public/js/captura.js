$(function() {
    $('#btn_capturar').on('click', function() {
        var val = $("#cap_text").val();
        var url = 'https://www.uplexis.com.br/blog/?s='+ val;
        console.log(url);
      $.ajax({
            // the route pointing to the post function
           url:  url,
           type: 'GET',
           crossDomain: true,
           dataType: 'jasonp',
           success: function (data) {
                console.log(data);

            },
            error: function (erro) {

            }
        });


    });
});