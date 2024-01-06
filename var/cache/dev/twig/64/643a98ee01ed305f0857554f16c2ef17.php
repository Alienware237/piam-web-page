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

/* Components/services.html.twig */
class __TwigTemplate_f523c1558749451b7ecb798eeea02ccd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Components/services.html.twig"));

        // line 1
        echo "<!-- Service Start -->
<div class=\"container-fluid bg-light my-5 py-6\" id=\"service\">
    <div class=\"container\">
        <div class=\"row g-5 mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"col-lg-6\">
                <h1 class=\"display-5 mb-0\">My Services</h1>
            </div>
            <div class=\"col-lg-6 text-lg-end\">
                <a class=\"btn btn-primary py-3 px-5\" href=\"\">Hire Me</a>
            </div>
        </div>
        <div class=\"row g-4\">
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5\">
                    <div class=\"bg-icon flex-shrink-0 mb-3\">
                        <i class=\"fa fa-crop-alt fa-2x text-dark\"></i>
                    </div>
                    <div class=\"ms-sm-4\">
                        <h4 class=\"mb-3\">Creative Design</h4>
                        <h6 class=\"mb-3\">Start from <span class=\"text-primary\">\$199</span></h6>
                        <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5\">
                    <div class=\"bg-icon flex-shrink-0 mb-3\">
                        <i class=\"fa fa-code-branch fa-2x text-dark\"></i>
                    </div>
                    <div class=\"ms-sm-4\">
                        <h4 class=\"mb-3\">Graphic Design</h4>
                        <h6 class=\"mb-3\">Start from <span class=\"text-primary\">\$199</span></h6>
                        <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5\">
                    <div class=\"bg-icon flex-shrink-0 mb-3\">
                        <i class=\"fa fa-code fa-2x text-dark\"></i>
                    </div>
                    <div class=\"ms-sm-4\">
                        <h4 class=\"mb-3\">Web Design</h4>
                        <h6 class=\"mb-3\">Start from <span class=\"text-primary\">\$199</span></h6>
                        <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5\">
                    <div class=\"bg-icon flex-shrink-0 mb-3\">
                        <i class=\"fa fa-laptop-code fa-2x text-dark\"></i>
                    </div>
                    <div class=\"ms-sm-4\">
                        <h4 class=\"mb-3\">UI/UX Design</h4>
                        <h6 class=\"mb-3\">Start from <span class=\"text-primary\">\$199</span></h6>
                        <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Components/services.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Service Start -->
<div class=\"container-fluid bg-light my-5 py-6\" id=\"service\">
    <div class=\"container\">
        <div class=\"row g-5 mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"col-lg-6\">
                <h1 class=\"display-5 mb-0\">My Services</h1>
            </div>
            <div class=\"col-lg-6 text-lg-end\">
                <a class=\"btn btn-primary py-3 px-5\" href=\"\">Hire Me</a>
            </div>
        </div>
        <div class=\"row g-4\">
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5\">
                    <div class=\"bg-icon flex-shrink-0 mb-3\">
                        <i class=\"fa fa-crop-alt fa-2x text-dark\"></i>
                    </div>
                    <div class=\"ms-sm-4\">
                        <h4 class=\"mb-3\">Creative Design</h4>
                        <h6 class=\"mb-3\">Start from <span class=\"text-primary\">\$199</span></h6>
                        <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5\">
                    <div class=\"bg-icon flex-shrink-0 mb-3\">
                        <i class=\"fa fa-code-branch fa-2x text-dark\"></i>
                    </div>
                    <div class=\"ms-sm-4\">
                        <h4 class=\"mb-3\">Graphic Design</h4>
                        <h6 class=\"mb-3\">Start from <span class=\"text-primary\">\$199</span></h6>
                        <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5\">
                    <div class=\"bg-icon flex-shrink-0 mb-3\">
                        <i class=\"fa fa-code fa-2x text-dark\"></i>
                    </div>
                    <div class=\"ms-sm-4\">
                        <h4 class=\"mb-3\">Web Design</h4>
                        <h6 class=\"mb-3\">Start from <span class=\"text-primary\">\$199</span></h6>
                        <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5\">
                    <div class=\"bg-icon flex-shrink-0 mb-3\">
                        <i class=\"fa fa-laptop-code fa-2x text-dark\"></i>
                    </div>
                    <div class=\"ms-sm-4\">
                        <h4 class=\"mb-3\">UI/UX Design</h4>
                        <h6 class=\"mb-3\">Start from <span class=\"text-primary\">\$199</span></h6>
                        <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->", "Components/services.html.twig", "/var/www/html/templates/Components/services.html.twig");
    }
}
