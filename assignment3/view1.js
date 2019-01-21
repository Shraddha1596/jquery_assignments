$(document).ready(function()
    {
        setInterval(function() {
        // your code goes here...
    
        console.log("testing");
       
        var url = 'test.php';

        $.ajax(
        {
           type: "POST",
           url: url,
           
           success: function(data)
           {
               var html = '';
              // console.log(data);
               //var d = JSON.stringify(data)
               $.each(JSON.parse(data), function(i, item) 
               {
                    //console.log(item.first_name);
                           
                    html += '<tr>';
                    html += '<td>' +item.first_name+ '</td>';
                    html += '<td>' +item.last_name+ '</td>';
                    html += '<td>' +item.email+ '</td>';
                    html += '<td>' +item.date_of_birth+ '</td>';
                    html += '<td>' +item.mobile+ '</td>';
                    html += '<td>' +item.designation+ '</td>';
                    html += '<td>' +item.gender+ '</td>';
                    html += '<td>' +item.hobbies+ '</td>';
                    html += '</tr> ';
                    
                });
               $('.testing').html(html);
           }

        });

       
  
}, 60 * 100);

   
})