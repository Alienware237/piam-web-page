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

/* Components/team.html.twig */
class __TwigTemplate_316227fc3b3d401df8f3dfeb21733a0a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Components/team.html.twig"));

        // line 1
        echo "<!-- Team Start -->
<div class=\"container-xxl py-6 pb-5\" id=\"team\">
    <div class=\"container\">
        <div class=\"row g-5 mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"col-lg-6\">
                <h1 class=\"display-5 mb-0\">Team Members</h1>
            </div>
            <div class=\"col-lg-6 text-lg-end\">
                <a class=\"btn btn-primary py-3 px-5\" href=\"\">Contact Us</a>
            </div>
        </div>
        <div class=\"row g-4\">
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"team-item position-relative\">
                        <img class=\"img-fluid rounded\" src=\"img/team-4.jpg\" alt=\"\">
                        <div class=\"team-text bg-white rounded-end p-4\">
                            <div>
                                <h5>Full Name</h5>
                                <span>Designer</span>
                            </div>
                            <i class=\"fa fa-arrow-right fa-2x text-primary\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"team-item position-relative\">
                    <img class=\"img-fluid rounded\" src=\"\" alt=\"\">
                    <div class=\"team-text bg-white rounded-end p-4\">
                        <div>
                            <h5>Full Name</h5>
                            <span>Software developer & architect</span>
                        </div>
                        <i class=\"fa fa-arrow-right fa-2x text-primary\"></i>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"team-item position-relative\">
                    <img class=\"img-fluid rounded\" src=\"\" alt=\"\">
                    <div class=\"team-text bg-white rounded-end p-4\">
                        <div>
                            <h5>Full Name</h5>
                            <span>Designer</span>
                        </div>
                        <i class=\"fa fa-arrow-right fa-2x text-primary\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Components/team.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Team Start -->
<div class=\"container-xxl py-6 pb-5\" id=\"team\">
    <div class=\"container\">
        <div class=\"row g-5 mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"col-lg-6\">
                <h1 class=\"display-5 mb-0\">Team Members</h1>
            </div>
            <div class=\"col-lg-6 text-lg-end\">
                <a class=\"btn btn-primary py-3 px-5\" href=\"\">Contact Us</a>
            </div>
        </div>
        <div class=\"row g-4\">
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"team-item position-relative\">
                        <img class=\"img-fluid rounded\" src=\"img/team-4.jpg\" alt=\"\">
                        <div class=\"team-text bg-white rounded-end p-4\">
                            <div>
                                <h5>Full Name</h5>
                                <span>Designer</span>
                            </div>
                            <i class=\"fa fa-arrow-right fa-2x text-primary\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"team-item position-relative\">
                    <img class=\"img-fluid rounded\" src=\"\" alt=\"\">
                    <div class=\"team-text bg-white rounded-end p-4\">
                        <div>
                            <h5>Full Name</h5>
                            <span>Software developer & architect</span>
                        </div>
                        <i class=\"fa fa-arrow-right fa-2x text-primary\"></i>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"team-item position-relative\">
                    <img class=\"img-fluid rounded\" src=\"\" alt=\"\">
                    <div class=\"team-text bg-white rounded-end p-4\">
                        <div>
                            <h5>Full Name</h5>
                            <span>Designer</span>
                        </div>
                        <i class=\"fa fa-arrow-right fa-2x text-primary\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
", "Components/team.html.twig", "/var/www/html/templates/Components/team.html.twig");
    }
}
