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

/* Components/testimonial.html.twig */
class __TwigTemplate_3f520c2b75001733973e91568f56ea47 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Components/testimonial.html.twig"));

        // line 1
        echo "<!-- Testimonial Start -->
<div class=\"container-fluid bg-light py-5 my-5\" id=\"testimonial\">
    <div class=\"container-fluid py-5\">
        <h1 class=\"display-5 text-center mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\">Testimonial</h1>
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-3 d-none d-lg-block\">
                <div class=\"testimonial-left h-100\">
                    <img class=\"img-fluid wow fadeIn\" data-wow-delay=\"0.1s\" src=\"img/testimonial-1.jpg\" alt=\"\">
                    <img class=\"img-fluid wow fadeIn\" data-wow-delay=\"0.3s\" src=\"img/testimonial-2.jpg\" alt=\"\">
                    <img class=\"img-fluid wow fadeIn\" data-wow-delay=\"0.5s\" src=\"img/testimonial-3.jpg\" alt=\"\">
                </div>
            </div>
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <div class=\"owl-carousel testimonial-carousel\">
                    <div class=\"testimonial-item text-center\">
                        <div class=\"position-relative mb-5\">
                            <img class=\"img-fluid rounded-circle border border-secondary p-2 mx-auto\" src=\"img/testimonial-1.jpg\" alt=\"\">
                            <div class=\"testimonial-icon\">
                                <i class=\"fa fa-quote-left text-primary\"></i>
                            </div>
                        </div>
                        <p class=\"fs-5 fst-italic\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                        <hr class=\"w-25 mx-auto\">
                        <h5>Client Name</h5>
                        <span>Profession</span>
                    </div>
                    <div class=\"testimonial-item text-center\">
                        <div class=\"position-relative mb-5\">
                            <img class=\"img-fluid rounded-circle border border-secondary p-2 mx-auto\" src=\"img/testimonial-2.jpg\" alt=\"\">
                            <div class=\"testimonial-icon\">
                                <i class=\"fa fa-quote-left text-primary\"></i>
                            </div>
                        </div>
                        <p class=\"fs-5 fst-italic\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                        <hr class=\"w-25 mx-auto\">
                        <h5>Client Name</h5>
                        <span>Profession</span>
                    </div>
                    <div class=\"testimonial-item text-center\">
                        <div class=\"position-relative mb-5\">
                            <img class=\"img-fluid rounded-circle border border-secondary p-2 mx-auto\" src=\"img/testimonial-3.jpg\" alt=\"\">
                            <div class=\"testimonial-icon\">
                                <i class=\"fa fa-quote-left text-primary\"></i>
                            </div>
                        </div>
                        <p class=\"fs-5 fst-italic\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                        <hr class=\"w-25 mx-auto\">
                        <h5>Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 d-none d-lg-block\">
                <div class=\"testimonial-right h-100\">
                    <img class=\"img-fluid wow fadeIn\" data-wow-delay=\"0.1s\" src=\"img/testimonial-1.jpg\" alt=\"\">
                    <img class=\"img-fluid wow fadeIn\" data-wow-delay=\"0.3s\" src=\"img/testimonial-2.jpg\" alt=\"\">
                    <img class=\"img-fluid wow fadeIn\" data-wow-delay=\"0.5s\" src=\"img/testimonial-3.jpg\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Components/testimonial.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Testimonial Start -->
<div class=\"container-fluid bg-light py-5 my-5\" id=\"testimonial\">
    <div class=\"container-fluid py-5\">
        <h1 class=\"display-5 text-center mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\">Testimonial</h1>
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-3 d-none d-lg-block\">
                <div class=\"testimonial-left h-100\">
                    <img class=\"img-fluid wow fadeIn\" data-wow-delay=\"0.1s\" src=\"img/testimonial-1.jpg\" alt=\"\">
                    <img class=\"img-fluid wow fadeIn\" data-wow-delay=\"0.3s\" src=\"img/testimonial-2.jpg\" alt=\"\">
                    <img class=\"img-fluid wow fadeIn\" data-wow-delay=\"0.5s\" src=\"img/testimonial-3.jpg\" alt=\"\">
                </div>
            </div>
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <div class=\"owl-carousel testimonial-carousel\">
                    <div class=\"testimonial-item text-center\">
                        <div class=\"position-relative mb-5\">
                            <img class=\"img-fluid rounded-circle border border-secondary p-2 mx-auto\" src=\"img/testimonial-1.jpg\" alt=\"\">
                            <div class=\"testimonial-icon\">
                                <i class=\"fa fa-quote-left text-primary\"></i>
                            </div>
                        </div>
                        <p class=\"fs-5 fst-italic\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                        <hr class=\"w-25 mx-auto\">
                        <h5>Client Name</h5>
                        <span>Profession</span>
                    </div>
                    <div class=\"testimonial-item text-center\">
                        <div class=\"position-relative mb-5\">
                            <img class=\"img-fluid rounded-circle border border-secondary p-2 mx-auto\" src=\"img/testimonial-2.jpg\" alt=\"\">
                            <div class=\"testimonial-icon\">
                                <i class=\"fa fa-quote-left text-primary\"></i>
                            </div>
                        </div>
                        <p class=\"fs-5 fst-italic\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                        <hr class=\"w-25 mx-auto\">
                        <h5>Client Name</h5>
                        <span>Profession</span>
                    </div>
                    <div class=\"testimonial-item text-center\">
                        <div class=\"position-relative mb-5\">
                            <img class=\"img-fluid rounded-circle border border-secondary p-2 mx-auto\" src=\"img/testimonial-3.jpg\" alt=\"\">
                            <div class=\"testimonial-icon\">
                                <i class=\"fa fa-quote-left text-primary\"></i>
                            </div>
                        </div>
                        <p class=\"fs-5 fst-italic\">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                        <hr class=\"w-25 mx-auto\">
                        <h5>Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 d-none d-lg-block\">
                <div class=\"testimonial-right h-100\">
                    <img class=\"img-fluid wow fadeIn\" data-wow-delay=\"0.1s\" src=\"img/testimonial-1.jpg\" alt=\"\">
                    <img class=\"img-fluid wow fadeIn\" data-wow-delay=\"0.3s\" src=\"img/testimonial-2.jpg\" alt=\"\">
                    <img class=\"img-fluid wow fadeIn\" data-wow-delay=\"0.5s\" src=\"img/testimonial-3.jpg\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->", "Components/testimonial.html.twig", "/var/www/html/templates/Components/testimonial.html.twig");
    }
}
