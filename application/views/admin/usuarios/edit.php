
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Uusuarios
                <small>Nuevo</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                   
                   <!--creando el formulario para los usuarios-->
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
                            <!--se envia al controlador laptops para actualizar-->
                      <form action="<?php echo base_url();?>administrador/usuarios/update" method="POST">
                        <input type="hidden" value="<?php echo $usuario->idusu;?>" name="idUsuario">

                          
                              
                          <div class="form-group">
                             <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $usuario->nombre?>">
                          </div>  
                          
                          <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $usuario->apellidos?>">
                          </div>  

                          <div class="form-group">
                            <label for="username">Usuario</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $usuario->username?>">
                          </div>  

                           <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $usuario->telefono?>">
                          </div>  

                            <div class="form-group">
                            <label for="fecha_registro">Fecha Registro</label>
                            <input type="date" class="form-control" id="fecha_registro" name="fecha_registro" value="<?php echo $usuario->fecha_registro?>">
                            </div> 

                            <div class="form-group">
                             <label for="tipo">Tipo</label>
                            <select name="tipo" class="form-control" value="<?php echo $usuario->tipo?>">
                                <option>Administrador</option>
                                <option>Cajero</option>
                            </select>
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