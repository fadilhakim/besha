<div class="col-md-3 col-sm-4">
    <div class="side-bar clearfix"><!--Side Bar-->
          <div class="aside categories"><!--Side Categories-->
             <h4 class="heading">Manufacturers</h4>
               <ul class="categories-main">
                  <li>
                      <a role="button"  href="<?php echo base_url('spareparts/all/1'); ?>">All Manufacturers</a>
                  </li>
                  <?php $i=1; foreach ($manufacturer as $m) { ?>
                  <li><?php if(!empty($m->subs)){?>
                      <a role="button" data-toggle="collapse" href="#link<?php echo $m->manu_id; ?>" aria-expanded="false" aria-controls="link<?php echo $m->manu_id; ?>"><?php echo $m->manu_title; ?><i class="pull-right fa fa-plus"></i></a>
                      
                      <ul class="collapse" id="link<?php echo $m->manu_id;?>">
                          <li><a href="<?php echo base_url('spareparts/manufacturer/').$m->manu_id; ?>"><em style="font-style:italic; font-size:12.5px;">All From <?php echo $m->manu_title; ?></em></a></li>
                          <?php foreach ($m->subs as $key) { ?>
                            <?php
                              $id = $key->sparepart_category_id;;
                                $this->db->where('sparepart_category_id',$id);
                                $r = $this->db->get('sparepart_category');
                                if($r->num_rows()>0)
                                {
                                    foreach ($r -> result_array() as $row) {
                                    $data1[] = $row;
                                    }
                                }
                                foreach($data1 as $name)?>
                            <li><a href="<?php echo base_url('spareparts/category/').$m->manu_id.'/'.$name['category_slug'].'/'.'1'; ?>"><em style="font-style:italic; font-size:12.5px;">- <?php echo $name['category_title']?></em></a></li>
                          <?php } ?>
                          
                      </ul>
                      <?php } else {?>
                        <a href="<?php echo base_url('spareparts/manufacturer/').$m->manu_id; ?>"><?php echo $m->manu_title; ?></a>
                      <?php } ?>
                  </li>
                  <?php } ?>
              </ul>
          </div><!--End Side Categories-->
      </div><!--End Side Bar-->
 </div>