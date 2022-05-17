<?php get_header(); ?>

<main class='container my-3'>
    <?php if(have_posts()){
            while(have_posts()){
                the_post();
            ?>
                <div class="row">
                    <div class="col-6">
                        <div class="row santo">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/bamboo_product.png" alt="logo"/>
                            <div class="col-6">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/bamboo_product.png" alt="logo"/>
                            </div>
                            <div class="col-6">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/bamboo_product.png" alt="logo"/>
                            </div>
                        </div>
                    </div>                        
                    <div class="col-6">
                        <h1 class='my-5'><?php the_title() ?></h1>
                        <h3>Description</h3>
                        <?php the_content(); ?>
                        <h3>Price</h3>
                        <h2>c 1000.00</h2>
                        <form action="">
                            <div class="form-group">
                                <label for="">Quantity</label>
                                <input type="number" class="form-control" name="quantity" id="quantity" value="1">
                                <p>* Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            </div>
                            <button type="submit" class="btn btn-primary">Add to cart</button>
                        </form>
                    </div> 
                </div>
            <?php
            }
    } ?>

</main>
<?php get_footer(); ?>