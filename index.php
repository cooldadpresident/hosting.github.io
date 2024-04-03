<?php
if (isset($_GET['showall']) && $_GET['showall'] == 1) {
  header('application/json: utf-8', true, 200);
  echo json_encode(
    [
      'state' == 1,
      'content' => '<b>Ahoj</b>'
    ]
  );
  exit;

}
?>
<html>

<head>
  <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
    crossorigin="anonymous"></script>

  <script>
    $(function () {
      $("#button").on("click", function () {
        $.ajax({
          url: "?",
          type: "GET",
          data: { showall: 1 },
        }).done(
          function (response) {
            if (response.state) {
              $("#content".html(response.content));
            }
          },

          {}
        );
      });
    });
  </script>
</head>

<body>
  <button id="button">Get content</button>
  <div id="content"></div>
</body>

</html>