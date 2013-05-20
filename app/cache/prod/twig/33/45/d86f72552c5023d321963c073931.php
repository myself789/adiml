<?php

/* ::layout.html.twig */
class __TwigTemplate_3345d86f72552c5023d321963c073931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Adim Laurentides</title>
        
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js\"></script>
        <script src=\"//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/rs-plugin/js/jquery.themepunch.plugins.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/rs-plugin/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slider.js"), "html", null, true);
        echo "\"></script>
        
        <link href=\"//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css\" rel=\"stylesheet\">
        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
        <link href='";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/rs-plugin/css/settings.css"), "html", null, true);
        echo "\" media=\"screen\" />
    </head>
    <body>
        <div class=\"container-fluid\">
            <div class=\"navbar navbar-fixed-top\">
                <div class=\"navbar-inner\">
                    <ul class=\"nav\">
                        <li class=\"active\"><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Link</a></li>
                        <li><a href=\"#\">Link</a></li>
                    </ul>
                </div>
            </div>
            
            <div class=\"row-fluid\">
                <div class=\"span12\" id=\"header\">
                    ";
        // line 32
        $this->env->loadTemplate("AdimAppBundle:Slider:slider.html.twig")->display($context);
        // line 33
        echo "                </div>
            </div>
            
            <div class=\"row-fluid\">
                <div class=\"span2\" id=\"left-column\">COMMANDITAIRES</div>
                <div class=\"span8\" id=\"content\">
                    ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "                    
                </div>
                <div class=\"span2\" id=\"right-column\">LIENS RAPIDES</div>
            </div>
        
            
        </div>
    </body>
</html>";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 39,  83 => 40,  81 => 39,  73 => 33,  71 => 32,  52 => 16,  48 => 15,  41 => 11,  37 => 10,  33 => 9,  29 => 8,  20 => 1,  34 => 5,  31 => 4,  28 => 3,);
    }
}
