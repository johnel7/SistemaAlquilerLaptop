
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Prestamos
                <small>Nuevo</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                   
                   <!--creando el formulario para los choferes-->
                   <hr>
                   <div class="row">
                        <div class="col-md-12">
                            
                      <!--mensaje de error-->
                       <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                             </div>
                        <?php endif;?>
                            <!--se envia al controlador Vehiculos para guardar-->
                        <form action="<?php echo base_url();?>mantenimiento/prestamos/store" method="POST">
                              
                          <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" id="idusuario" name="idusuario">
                          </div>  

                          <div class="form-group">
                           
                              <label for="">Marca:</label>
                                <div class="input-group">
                                  <!-- pasamos el idlaptop-->
                                   <input type="hidden" name="idlaptop" id="idlaptop">

                                     <input type="text" class="form-control" disabled="disabled" id="laptop">
                                         <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal-default" ><span class="fa fa-search"></span> Buscar</button>
                                        </span>
                                    </div>
                            </div>

                          <div class="form-group">
                            <label for="fecha_prestamo">Fecha Prestamo</label>
                            <input type="date" class="form-control" id="fecha_prestamo" name="fecha_prestamo">
                          </div>  


                           <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="text" class="form-control" id="precio" name="precio">
                          </div>  

                          <div class="form-group">
                            <label for="fecha_devolucion">Fecha Devolucion</label>
                            <input type="date" class="form-control" id="fecha_devolucion" name="fecha_devolucion">
                          </div>

                           <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                          </div>

                       </form>

                        </div>
                     </div>
                 <!-- final del formulario de choferes -->



                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->