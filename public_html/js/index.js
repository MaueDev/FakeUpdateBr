$(document).ready(function(){
    CounteVisitInSite()
});

function CounteVisitInSite()
{
    $.ajax({
        url: 'visitas.php',
        data: {
          visitas: true,
        },
        dataType: "json",
        type: "POST",
        success: function (data) {
         alert(data);
        }
      });
}