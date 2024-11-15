<!DOCTYPE html>
<html lang="en">
<head>
  <?php require 'layouts/head.php'; ?>
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <?php require 'layouts/preloader.php'; ?>
  <?php require 'layouts/navbar.php'; ?>
  <?php require 'layouts/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Perfil de Usuario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../dist/img/yo.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Milena Vásquez</h3>

                <p class="text-muted text-center">Desarrolladora de Software</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Seguidores</b> <a class="float-right">2M</a>
                  </li>
                  <li class="list-group-item">
                    <b>Seguidos</b> <a class="float-right">200</a>
                  </li>
                  <li class="list-group-item">
                    <b>Amigos</b> <a class="float-right">9</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Seguir</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Caja Acerca de mí -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Acerca de mí</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Educación</strong>

                <p class="text-muted">
                  SENA - Tecnólogo en Análisis y Desarrollo de Software.(ADSO)
                  KEYCODE - Desarrollo Frontend con React-Redux
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Ubicación</strong>

                <p class="text-muted">Duitama - Boyacá - Colombia</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Habilidades</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">1. HTML</span><br>
                  <span class="tag tag-success">2. CSS</span><br>
                  <span class="tag tag-info">3. JavaScript</span><br>
                  <span class="tag tag-warning">4. PHP</span><br>
                  <span class="tag tag-primary">5. Python</span>
                  <span class="tag tag-primary">6. React</span>
                  <span class="tag tag-primary">5. MySQL</span>
                </p>
                <hr>
                <strong><i class="far fa-file-alt mr-1"></i> Notas</strong>

                <p class="text-muted">Desde el 2023 generando bugs</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Actividad</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Línea de tiempo</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Ajustes</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Yeferson Fuentes Jr.</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Hola soy Yefer, que bueno es contactarte
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Compartir</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comentarios (22)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../dist/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Ximena Sanabria</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description"> 3 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Hola Mile, un gusto conocerte!!
                      </p>

                      <form class="form-horizontal">
                        <div class="input-group input-group-sm mb-0">
                          <input class="form-control form-control-sm" placeholder="Response">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../dist/img/photo3.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Jose Figueredo</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">5 days ago</span>
                      </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="../dist/img/user4-128x128.jpg" alt="Photo">
                              <img class="img-fluid" src="../dist/img/user2-160x160.jpg" alt="Photo">
                            </div>
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Compartir</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comentarios (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          10 Feb. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 12:05</span>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-primary btn-sm">Leer más</a>
                            <a href="#" class="btn btn-danger btn-sm">Borrar</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header border-0"><a href="#">Jeimmy Tovar</a> accepted your friend request
                          </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">Ver comentario</a>
                          </div>
                        </div>
                      </div>
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require 'layouts/footer.php'; ?>
  <?php require 'layouts/sidebar-dark.php'; ?>
  <!-- Control sidebar content goes here -->
</div>
<!-- ./wrapper -->
<?php require 'layouts/script.php'; ?>
</body>
</html>



