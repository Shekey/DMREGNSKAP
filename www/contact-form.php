<section id="contact"  class="contact">
        <div class="container">
            <div class="contact-details-page">
                <div class="contact-content">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-5 col-sm-5">
                            <div class="single-contact-box contact-card">
                                <div class="contact-right">
                                    <div class="contact-adress">
                                        <div class="contact-office-address">
                                            <h2>Kontakt informasjon</h2>
                                            <p>
                                                    Frydenbergveien 46B 0575 Oslo
                                            </p>
                                            <div class="contact-online-address">
                                                <div class="single-online-address">
                                                    <i class="fa fa-phone"></i>
                                                    00 47 907 63 994
                                                </div><!--/.single-online-address-->
                                                
                                                <div class="single-online-address">
                                                    <i class="fa fa-envelope-o"></i>
                                                    <span>avdo@dmregnskap.no</span>
                                                </div><!--/.single-online-address-->
                                            </div><!--/.contact-online-address-->
                                        </div><!--/.contact-office-address-->
                                    </div><!--/.contact-address-->
                                </div><!--/.contact-right-->
                            </div><!--/.single-contact-box-->
                        </div><!--/.col-->
                        <div class="col-md-6 col-sm-7">
                            <div class="single-contact-box">
                                <div class="contact-form">
                                    <h2>Send oss en melding</h2>
                                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                  <input type="text" class="form-control required" id="firstname" placeholder="Fornavn" name="firstname" required>
                                                </div><!--/.form-group-->
                                            </div><!--/.col-->
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                  <input type="text" class="form-control required" id="lastname" placeholder="Etternavn" name="laststname" required>
                                                </div><!--/.form-group-->
                                            </div><!--/.col-->
                                        </div><!--/.row-->
                                        <div class="row">
                                                <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control required" id="company-name" placeholder="Selskapsnavn" name="company-name">
                                                </div><!--/.form-group-->
                                            </div><!--/.col-->
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control required" id="email" placeholder="E-mail" name="email" required>
                                                </div><!--/.form-group-->
                                            </div><!--/.col-->

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="phone" class="form-control required" id="phone" placeholder="Telefon nummer" name="phone" required>
                                                </div><!--/.form-group-->
                                            </div><!--/.col-->
                                        </div><!--/.row-->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <textarea required class="form-control required" name="comment" rows="7" id="comment" placeholder="Din melding" ></textarea>
                                                </div><!--/.form-group-->
                                            </div><!--/.col-->
                                        </div><!--/.row-->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="single-contact-btn pull-right">
                                                    <button class="contact-btn" name="submit" type="submit">Send</button>
                                                </div><!--/.single-single-contact-btn-->
                                            </div><!--/.col-->
                                        </div><!--/.row-->
                                    </form><!--/form-->
                                </div><!--/.contact-form-->
                            </div><!--/.single-contact-box-->
                        </div><!--/.col-->
                    </div><!--/.row-->
                </div><!--/.contact-content-->
            </div><!--/.contact-details-->
        </div><!--/.container-->
    </section><!--/.contact-->
