<div class="categories__one">

                                        
 <?php 
$cateID = '';
foreach ($categoryList_acces->result() AS $category) { ?>
   
                                            <header class="categories__head clearfix">
                                               
                                                <?php if($cateID !=$category->category_title){?><h5 class="pull-left"><a class="no-decoration" href="<?php echo base_url('accessories_list/category/') .$category->id ?>"><?php echo $category->category_title ?></a></h5>
                                                <?php $cateID=$category->category_title ;}?> 
                                              
                                                <div class="categories__count pull-right">[<?php echo $category->TotalCount?>]</div>


                                            </header>
                                            <p class="categories__desc">TRIUMPH HATYAI</p>
                                            <?php }?>
 

                                       </div>   