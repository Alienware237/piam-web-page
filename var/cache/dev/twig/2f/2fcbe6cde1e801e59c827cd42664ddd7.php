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

/* Components/navbar1.html.twig */
class __TwigTemplate_9a716a6f3aba7a06fdebc7203daf022d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Components/navbar1.html.twig"));

        // line 1
        echo "

<!-- Navbar Start -->
<nav class=\"navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn\" data-wow-delay=\"0.1s\">
    <a href=\"index.html\" class=\"navbar-brand d-block d-lg-none\">
        <h1 class=\"text-primary fw-bold m-0\">Piam Talom</h1>
    </a>
    <button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse justify-content-between py-4 py-lg-0\" id=\"navbarCollapse\">
        <div class=\"navbar-nav ms-auto py-0\">
            <a href=\"#home\" class=\"nav-item nav-link active\">Home</a>
            <a href=\"#about\" class=\"nav-item nav-link\">About</a>
            <a href=\"#skill\" class=\"nav-item nav-link\">Skills</a>
            <a href=\"#service\" class=\"nav-item nav-link\">Services</a>
        </div>
        <a href=\"index.html\" class=\"navbar-brand bg-secondary py-3 px-4 mx-3 d-none d-lg-block\">
            <h1 class=\"text-primary fw-bold m-0\">Piam Talom</h1>
        </a>
        <div class=\"navbar-nav me-auto py-0\">
            <a href=\"#project\" class=\"nav-item nav-link\">Projects</a>
            <a href=\"#team\" class=\"nav-item nav-link\">Team</a>
            <a href=\"#testimonial\" class=\"nav-item nav-link\">Testimonial</a>
            <a href=\"#contact\" class=\"nav-item nav-link\">Contact</a>
        </div>
    </div>
</nav>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Components/navbar1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!-- Navbar Start -->
<nav class=\"navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn\" data-wow-delay=\"0.1s\">
    <a href=\"index.html\" class=\"navbar-brand d-block d-lg-none\">
        <h1 class=\"text-primary fw-bold m-0\">Piam Talom</h1>
    </a>
    <button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse justify-content-between py-4 py-lg-0\" id=\"navbarCollapse\">
        <div class=\"navbar-nav ms-auto py-0\">
            <a href=\"#home\" class=\"nav-item nav-link active\">Home</a>
            <a href=\"#about\" class=\"nav-item nav-link\">About</a>
            <a href=\"#skill\" class=\"nav-item nav-link\">Skills</a>
            <a href=\"#service\" class=\"nav-item nav-link\">Services</a>
        </div>
        <a href=\"index.html\" class=\"navbar-brand bg-secondary py-3 px-4 mx-3 d-none d-lg-block\">
            <h1 class=\"text-primary fw-bold m-0\">Piam Talom</h1>
        </a>
        <div class=\"navbar-nav me-auto py-0\">
            <a href=\"#project\" class=\"nav-item nav-link\">Projects</a>
            <a href=\"#team\" class=\"nav-item nav-link\">Team</a>
            <a href=\"#testimonial\" class=\"nav-item nav-link\">Testimonial</a>
            <a href=\"#contact\" class=\"nav-item nav-link\">Contact</a>
        </div>
    </div>
</nav>", "Components/navbar1.html.twig", "/var/www/html/templates/Components/navbar1.html.twig");
    }
}
