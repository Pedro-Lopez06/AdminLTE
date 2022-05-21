<?php include '../../layouts/header.php' ?>
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h1 class="m-0">Usuarios</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6"></div><!-- /.col -->
                </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <!-- /.content-header -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                  <h3 class="card-title">
                                    <i class="fas fa-list mr-1"></i>
                                    Listado de Usuarios
                                  </h3>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                          <th style="width: 10px">ID</th>
                                          <th>Nombre</th>
                                          <th>Progreso</th>
                                          <th style="width: 40px"></th>
                                          
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>1</td>
                                          <td>Walter</td>
                                          <td>
                                            <div class="progress progress-xs">
                                              <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default">Acciones</button>
                                                <button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                                                  <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu" role="menu">
                                                  <a class="dropdown-item text-info" href="#"><i class="fa fa-eye mr-3"></i>Ver</a>
                                                  <a class="dropdown-item text-success" href="#"><i class="fa fa-edit mr-3"></i>Editar</a>
                                                  <div class="dropdown-divider"></div>
                                                  <button class="dropdown-item text-danger" onclick="remove('Walter')">Eliminar
                                                    <i class="fa fa-trash mr-3"></i>
                                                  </button>
                                                </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>2</td>
                                          <td>Ana</td>
                                          <td>
                                            <div class="progress progress-xs">
                                              <div class="progress-bar bg-warning" style="width: 70%"></div>
                                            </div>
                                          </td>
                                          <td>
                                          <div class="btn-group">
                                                <button type="button" class="btn btn-default">Acciones</button>
                                                <button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                                                  <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu" role="menu">
                                                  <a class="dropdown-item text-info" href="#"><i class="fa fa-eye mr-3"></i>Ver</a>
                                                  <a class="dropdown-item text-success" href="#"><i class="fa fa-edit mr-3"></i>Editar</a>
                                                  <div class="dropdown-divider"></div>
                                                  <button class="dropdown-item text-danger" onclick="remove('Ana')">Eliminar
                                                    <i class="fa fa-trash mr-3"></i>
                                                  </button>
                                                </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>3</td>
                                          <td>Juan</td>
                                          <td>
                                            <div class="progress progress-xs progress-striped active">
                                              <div class="progress-bar bg-primary" style="width: 30%"></div>
                                            </div>
                                          </td>
                                          <td>
                                          <div class="btn-group">
                                                <button type="button" class="btn btn-default">Acciones</button>
                                                <button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                                                  <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu" role="menu">
                                                  <a class="dropdown-item text-info" href="#"><i class="fa fa-eye mr-3"></i>Ver</a>
                                                  <a class="dropdown-item text-success" href="#"><i class="fa fa-edit mr-3"></i>Editar</a>
                                                  <div class="dropdown-divider"></div>
                                                  <button class="dropdown-item text-danger" onclick="remove('Juan')">Eliminar
                                                    <i class="fa fa-trash mr-3"></i>
                                                  </button>
                                                </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>4</td>
                                          <td>Pedro</td>
                                          <td>
                                            <div class="progress progress-xs progress-striped active">
                                              <div class="progress-bar bg-success" style="width: 90%"></div>
                                            </div>
                                          </td>
                                          <td>
                                          <div class="btn-group">
                                                <button type="button" class="btn btn-default">Acciones</button>
                                                <button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                                                  <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu" role="menu">
                                                  <a class="dropdown-item text-info" href="#"><i class="fa fa-eye mr-3"></i>Ver</a>
                                                  <a class="dropdown-item text-success" href="#"><i class="fa fa-edit mr-3"></i>Editar</a>
                                                  <div class="dropdown-divider"></div>
                                                  <button class="dropdown-item text-danger" onclick="remove('Pedro')">Eliminar
                                                    <i class="fa fa-trash mr-3"></i>
                                                  </button>
                                                </div>
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  <!-- /.card-body -->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
<script>
  function remove(name){
    Swal.fire({
      title: 'Estas seguro de eliminar al usuario '+name+'?',
      text: "Está acción no es reversible",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Si, eliminalo',
      cancelButtonText: 'Cancelar',
      }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Usuario Eliminado!',
          '',
          'success'
        )
      }
    })
  }
  
</script>
<?php include '../../layouts/footer.php' ?>