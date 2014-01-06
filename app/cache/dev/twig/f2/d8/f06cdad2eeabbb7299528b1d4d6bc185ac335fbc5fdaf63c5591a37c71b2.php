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
        // line 95
        echo "    
        ";
        // line 96
        $this->displayBlock('footer', $context, $blocks);
        // line 105
        echo "    </div>
    ";
        // line 106
        $this->displayBlock('javascripts', $context, $blocks);
        // line 109
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
                    <a class=\"navbar-brand\" href=\"\">Gaya Shop</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"\">Chi siamo</a></li>
                        <li><a href=\"\">Prodotti</a></li>
                        <li><a href=\"\">Contatti</a></li>
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
                <h1>Welcome ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
                <p><a class=\"btn btn-primary btn-large\">Scopri di più</a></p>
            </div>

            <hr>

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h3>Ultimi prodotti</h3>
                </div>
            </div><!-- /.row -->

            <div class=\"row text-center\">

                <div class=\"col-lg-3 col-md-6 hero-feature\">
                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gaya/images/800x500.gif"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"caption\">
                            <h3>Nome prodotto 1</h3>
                            <p>Piccola descrizione per caratterizzare il prodotto in vendita</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Acquista</a> <a href=\"#\" class=\"btn btn-default\">More Info</a></p>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 hero-feature\">
                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gaya/images/800x500.gif"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"caption\">
                            <h3>Nome prodotto 2</h3>
                            <p>Piccola descrizione per caratterizzare il prodotto in vendita</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Acquista</a> <a href=\"#\" class=\"btn btn-default\">More Info</a></p>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 hero-feature\">
                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gaya/images/800x500.gif"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"caption\">
                            <h3>Nome prodotto 3</h3>
                            <p>Piccola descrizione per caratterizzare il prodotto in vendita</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Acquista</a> <a href=\"#\" class=\"btn btn-default\">More Info</a></p>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 hero-feature\">
                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gaya/images/800x500.gif"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"caption\">
                            <h3>Nome prodotto 4</h3>
                            <p>Piccola descrizione per caratterizzare il prodotto in vendita</p>
                            <p><a href=\"#\" class=\"btn btn-primary\">Acquista</a> <a href=\"#\" class=\"btn btn-default\">More Info</a></p>
                        </div>
                    </div>
                </div>


            </div><!-- /.row -->

            <hr>
        ";
    }

    // line 96
    public function block_footer($context, array $blocks = array())
    {
        // line 97
        echo "            <footer>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <p>Copyright &copy; Antonio Villella</p>
                    </div>
                </div>
            </footer>
        ";
    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        // line 107
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
        return array (  189 => 107,  186 => 106,  175 => 97,  172 => 96,  154 => 81,  140 => 70,  126 => 59,  112 => 48,  93 => 32,  90 => 31,  87 => 30,  60 => 5,  57 => 4,  53 => 109,  51 => 106,  48 => 105,  46 => 96,  43 => 95,  41 => 30,  38 => 29,  35 => 4,  32 => 3,);
    }
}
