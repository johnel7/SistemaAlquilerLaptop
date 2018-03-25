
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
                            <input type="text" class="form-control"  value="<?php echo $this->session->userdata("username")?>" disabled="disabled">
                          </div>  

                          <div class="form-group">
                           
                              <label for="">Marca:</label>
                                <div class="input-group">
                                  <!-- pasamos el idlaptop-->
                                   <input type="hidden" name="idlap" id="idlap">

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


        <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Lista de Laptops</h4>
            </div>
            <div class="modal-body">
                <table id="example3" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Opcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($laptops)):?>
                            <?php foreach($laptops as $laptop):?>
                                <tr>
                                    <td><?php echo $laptop->idlap;?></td>
                                    <td><?php echo $laptop->marca;?></td>
                                    <td><?php echo $laptop->modelo;?></td>

                                    <?php $datalaptop = $laptop->idlap."*".$laptop->marca."*".$laptop->modelo;?>
                                    <td>
                                        <button type="button" class="btn btn-success btn-check" value="<?php echo $datalaptop;?>"><span class="fa fa-check"></span></button>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->