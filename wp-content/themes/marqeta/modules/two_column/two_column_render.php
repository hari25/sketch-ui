<?php 
 $heading = get_field('heading');
 $sub_heading = get_field('sub_heading');
 $content = get_field('content');
 $image = get_field('image'); 
 $offers = get_field('offers'); ?>

<section class="two-column <?php echo get_field('row_layout');?> <?php echo $block['className'];?>">
    <div class="constrained-width">
        <div class="content pt-row">
            <div class="left-sec px-20 ">
                <div class="heading scroll-slide-left" data-speed="800">
                    <h2 class="my-0"><?php echo $heading;?></h2>
                    <?php if(!empty($sub_heading)): ?>
                        <h2 class="subheading my-0"><?php echo $sub_heading; ?></h2>
                    <?php endif; ?>
                </div>
                <div class="left-sec-content scroll-slide-left" data-speed="1000">
                    <?php echo $content;?>
                </div>
                <div class="offers">
                    <?php 
                    if(!empty($offers)):
                    foreach ($offers as $offer) : 
                        if(!empty($offer)): 
                            $heading = $offer['heading'];
                            $info = $offer['info']; 
                        endif; ?>
                        <div class="offer">
                            <h3 class="my-0"><?php echo $heading; ?></h3>
                            <p><?php echo $info; ?></p>
                        </div>

                    <?php endforeach; endif; ?>
                </div>
                
            </div>
            <div class="right-sec fg-white <?php echo get_field('animation_type');?>" data-speed="500">
                
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
               
            </div>
        </div> 
    </div>
</section>