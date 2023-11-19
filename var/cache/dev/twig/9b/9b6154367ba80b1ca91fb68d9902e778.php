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

/* Components/projects.html.twig */
class __TwigTemplate_cf33bbad0e2edbd4cd4dc91fe16516d5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Components/projects.html.twig"));

        // line 1
        echo "<!-- Projects Start -->
<div class=\"container-xxl py-6 pt-5\" id=\"project\">
    <div class=\"container\">
        <div class=\"row g-5 mb-5 align-items-center wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"col-lg-6\">
                <h1 class=\"display-5 mb-0\">My Projects</h1>
            </div>
            <div class=\"col-lg-6 text-lg-end\">
                <ul class=\"list-inline mx-n3 mb-0\" id=\"portfolio-flters\">
                    <li class=\"mx-3 active\" data-filter=\"*\">All Projects</li>
                    <li class=\"mx-3\" data-filter=\".first\">UI/UX Design</li>
                    <li class=\"mx-3\" data-filter=\".second\">Graphic Design</li>
                </ul>
            </div>
        </div>
        <div class=\"row g-4 portfolio-container wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"col-lg-4 col-md-6 portfolio-item second\">
                <div class=\"portfolio-img rounded overflow-hidden\">
                    <img class=\"img-fluid\" src=\"img/projects/Logo_tissu_haut_de_gamme-1.jpg\" alt=\"\">
                    <div class=\"portfolio-btn\">
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"img/projects/Logo_tissu_haut_de_gamme-1.pdf\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"https://kimpa-africa-online-shop.onrender.com/kimpa\"><i class=\"fa fa-link\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 portfolio-item first\">
                <div class=\"portfolio-img rounded overflow-hidden\">
                    <img class=\"img-fluid\" src=\"img/projects/EBO_4068.jpg\" alt=\"\">
                    <div class=\"portfolio-btn\">
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"img/projects/EBO_4068.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"https://kimpa-africa-online-shop.onrender.com/leticia\"><i class=\"fa fa-link\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 portfolio-item first\">
                <div class=\"portfolio-img rounded overflow-hidden\">
                    <img class=\"img-fluid\" src=\"img/project-1.jpg\" alt=\"\">
                    <div class=\"portfolio-btn\">
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"img/project-1.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 portfolio-item second\">
                <div class=\"portfolio-img rounded overflow-hidden\">
                    <img class=\"img-fluid\" src=\"img/project-2.jpg\" alt=\"\">
                    <div class=\"portfolio-btn\">
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"img/project-2.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 portfolio-item first\">
                <div class=\"portfolio-img rounded overflow-hidden\">
                    <img class=\"img-fluid\" src=\"img/project-3.jpg\" alt=\"\">
                    <div class=\"portfolio-btn\">
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"img/project-3.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 portfolio-item second\">
                <div class=\"portfolio-img rounded overflow-hidden\">
                    <img class=\"img-fluid\" src=\"img/project-4.jpg\" alt=\"\">
                    <div class=\"portfolio-btn\">
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"img/project-4.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 portfolio-item first\">
                <div class=\"portfolio-img rounded overflow-hidden\">
                    <img class=\"img-fluid\" src=\"img/project-5.jpg\" alt=\"\">
                    <div class=\"portfolio-btn\">
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"img/project-5.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 portfolio-item second\">
                <div class=\"portfolio-img rounded overflow-hidden\">
                    <img class=\"img-fluid\" src=\"img/project-6.jpg\" alt=\"\">
                    <div class=\"portfolio-btn\">
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"img/project-6.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Projects End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Components/projects.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Projects Start -->
<div class=\"container-xxl py-6 pt-5\" id=\"project\">
    <div class=\"container\">
        <div class=\"row g-5 mb-5 align-items-center wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"col-lg-6\">
                <h1 class=\"display-5 mb-0\">My Projects</h1>
            </div>
            <div class=\"col-lg-6 text-lg-end\">
                <ul class=\"list-inline mx-n3 mb-0\" id=\"portfolio-flters\">
                    <li class=\"mx-3 active\" data-filter=\"*\">All Projects</li>
                    <li class=\"mx-3\" data-filter=\".first\">UI/UX Design</li>
                    <li class=\"mx-3\" data-filter=\".second\">Graphic Design</li>
                </ul>
            </div>
        </div>
        <div class=\"row g-4 portfolio-container wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"col-lg-4 col-md-6 portfolio-item second\">
                <div class=\"portfolio-img rounded overflow-hidden\">
                    <img class=\"img-fluid\" src=\"img/projects/Logo_tissu_haut_de_gamme-1.jpg\" alt=\"\">
                    <div class=\"portfolio-btn\">
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"img/projects/Logo_tissu_haut_de_gamme-1.pdf\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"https://kimpa-africa-online-shop.onrender.com/kimpa\"><i class=\"fa fa-link\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 portfolio-item first\">
                <div class=\"portfolio-img rounded overflow-hidden\">
                    <img class=\"img-fluid\" src=\"img/projects/EBO_4068.jpg\" alt=\"\">
                    <div class=\"portfolio-btn\">
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"img/projects/EBO_4068.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"https://kimpa-africa-online-shop.onrender.com/leticia\"><i class=\"fa fa-link\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 portfolio-item first\">
                <div class=\"portfolio-img rounded overflow-hidden\">
                    <img class=\"img-fluid\" src=\"img/project-1.jpg\" alt=\"\">
                    <div class=\"portfolio-btn\">
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"img/project-1.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 portfolio-item second\">
                <div class=\"portfolio-img rounded overflow-hidden\">
                    <img class=\"img-fluid\" src=\"img/project-2.jpg\" alt=\"\">
                    <div class=\"portfolio-btn\">
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"img/project-2.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 portfolio-item first\">
                <div class=\"portfolio-img rounded overflow-hidden\">
                    <img class=\"img-fluid\" src=\"img/project-3.jpg\" alt=\"\">
                    <div class=\"portfolio-btn\">
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"img/project-3.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 portfolio-item second\">
                <div class=\"portfolio-img rounded overflow-hidden\">
                    <img class=\"img-fluid\" src=\"img/project-4.jpg\" alt=\"\">
                    <div class=\"portfolio-btn\">
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"img/project-4.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 portfolio-item first\">
                <div class=\"portfolio-img rounded overflow-hidden\">
                    <img class=\"img-fluid\" src=\"img/project-5.jpg\" alt=\"\">
                    <div class=\"portfolio-btn\">
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"img/project-5.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 portfolio-item second\">
                <div class=\"portfolio-img rounded overflow-hidden\">
                    <img class=\"img-fluid\" src=\"img/project-6.jpg\" alt=\"\">
                    <div class=\"portfolio-btn\">
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"img/project-6.jpg\" data-lightbox=\"portfolio\"><i class=\"fa fa-eye\"></i></a>
                        <a class=\"btn btn-lg-square btn-outline-secondary border-2 mx-1\" href=\"\"><i class=\"fa fa-link\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Projects End -->
", "Components/projects.html.twig", "/var/www/html/templates/Components/projects.html.twig");
    }
}
