<?php get_header()?>


<section class="contact">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-image"></div>
            </div>
        </div>
    </div>
</section>

<section class="contact-content">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="need-music">
                    <h1>Licensing and composition</h1>
                    <p>
                        Fill out the form to get in touch about licensing an existing track or if are interested in a custom composition:
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-page">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
<!--                    <form>-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-12">-->
<!--                                <label for="name">Name *</label>-->
<!--                            </div>-->
<!--                            <div class="col">-->
<!--                                <input type="text" class="form-control" placeholder="" id="name">-->
<!--                                <small> First</small>-->
<!--                            </div>-->
<!--                            <div class="col">-->
<!--                                <input type="text" class="form-control" placeholder="">-->
<!--                                <small> Last</small>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group">-->
<!--                            <label for="email">Email *</label>-->
<!--                            <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="">-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group">-->
<!--                            <label for="subject">Subject *</label>-->
<!--                            <input type="text" class="form-control" id="subject" aria-describedby="subject"-->
<!--                                   placeholder="">-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group">-->
<!--                            <label for="message">Message</label>-->
<!--                            <textarea class="form-control" id="message" rows="3"></textarea>-->
<!--                        </div>-->
<!--                        <a href="#" class="submit float-right">Submit</a>-->
<!--                    </form>-->

                    <?php echo do_shortcode('[contact-form-7 id="70" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer()?>
