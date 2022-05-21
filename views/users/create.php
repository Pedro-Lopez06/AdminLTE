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
</div><!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-user-plus mr-1"></i>
                                    Crear
                        </h3>
                    </div><!-- /.card-header -->
                    <form action="#" method="get">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-5">
                                    <label for="name">Nombre</label>
                                    <input type="text" id="name" class="form-control" >
                                </div>
                                <div class="col-5">
                                    <label for="email">E-mail</label>
                                    <input type="text" id="email" name= "email" class="form-control" >
                                </div>
                                <div class="col-2">
                                    <label for="username">User name</label>
                                    <input type="text" id="username" name= "username"class="form-control" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <label for="password">Contraseña</label>
                                    <input type="password" id="password" name="password" class="form-control" >
                                </div>
                                <div class="col-3">
                                    <label for="confirm">Confirmar Contraseña</label>
                                    <input type="password" id="confirm" name="confirm" class="form-control" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="address">Domicilio</label>
                                    <input type="text" id="address" name="address" class="form-control" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                                    <label for="city">Ciudad</label>
                                                    <input type="text" id="city" name="city" class="form-control" >
                                </div>
                                <div class="col-3">
                                    <label for="state">Estado</label>
                                    <select class="custom-select">
                                        <option>Selecciona un Estado</option>
                                        <option value="sinaloa">Sinaloa</option>
                                        <option value="jalisco">Jalisco</option>
                                        <option value="colima">Colima</option>
                                        <option value="nayarit">Nayarit</option>
                                    </select>
                                </div>
                                    <div class="col-2">
                                        <label for="zip">CP</label>
                                        <input type="text" id="zip" name="zip" class="form-control" >
                                    </div>
                            </div>
                        </div><!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Guardar</button>
                            <button type="submit" class="btn btn-default ">Deshacer</button>
                        </div>
                    </form> <!-- cierre form -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php include '../../layouts/footer.php' ?>