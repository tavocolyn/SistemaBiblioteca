<section class="content">
      <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Tablero Principal</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
             </div>
        </div>
        <div class="box-body">
            <div class="row">
              
              </div>
              <div class="col-md-3 col-xs-6">
                <div class="box box-solid box-primary">
                    <div class="box-body text-center">
                        <img class="img-responsive" src="<?php echo base_url();?>assets/images/LIBRO.png" alt="">
                    </div>
                    <div class="box-header text-center">
                          <a href="<?php echo base_url();?>backend/libros/add" class="small-box-footer">
                            Registrar Trabajo <i class="fa fa-arrow-circle-right"></i>
                          </a>
                    </div>
                </div>
              </div>
             
              <div class="col-md-3 col-xs-6">
                <div class="box box-solid box-danger">
                    <div class="box-body text-center">
                        <img class="img-responsive" src="<?php echo base_url();?>assets/images/PRESTAR2.png" alt="">
                    </div>
                    <div class="box-header text-center">
                          <a href="<?php echo base_url();?>backend/prestamos/add" class="small-box-footer">
                            Registrar Asesor <i class="fa fa-arrow-circle-right"></i>
                          </a>
                    </div>
                </div>
              </div>
          </div>
        </div>
        <!-- /.box-body -->
    </div>
      <!-- /.box -->
</section>
 