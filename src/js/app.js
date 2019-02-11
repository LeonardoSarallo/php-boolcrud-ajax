
$(document).ready(function() {


  $.ajax({
    url: 'http://localhost/php-boolcrud-ajax/database/all.php',
    method: 'GET',
    success: function(data)
    {
      var results = JSON.parse(data);
      print(results);
    },
    error: function(err)
    {
      alert('si è verificato un errore');
    }

  });

});

function print(results)
{
  for (var i = 0; i < results.length; i++) {
    var dataResult = results[i];
    var source = $('#ospite').html();
    var template = Handlebars.compile(source);
    var context = {
      id: dataResult.id,
      name: dataResult.name,
      lastname: dataResult.lastname
    };
    var html = template(context);
    $('tbody').append(html);
  }

}
