
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
                   
                   <!--creando el formulario para los vehiculos-->
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
                            <!--se envia al controlador prestamos para actualizar-->
                      <form action="<?php echo base_url();?>mantenimiento/prestamos/update" method="POST">
                        <input type="hidden" value="<?php echo $prestamo->idpres;?>" name="idPrestamo">
                        
                        <input type="hidden" class="form-control" id="idlap" name="idlap" value="<?php echo $prestamo->idlap?>">
                        
                        <input type="hidden" class="form-control" id="idusu" name="idusu" value="<?php echo $prestamo->idusu?>">
                          

                          <div class="form-group">
                            <label for="fecha_prestamo">Fecha Prestamo</label>
                            <input type="text" class="form-control" id="fecha_prestamo" name="fecha_prestamo" value="<?php echo $prestamo->fecha_prestamo?>">
                          </div>  

                           <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $prestamo->precio?>">
                          </div>  

                          <div class="form-group">
                             <label for="fecha_devolucion">Fecha Devolucion</label>
                            <input type="text" class="form-control" id="fecha_devolucion" name="fecha_devolucion" value="<?php echo $prestamo->fecha_devolucion?>">
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