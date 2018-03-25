
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Prestamos
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
                            <a href="<?php echo base_url();?>mantenimiento/prestamos/add" class="btn btn-success btn-flat"><span class="fa fa-plus">Agregar Prestamo</span></a>
                        </div>
                    </div>
                   <!--creando tabla de listado de todos los choferes-->
                   <hr>
                   <div class="row">
                        <div class="col-md-12">
                            
                          <table id="example2" class="table table-bordered table-striped btn-hover">
                              <thead>
                                  <tr>
                                      <th>ID</th>
                                      <th>Usuario</th>
                                      <th>Marca</th>
                                      <th>Fecha Prestamo</th>
                                      <th>Precio</th>
                                      <th>Fecha Devolucion</th>
                                      <th>Opciones</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php if(!empty($prestamos)):?>
                                    <?php foreach ($prestamos as $prestamo):?>
                                  <tr>
                                      <td><?php echo $prestamo->idpres;?></td>
                                      <td><?php echo $prestamo->username;?></td>
                                      <td><?php echo $prestamo->marca;?></td>
                                      <td><?php echo $prestamo->fecha_prestamo;?></td>
                                      <td><?php echo $prestamo->precio;?></td>
                                      <td><?php echo $prestamo->fecha_devolucion;?></td>

                                      <td>
                                          <div class="btn-group">
                                              
                                              <a href="<?php echo base_url()?>mantenimiento/prestamos/edit/<?php echo $prestamo->idpres;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                              <a href="<?php echo base_url()?>mantenimiento/prestamos/delete/<?php echo $prestamo->idpres;?>" class="btn btn-danger"><span class="fa fa-remove"></span></a>
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