<?php
// require dirname(dirname(__DIR__)) . "/dao/MaterialDao.php";
include("../../partials/verify-session.php");
// $materialDao = new MaterialDao();
// $materials = $materialDao->findAll();
?>
<!-- author: Teenus SAS, github: Teenus SAS -->
<!doctype html>
<html lang="es">

<head>
  <title>Textos | Greenpack</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="../../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link rel="stylesheet" href="/css/all.min.css">
  <!-- Page level plugin CSS-->
  <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/vendor/dropzone/dropzone.css">
  <link href="https://cdn.jsdelivr.net/npm/froala-editor@3.0.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type='text/css' />
  <style>
    td.highlight {
      background-color: whitesmoke !important;
    }
  </style>
  <style>
    div#imagen {
      width: 300px;
      height: 200px;
      background-size: cover;
      /*sólo para ejemplo*/
      margin: 30px auto;
    }

    div#info {
      position: absolute;
      overflow: hidden;
      width: 300px;
      height: 200px;
      background-color: rgba(31, 31, 31, 0.9);
      opacity: 0;
      transition: opacity 0.3s;
    }

    div#imagen:hover div#info {
      opacity: 0.6;
    }

    p#headline {
      position: absolute;
      font-size: 1.5rem;
      margin-left: -75px;
      margin-top: 15px;
      transition: margin-left 0.3s;
    }

    div#imagen:hover p#headline {
      margin-left: 115px;
    }

    p#descripcion {
      font-size: 1rem;
      text-align: center;
      margin-top: 200px;
      transition: margin-top 0.4s;
    }

    div#imagen:hover p#descripcion {
      margin-top: 75px;
    }

    #imgUpload {
      display: none;
    }
  </style>
</head>

<body class="white-edition">
  <div class="wrapper ">
    <?php include("../../partials/sidebar.php"); ?>
    <div class="main-panel">
      <?php include("../../partials/navbar.php");  ?>
      <div class="content">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/admin">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
              <a href="/admin/texts">Textos</a>
            </li>
            <li class="breadcrumb-item">
              <a href="/admin/texts/about">Acerca de Nosotros</a>
            </li>
            <li class="breadcrumb-item active">Actualizar</li>
          </ol>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Acerca de Nosotros</div>
            <div class="card-body">
              <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" placeholder="Ej. Caracteristicas" id="title" class="form-control">
              </div>
              <br>
              <div class="form-group">
                <label for="content">Contenido</label>
                <br>
                <textarea name="content" id="content"></textarea>
              </div>
              <div id="image-info">Imagen de la Noticia:
                <div id="imagen">
                  <img src="" alt="" height="200" width="200" id="imgNotice" hidden>
                  <div id="info">
                    <p id="descripcion"><button id="changeImg" class="btn btn-danger">Cambiar</button></p>
                  </div>
                </div>
              </div>

              <div class="form-group" id="imgUpload">
                <label for="myId">Sube la imagen del slide:</label>
                <div id="myId" class="dropzone"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col"><a href="/admin/texts/about" class="btn btn-danger btn-lg"><i class="fas fa-arrow-left"></i> Regresar</a></div>
            <div class="col"><button id="submitEditor" class="btn btn-primary btn-lg"><i class="fas fa-sync"></i> Actualizar</button></div>
            <div class="col"></div>
          </div>
        </div>
        <?php include("../../partials/footer.html"); ?>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="/js/jquery-2.2.4.min.js"></script>
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="https://unpkg.com/default-passive-events"></script>
    <!-- <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script> -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Chartist JS -->
    <script src="../../assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../assets/js/material-dashboard.js?v=2.1.0"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="../../assets/demo/demo.js"></script>
    <script src="../../assets/js/script.js"></script>

    <!-- Page level plugin JavaScript-->
    <script type="text/javascript" src="/vendor/froala_editor.pkgd.min.js"></script>
    <script src="/js/es.js"></script>
    <script src="/vendor/dropzone/dropzone.js"></script>
    <script>
      $('.sidebar div.sidebar-wrapper ul.nav li:first').removeClass('active')
      $('#text-item').addClass('active')
      let editor
      let text

      editor = new FroalaEditor('#content', {
        language: 'es',
        height: 300,
        imageUploadParam: 'photo',
        imageUploadURL: '/admin/upload.php',
        imageUploadMethod: 'POST',
        videoUploadParam: 'video',
        videoUploadURL: 'upload-video.php',
        imageUploadMethod: 'POST',
        fileUploadParam: 'file',
        fileUploadURL: '/admin/upload-file.php',
        fileUploadMethod: 'POST',
        events: {
          'image.removed': function($img) {
            img = $img[0]
            $.post('/admin/image_delete.php', {
              src: $img.attr('src')
            }, (data, status) => {
              if (status != "success") {
                alert("error")
              }
            })

          },
          'file.removed': function($file) {
            file = $file[0]
            $.post('/admin/file_delete.php', {
              src: $file.attr('src')
            }, (data, status) => {
              if (status != "success") {
                alert("error")
              }
            })
          },
          'keyup': function(keyupEvent) {
            if (document.domain != 'localhost') {
              $('.fr-wrapper>div:first-child').css('visibility', 'hidden')
            }
          }
        }
      }, () => {
        editor.html.set(text)
        if (document.domain != 'localhost') {
          $('.fr-wrapper>div:first-child').css('visibility', 'hidden')
        }
      })

      // dropzone
      let myDropzone
      let flagImage = false
      Dropzone.autoDiscover = false;
      myDropzone = new Dropzone("div#myId", {
        url: "/admin/upload.php",
        method: 'post',
        paramName: 'photo',
        acceptedFiles: "image/*",
        dictDefaultMessage: 'Sube tus archivos, arrastralos o haz click para buscarlos',
        dictMaxFilesExceeded: 'Solo sube una imagen',
        dictInvalidFileType: 'Solo sube imagenes',
        maxFiles: 1
      })

      const urlParams = new URLSearchParams(window.location.search)
      const id = urlParams.get('id')
      let about
      loadAbout()

      function loadAbout() {
        $.get('/admin/texts/about/api/get_about.php', (data, status) => {
          about = data.filter(slideAux => slideAux.id_about == id)
          about = about[0]
          console.log(about)
          text = about.content
          if (editor.html != undefined) {
            editor.html.set(text)
          }
          $('#title').val(about.title)
          $('div#imagen').css('background-image', `url(${about.image})`)
          $('#imgNotice').attr('src', about.image)
          myDropzone.removeAllFiles()
        })
      }

      $('#changeImg').click(() => {
        $.post('/admin/image_delete.php', {
          src: $('#imgNotice').attr('src')
        }, (data, status) => {
          if (status != "success") {
            alert("error")
          }
        })
        $('#imgUpload').fadeIn()
        $('#image-info').fadeOut()
        flagImage = true
      })

      $('button#submitEditor').click(() => {
        let link
        if (!flagImage) {
          link = $('#imgNotice').attr("src")
          ajax(link)
        } else {
          if (myDropzone.getAcceptedFiles().length > 0 && $('#title').val() != '' && editor.html.get() != '') {
            response = JSON.parse(myDropzone.getAcceptedFiles()[0].xhr.responseText)
            link = response.link
            ajax(link)
          } else {
            $.notify({
              message: 'Faltan datos',
              title: '<strong>Greenpack</strong>',
              icon: 'notification_important'
            }, {
              type: 'warning'
            })
          }
        }
      })

      function ajax(link) {
        $.post('api/update_about.php', {
          id: id,
          image: link,
          title: $('#title').val(),
          content: editor.html.get()
        }, (data, status) => {
          if (status == 'success') {
            $.notify({
              message: 'Actualizado',
              title: '<strong>Exito</strong>',
              icon: 'notification_important'
            }, {
              type: 'success'
            })
            loadAbout()
            $('#imgUpload').fadeOut()
            $('#image-info').fadeIn()
          } else {
            $.notify({
              message: 'Error',
              title: '<strong>Greenpack</strong>',
              icon: 'notification_important'
            }, {
              type: 'danger'
            })
            loadAbout()
          }
        })
      }
    </script>
</body>

</html>