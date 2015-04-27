    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading">MATHIEU BECKER</div>
                <div class="intro-lead-in">Etudiant & Developpeur</div>
                <a href="#activites" class="page-scroll btn btn-xl">En savoir plus</a>
            </div>
        </div>
    </header>
    
    <!-- Liste des activités réalisées -->
    <section id="activites" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Activités</h2>
                    <h3 class="section-subheading text-muted">Mes dernières réalisations</h3>
                    <div class="row">
                        <?php foreach ($lesActivites as $uneActivite){?>
                        <article class="col-md-4 col-sm-6 work portfolio-item">
                            <img src="img/<?php echo $uneActivite['img']; ?>" class="img-responsive" alt="">
                            <div class="portfolio-caption">
                                <h3><?php echo $uneActivite['nom']; ?></h3>
                                <h5 class="text-muted"><?php echo $uneActivite['libelle']; ?></h5>
                            </div>
                            <div class="work_detail">
                                <hr/>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="img/<?php echo $uneActivite['img']; ?>" class="img-responsive" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h2><?php echo $uneActivite['nom']; ?></h2>
                                        <h4 class="text-muted"><?php echo $uneActivite['libelle']; ?></h4>
                                        <p class="detail"><?php echo $uneActivite['desc']; ?></p>
                                    </div>
                                </div>
                                <hr/>
                            </div>
                        </article>
                        <?php } ?>
                    </div>
                    <div class="row row_detail"></div>
                </div>
            </div>       
        </div>
    </section>
    
    <section id="curriculumvitae">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">CV</h2>
                    <h3 class="section-subheading text-muted">Voici mon curriculum vitae</h3>
                    <div class="row">
                        <article class="col-md-6 col-md-offset-3 work">
                            <a href="http://mathieubecker.16mb.com/img/curriculum_vitae.gif">
                                <img src="img/curriculum_vitae.gif" class="img-responsive" alt="">
                            </a>                           
                        </article>
                    </div>
                </div>
            </div>       
        </div>
    </section>
    
    <!-- About Section -->
    <section id="about" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">A Propos</h2>
                </div>
            </div>
            <div class="row about">
                <div class="col-md-10 col-md-offset-1">
                    <p class="about-detail text-muted">Actuellement étudiant en 2ème année de BTS SIO spécialité SLAM.
                    L'an prochain j'aimerai poursuivre mes études en Licence Professionnelle métier du Web et E-Commerce. 
                    Cette Licence me donnera l'opportunité de consolider mes acquis mais aussi d'acquérir de plus amples connaissances dans ce domaine qui me passione.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Me contacter</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <?php if(array_key_exists('error', $_SESSION)): ?>
            <div class="alert alert-danger">
                <?= implode('<br>', $_SESSION['error']); ?>
            </div>
            <?php endif; ?>
            <?php if(array_key_exists('success', $_SESSION)): ?>
            <div class="alert alert-success">
                Votre email a bien été envoyé.
            </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST" action="index.php?uc=sendmail">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Votre Nom *" name="name" value="<?php isset($_SESSION['input']['name'])? $_SESSION['input']['name'] : '';?>">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Votre Email *" name="email" value="<?php isset($_SESSION['input']['email'])? $_SESSION['input']['email'] : '';?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Votre Message *" name="message"<?php isset($_SESSION['input']['message'])? $_SESSION['input']['message'] : '';?>></textarea>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" name="envoyer" class="btn btn-xl">Envoyer Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
unset($_SESSION['error']); 
unset($_SESSION['input']); 
unset($_SESSION['success']); 
?>