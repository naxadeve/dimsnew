<section id="main-content" class="">
  <section class="wrapper">
    <!-- page start--> 
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
           Inventory info

            <form role="form"  method="POST" action="add_inventory_cat" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo !empty($editdata[0]['id'])?$editdata[0]['id']:'' ?>">
          <div class="form-group position-center">

                  <label for="name">Category name:</label>
                  <input type="text" name="name" class="form-control" id="name" value="<?php echo !empty($editdata[0]['name'])?$editdata[0]['name']:'' ?>">
                </div>
          <div class="panel-body">
            <div class="position-center">
                  <div class="form-group">
                    <div class="col-md-12">
                        <label for="ward">Ward no. </label>
                        <input type="text" class="form-control"  id="ward" name="ward"><?php echo !empty($editdata[0]['ward'])?$editdata[0]['ward']:'' ?>
                    </div>
                </div>
                <div class="form-group">
                  <div class="form-group ">
                    <div class="col-md-4">
                      <label class="control-label">Photo </label>
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                          <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                        <div>
                          <span class="btn btn-white btn-file">
                            <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                            <input type="file" name="project_pic" class="default" >
                            <input type="hidden" name="old_image" value="<?php echo !empty($editdata[0]['image'])?$editdata[0]['image']:'' ?>">
                          </span>
                        </div>
                      </div><?php  $error= $this->session->flashdata('msg');
                          if($error){ ?>
                          <div class="alert alert-danger">
                            <?php echo $error ; ?>
                          </div>
                           <?php } ?>
                    </div>
                    <?php if($editdata) { ?>
                      <div class="col-md-4">
                        <label for="oldimage"> Old Image</label>
                       <img src="<?php echo !empty($editdata[0]['image'])?$editdata[0]['image']:'' ?>" alt="" width="200px" height=" 150px">
                     </div>
                   <?php } ?>
                   </div>
                  <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-info"><?php if($editdata) { echo "Update";}else{echo "Submit";} ?></button>
                  </div>
                    
                  </div>
                </div>
                    </div>
                  </form>
                </div>
              </div>
            </header>
          </section>
        </div>
      </div>
    </section>