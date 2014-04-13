<?php
defined('_JEXEC') or die('Restricted access');

$imgPath = JUri::base() . 'templates/' . $this->template . '/images/';
$base = JUri::base();

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;
JHtml::_('bootstrap.framework');
//JHtml::_('bootstrap.loadCss', false, $this->direction);

$template = $app->getTemplate(true);
$params = $template->params;
$variant = $params->get('variant');

//$doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap.min.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $this->template . '/css/bootstrap.min.css');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
      xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
    <head>
        <jdoc:include type="head" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
    </head>

    <body>
        <div class="container">
            <div class="top-line"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="sun">
                        <img src="<?= $imgPath ?>sun.png">                    
                    </div>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="left-side"></div>
            <div class="right-side"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?= $base; ?>"><img src="<?= $imgPath ?>logo.png"></a>
                    </div>                
                </div>
            </div>
        </div>
        <div class='content'>
            <div class="container">
                <div class="left-line"></div>
                <?php if ($variant == 'homepage'): ?>
                    <div class="row first-row">
                        <div class="col-md-3">
                            <nav class="navigation" role="navigation">
                                <jdoc:include type="modules" name="menu" style="none" />
                            </nav>
                        </div>
                        <div class="col-md-9">
                            <div class="banner box-border">
                                <jdoc:include type="modules" name="banner" /> 

                                <script type="text/javascript">
                                    jQuery(document).ready(function() {
                                        jQuery(".carousel-hp").carousel({interval: 5000})
                                    });
                                </script>
                                <div id="carousel-hp" class="carousel slide carousel-hp" data-ride="carousel" >
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-hp" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-hp" data-slide-to="1"></li>
                                        <li data-target="#carousel-hp" data-slide-to="2"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="<?= $imgPath ?>carousel/hp1.png">
                                                <div class="carousel-caption">
                                                </div>
                                        </div>
                                        <div class="item">
                                            <img src="<?= $imgPath ?>carousel/hp2.png">
                                                <div class="carousel-caption">
                                                </div>
                                        </div>
                                        <div class="item">
                                            <img src="<?= $imgPath ?>carousel/hp3.png">
                                                <div class="carousel-caption">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row content-row">
                        <div class="col-md-12">
                            <div class="hp-box-wrap">
                                <h1>Jamboree</h1>
                            </div>
                            <div class="hp-box-wrap hp-box-wrap2">
                                <div class="box">
                                    <jdoc:include type="modules" name="main-content" /> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row bottom-row">
                        <div class="col-md-4">
                            <div class="box-border">
                                <jdoc:include type="modules" name="box-left" style="none" />
                                <h2>CO? KDY? KDE?</h2>
                                <ul>
                                    <li>23rd World Scout Jamboree</li>
                                    <li> Termín: 28.7. – 8.8. 2015</li>
                                    <li>Místo: Kirara-hama, Yamaguchi City, Japonsko</li>
                                    <li> Motto: A Spirit of Unity / „Duch jednoty“</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-border">
                                <h2>Aktuality</h2>
                                <jdoc:include type="modules" name="box-center" style="none" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-border box-fb">
                                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FJamboreeJaponsko2015&amp;width&amp;height=380&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=false&amp;appId=141326110552" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:380px; width: 100%" allowTransparency="true"></iframe>

                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($variant == 'page'): ?>
                    <div class="row first-row">
                        <div class="col-md-3">
                            <nav class="navigation" role="navigation">
                                <jdoc:include type="modules" name="menu" style="none" />
                            </nav>
                        </div>
                        <div class="col-md-9">
                            <div class="hp-box-wrap">
                                <h1 id="title"><?php echo $page_title = $doc->getTitle(); ?></h1>
                            </div>
                            <div class="hp-box-wrap hp-box-wrap2">
                                <div class="box">
                                    <jdoc:include type="message" />
                                    <jdoc:include type="component" /> 
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="left-line"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="bottom">
                            Jamboree.cz - officiální stránky českého kontingentu na 23. světové skautské jamboree.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
