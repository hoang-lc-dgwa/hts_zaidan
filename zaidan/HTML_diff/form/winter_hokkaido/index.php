<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="refresh" content="0; url=/form/hokkaido/">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>そのウェブサイトは別のページにリダイレクトされます。</title>
  <script>
    function redirectToHomestay() {
      window.location.assign('/form/hokkaido/');
    }
    document.addEventListener('DOMContentLoaded', (event) => {
      setTimeout(() => {
        redirectToHomestay();
      }, 0);
    });
  </script>
</head>
<body>
</body>
</html>