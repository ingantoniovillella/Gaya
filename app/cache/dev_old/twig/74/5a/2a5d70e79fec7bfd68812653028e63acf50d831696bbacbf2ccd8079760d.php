<?php

/* ::base.html.twig */
class __TwigTemplate_745a2a5d70e79fec7bfd68812653028e63acf50d831696bbacbf2ccd8079760d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gaya/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gaya/css/heroic-features.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 15
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "            ";
        $this->displayBlock('footer', $context, $blocks);
        // line 17
        echo "        ";
    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
    }

    // line 16
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gaya/js/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gaya/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 20,  110 => 19,  107 => 18,  102 => 16,  97 => 15,  92 => 14,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  70 => 8,  65 => 7,  62 => 6,  56 => 5,  50 => 22,  38 => 10,  36 => 6,  32 => 5,  26 => 1,  158 => 98,  155 => 97,  87 => 31,  84 => 30,  55 => 5,  52 => 4,  47 => 18,  45 => 13,  42 => 96,  40 => 30,  37 => 29,  34 => 4,  31 => 3,);
    }
}
