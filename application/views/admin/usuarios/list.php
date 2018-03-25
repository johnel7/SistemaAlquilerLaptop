
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Usuarios
                <small>Listado</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                   
                   <!--creando enlace para agregar Vehiculos -->
                    <div class="row">
                        <div class="col-md-12">
                          <!--se envia a la funcion add del controlador -->
                            <a href="<?php echo base_url();?>administrador/usuarios/add" class="btn btn-success btn-flat"><span class="fa fa-plus">Agregar Usuario</span></a>
                        </div>
                    </div>
                   <!--creando tabla de listado de todos los choferes-->
                   <hr>
                   <div class="row">
                        <div class="col-md-12">
                            
                          <table id="example" class="table table-bordered table-striped btn-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Nombre</th>
                                      <th>Apellidos</th>
                                      <th>Usuario</th>
                                    
                                      <th>Telefono</th>
                                      <th>Fecha Registro</th>
                                      <th>Tipo</th>
                                      <th>Opciones</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php if(!empty($usuarios)):?>
                                    <?php foreach ($usuarios as $usuario):?>
                                  <tr>
                                      <td><?php echo $usuario->idusu;?></td>
                                      <td><?php echo $usuario->nombre;?></td>
                                      <td><?php echo $usuario->apellidos;?></td>
                                      <td><?php echo $usuario->username;?></td>
                                     
                                      <td><?php echo $usuario->telefono;?></td>
                                      <td><?php echo $usuario->fecha_registro;?></td>
                                      <td><?php echo $usuario->tipo;?></td>

                                      <td>
                                          <div class="btn-group">
                                              
                                              <a href="<?php echo base_url()?>administrador/usuarios/edit/<?php echo $usuario->idusu;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                              <a href="<?php echo base_url()?>administrador/usuarios/delete/<?php echo $usuario->idusu;?>" class="btn btn-danger"><span class="fa fa-remove"></span></a>
                                          </div>
                                      </td>
                                  </tr>
                               <?php endforeach;?>
                              <?php endif;?>
                              </tbody>
                          </table>

                        </div>
                     </div>
                 <!-- final del listado de la tabla -->



                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->