<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->
        <div class="row">
        <div class="col-sm-12">
            <section class="panel">
              <section class="panel">
                  <header class="panel-heading">
                      <b>Layers</b>
                      <span class="tools pull-right">
                        <a href="<?php echo base_url()?>add_layers"><button type="submit" name="upload_data" class="btn btn-danger"><i class="fa fa-plus"></i> Add Layers</button></a>
                       </span>
                  </header>
                  <div class="panel-body">

                    <?php
                      $error=	$this->session->flashdata('msg');
                       if($error){ ?>
                         <div class="alert alert-info alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Message!!!!</strong>  <?php echo $error ; ?>
                              </div>
                       <?php
                       }
                        ?>
                    <?php  if($data == NULL){   ?>

                      <h4> NO Data   </h4>

                    <?php }else{ ?>
                      <table class="table table-hover">
                          <thead>





                          <tr>

                            <?php foreach($data[0] as $key => $value){


                                          ?>
                              <td>

                                <?php

               									$cleanname = explode("_", $key);
               									foreach ($cleanname as $r) {
               										echo ucfirst($r)." ";
               														      }?>

                              </td>
                            <?php  } ?>
                            <td>
                              Operations
                            </td>
                          </tr>


                          </thead>
                          <tbody>
                              <?php foreach($data as $v ){ ?>
                          <tr>

                              <?php foreach($v as $key => $value) {




                                  ?>
                              <td><?php echo $value;?></td>
                            <?php }  ?>
                              <td><a href="<?php echo base_url()?>layers_detail?tbl_name=<?php echo base64_encode($v['layer_table']);?>">View</a> /
                                <a href="<?php echo base_url()?>edit_categories?id=<?php echo base64_encode($v['id']);?>&& tbl=<?php echo base64_encode($tbl_name);?>">Edit</a> /
                                <a href="<?php echo base_url()?>delete_data?id=<?php echo  $v['id'];?> && tbl=<?php echo ($tbl_name);?> && cat_tbl=<?php echo $v['layer_table']  ?>">Delete</a></td>





                          </tr>
                        <?php  }?>
                          </tbody>
                      </table>
                    <?php }?>
                  </div>
              </section>

            </section>
        </div>
    </div>

        </div>
    <!-- page end-->
    </section>
</section>
<!--main content end-->
