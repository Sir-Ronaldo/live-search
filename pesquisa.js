$(function () {
  $("#livesearch").keyup(function () {
    var livesearch = $(this).val();
    if (livesearch != "") {
      var dados = { palavra: livesearch };
      $.post("livesearch.php", dados, function (retorna) {
        $(".showResult").html(retorna);
      });
    } else {
      $(".showResult").html("");
    }
  });
});
