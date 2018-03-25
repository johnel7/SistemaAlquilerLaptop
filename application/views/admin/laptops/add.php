
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Laptop
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
                        <form action="<?php echo base_url();?>mantenimiento/laptops/store" method="POST">
                              
                         
                              
                          <div class="form-group">
                            <label for="marca">Marca</label>
                            <input type="text" class="form-control" id="marca" name="marca">
                          </div>  
                          
                          <div class="form-group">
                            <label for="modelo">Modelo</label>
                            <input type="text" class="form-control" id="modelo" name="modelo">
                          </div>  


                           <div class="form-group">
                            <label for="cantidad">Cantidad</label>
                            <input type="text" class="form-control" id="cantidad" name="cantidad">
                          </div>  

                          <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" class="form-control" id="estado" name="estado">
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