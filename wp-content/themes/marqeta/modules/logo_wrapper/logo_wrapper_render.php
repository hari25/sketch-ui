<?php 
 $logos = get_field('logos');


// Check rows exists.
if( have_rows('logos') ): ?>
    <section class="logos-wrapper pb_row fade-in">
        <div class="constrained-width">
            <div class="pb_row logos">
                <?php  // Loop through rows.
                    while( have_rows('logos') ) : the_row();

                    // Load sub field value.
                    $logo = get_sub_field('logo');?>
                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                 <!-- End loop.  --> 
                <?php endwhile; ?>
            </div>
        </div>
        
    </section>
<?php endif; ?>

