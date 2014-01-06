<?php

/* GayaShopBundle:Home:index.html.twig */
class __TwigTemplate_f2d8f06cdad2eeabbb7299528b1d4d6bc185ac335fbc5fdaf63c5591a37c71b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 29
        echo "    <div class=\"container\">    
        ";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 96
        echo "    
        ";
        // line 97
        $this->displayBlock('footer', $context, $blocks);
        // line 106
        echo "    </div>
    ";
        // line 107
        $this->displayBlock('javascripts', $context, $blocks);
        // line 110
        echo " ";
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "       
        <nav class=\"navbar navbar-fixed-top navbar-inverse\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.php\">Start Bootstrap</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"#about\">About</a></li>
                        <li><a href=\"#services\">Services</a></li>
                        <li><a href=\"#contact\">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
    ";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "            <div class=\"jumbotron hero-spacer\">
                <h1>A Warm Welcome!</h1>
                <p>Introduce your website content using this jumbotron! It's an awesome way to call attention to something that needs to be read! It's also a great alternative to using a banner image if you don't have a good quality picture!</p>
                <p><a class=\"btn btn-primary btn-large\">Call to action!</a></p>
            </div>

            <hr>

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h3>Latest Features</h3>
                </div>
            </div><!-- /.row -->

            <div class=\"row text-center\">

                <div class=\"col-lg-3 col-md-6 hero-feature\">
                    <div class=\"thumbnail\">
                        <img src=\"http://placehold.it/800x500\" alt=\"\">
                        <div class=\"caption\">
                            <h3>Feature Label</h3>
                            <p>This would be a great spot to feature some brand new products!</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Buy Now!</a> <a href=\"#\" class=\"btn btn-default\">More Info</a></p>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 hero-feature\">
                    <div class=\"thumbnail\">
                        <img src=\"http://placehold.it/800x500\" alt=\"\">
                        <div class=\"caption\">
                            <h3>Feature Label</h3>
                            <p>This would be a great spot to feature some brand new products!</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Buy Now!</a> <a href=\"#\" class=\"btn btn-default\">More Info</a></p>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 hero-feature\">
                    <div class=\"thumbnail\">
                        <img src=\"http://placehold.it/800x500\" alt=\"\">
                        <div class=\"caption\">
                            <h3>Feature Label</h3>
                            <p>This would be a great spot to feature some brand new products!</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Buy Now!</a> <a href=\"#\" class=\"btn btn-default\">More Info</a></p>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 hero-feature\">
                    <div class=\"thumbnail\">
                        <img src=\"http://placehold.it/800x500\" alt=\"\">
                        <div class=\"caption\">
                            <h3>Feature Label</h3>
                            <p>This would be a great spot to feature some brand new products!</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Buy Now!</a> <a href=\"#\" class=\"btn btn-default\">More Info</a></p>
                        </div>
                    </div>
                </div>


            </div><!-- /.row -->

            <hr>
        ";
    }

    // line 97
    public function block_footer($context, array $blocks = array())
    {
        // line 98
        echo "            <footer>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <p>Copyright &copy; Company 2013</p>
                    </div>
                </div>
            </footer>
        ";
    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        // line 108
        echo "            ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "GayaShopBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 108,  172 => 107,  161 => 98,  158 => 97,  90 => 31,  87 => 30,  60 => 5,  57 => 4,  53 => 110,  51 => 107,  48 => 106,  46 => 97,  43 => 96,  41 => 30,  38 => 29,  35 => 4,  32 => 3,);
    }
}
