
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Laptop
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
                            <a href="<?php echo base_url();?>mantenimiento/laptops/add" class="btn btn-success btn-flat"><span class="fa fa-plus">Agregar Laptop</span></a>
                        </div>
                    </div>
                   <!--creando tabla de listado de todos los choferes-->
                   <hr>
                   <div class="row">
                        <div class="col-md-12">
                            
                          <table id="example1" class="table table-bordered table-striped btn-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Marca</th>
                                      <th>Modelo</th>
                                      <th>Cantidad</th>
                                      <th>Estado</th>
                                      <th>Opciones</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php if(!empty($laptops)):?>
                                    <?php foreach ($laptops as $laptop):?>
                                  <tr>
                                      <td><?php echo $laptop->idlap;?></td>
                                      <td><?php echo $laptop->marca;?></td>
                                      <td><?php echo $laptop->modelo;?></td>
                                      <td><?php echo $laptop->cantidad;?></td>
                                      <td><?php echo $laptop->estado;?></td>

                                      <td>
                                          <div class="btn-group">
                                              
                                              <a href="<?php echo base_url()?>mantenimiento/laptops/edit/<?php echo $laptop->idlap;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                              <a href="<?php echo base_url()?>mantenimiento/laptops/delete/<?php echo $laptop->idlap;?>" class="btn btn-danger"><span class="fa fa-remove"></span></a>
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