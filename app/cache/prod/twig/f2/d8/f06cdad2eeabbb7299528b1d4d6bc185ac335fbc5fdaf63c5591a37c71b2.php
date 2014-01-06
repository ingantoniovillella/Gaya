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
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 74
        echo "     
 ";
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "        Ciao ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "!
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

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "        
        <div class=\"full-width-image-1\">

            <div class=\"logo-wrapper\">
                <img class=\"img-responsive\" src=\"http://placehold.it/200x200&text=Logo\" />
            </div>

        </div><!-- /full-width-image-1 -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 section\">
                    <h1 class=\"section-heading\">An Interesting Headline Goes Here</h1>
                    <p class=\"lead section-lead\">This stylish template features placeholder images from placehold.it and lorempixel! With some custom font stylings and awesome photos, you will have a beautiful website up and running in no time!</p>
                    <p class=\"section-paragraph\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin auctor quam ac tempor. Cras a ante sed libero mollis sodales. Praesent fringilla, neque ut ultrices faucibus, dolor eros ultrices neque, nec bibendum arcu ipsum eget justo. Phasellus vestibulum sagittis purus laoreet varius. Pellentesque malesuada malesuada mattis. Aliquam sed porta nisi, eget suscipit dolor. Nam ipsum sapien, rhoncus eu leo eu, ultricies pellentesque tellus.</p>
                </div>
            </div>
        </div>

        <div class=\"full-width-image-2\">
            <!-- box content goes here if you want to put text or a button in here -->
        </div><!-- /full-width-image-2 -->

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 section\">
                    <h1 class=\"section-heading\">Another Interesting Headline</h1>
                    <p class=\"lead section-lead\">The two different full width images are defined in the CSS. They aren't the same! One has a defined height, and one does not! Go crazy and get creative!</p>
                    <p class=\"section-paragraph\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin auctor quam ac tempor. Cras a ante sed libero mollis sodales. Praesent fringilla, neque ut ultrices faucibus, dolor eros ultrices neque, nec bibendum arcu ipsum eget justo. Phasellus vestibulum sagittis purus laoreet varius. Pellentesque malesuada malesuada mattis. Aliquam sed porta nisi, eget suscipit dolor. Nam ipsum sapien, rhoncus eu leo eu, ultricies pellentesque tellus.</p>
                </div>
            </div>
        </div>
    
    ";
    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        // line 64
        echo "    <div class=\"container\">
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    Copyright &copy; Company 2013
                </div>
            </div>
        </footer>
    </div>
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
        return array (  122 => 64,  119 => 63,  83 => 30,  80 => 29,  51 => 5,  48 => 4,  43 => 74,  40 => 63,  37 => 29,  34 => 4,  31 => 3,);
    }
}
