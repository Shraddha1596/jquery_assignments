$(document).ready(function()
{

    $("form#register").submit(function(e) 
    {
    console.log("testing");
        var form = $(this);
        var url = form.attr('action');

        $.ajax(
        {
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           
           success: function(data)
           {
               //alert(data); // show response from the php script.
               $('#msg').html(data);
           }
        });

        e.preventDefault(); // avoid to execute the actual submit of the form.
    });
})