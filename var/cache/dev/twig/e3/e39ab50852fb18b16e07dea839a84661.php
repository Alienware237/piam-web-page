<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Components/header1.html.twig */
class __TwigTemplate_572b564f423bd294d3a44a205491b0d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Components/header1.html.twig"));

        // line 1
        echo "<!-- Header Start -->
<div class=\"container-fluid bg-light my-6 mt-0\" id=\"home\">
    <div class=\"container\">
        <div class=\"row g-5 align-items-center\">
            <div class=\"col-lg-6 py-6 pb-0 pt-lg-0\">
                <h3 class=\"text-primary mb-3\">I'm</h3>
                <h1 class=\"display-3 mb-3\">Kevin Piam</h1>
                <h2 class=\"typed-text-output d-inline\"></h2>
                <div class=\"typed-text d-none\">Web Designer, Apps Designer, Apps Developer, Web Developer, Software architect</div>
                <div class=\"d-flex align-items-center pt-5\">
                    <a href=\"\" class=\"btn btn-primary py-3 px-4 me-5\">Download CV</a>
                    <button type=\"button\" class=\"btn-play\" data-bs-toggle=\"modal\"
                            data-src=\"https://www.youtube.com/embed/DWRcNpR6Kdc\" data-bs-target=\"#videoModal\">
                        <span></span>
                    </button>
                    <h5 class=\"ms-4 mb-0 d-none d-sm-block\">Play Video</h5>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <img class=\"img-fluid\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/profile2.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Components/header1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header Start -->
<div class=\"container-fluid bg-light my-6 mt-0\" id=\"home\">
    <div class=\"container\">
        <div class=\"row g-5 align-items-center\">
            <div class=\"col-lg-6 py-6 pb-0 pt-lg-0\">
                <h3 class=\"text-primary mb-3\">I'm</h3>
                <h1 class=\"display-3 mb-3\">Kevin Piam</h1>
                <h2 class=\"typed-text-output d-inline\"></h2>
                <div class=\"typed-text d-none\">Web Designer, Apps Designer, Apps Developer, Web Developer, Software architect</div>
                <div class=\"d-flex align-items-center pt-5\">
                    <a href=\"\" class=\"btn btn-primary py-3 px-4 me-5\">Download CV</a>
                    <button type=\"button\" class=\"btn-play\" data-bs-toggle=\"modal\"
                            data-src=\"https://www.youtube.com/embed/DWRcNpR6Kdc\" data-bs-target=\"#videoModal\">
                        <span></span>
                    </button>
                    <h5 class=\"ms-4 mb-0 d-none d-sm-block\">Play Video</h5>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <img class=\"img-fluid\" src=\"{{ asset('img/profile2.png') }}\" alt=\"\">
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
", "Components/header1.html.twig", "/var/www/html/templates/Components/header1.html.twig");
    }
}
