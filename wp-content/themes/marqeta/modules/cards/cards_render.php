<?php 
 $heading = get_field('heading');
 $subheading = get_field('subheading');
 $cards = get_field('cards'); ?>

<section class="cards <?php echo $block['className'];?> ">
    <div class="constrained-width">
        <div class="content pb_row">
            <?php if(!empty($heading)): ?>
                <h2 class="my-0"><?php echo $heading; ?></h2>
            <?php endif; ?>
            <?php if(!empty($subheading)): ?>
                <h2 class="subheading my-0"><?php echo $subheading; ?></h2>
            <?php endif; ?>
            <div class="cards-info flex-wrap">
                <?php 
                if(!empty($cards)):
                foreach ($cards as $card) : 
                    if(!empty($card)): 
                        $card_heading = $card['card_heading'];
                        $hover_heading = $card['hover_heading'] ? $card['hover_heading'] : $card_heading;
                        $hover_desc = $card['hover_desc']; 
                        $icon = $card['icon'];
                        $link = $card['link'];
                    endif; ?>
                    <div class="card">
                        <div class="card-inner">
                            <img class="icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                            <?php if(!empty($link['url'])): ?>
                                <a href="<?php echo $link['url']; ?>" class="pb-10 heading"><?php echo $card_heading; ?></a>
                            <?php else: ?>
                                <span class="pb-10 heading"><?php echo $card_heading; ?></span>
                            <?php endif; ?>
                            <div class="desc">
                                <h4 class="my-0 pb-10"><?php echo $hover_heading; ?></h4>
                                <p class="my-0"><?php echo $hover_desc; ?></p>
                                <a href="<?php echo $link['url']; ?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/button-icon.png" alt="navigation" width="24" height="24"></a>
                            </div>
                        </div>
                    </div>

                <?php endforeach; endif; ?>
            </div>
        </div> 
    </div>
</section>