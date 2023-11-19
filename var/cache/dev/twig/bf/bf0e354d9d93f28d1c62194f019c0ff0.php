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

/* Components/contact.html.twig */
class __TwigTemplate_818f4ba7dfee66484c219c94ee256128 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Components/contact.html.twig"));

        // line 1
        echo "<!-- Contact Start -->
<div class=\"container-xxl pb-5\" id=\"contact\">
    <div class=\"container py-5\">
        <div class=\"row g-5 mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"col-lg-6\">
                <h1 class=\"display-5 mb-0\">Let's Work Together</h1>
            </div>
            <div class=\"col-lg-6 text-lg-end\">
                <a class=\"btn btn-primary py-3 px-5\" href=\"\">Say Hello</a>
            </div>
        </div>
        <div class=\"row g-5\">
            <div class=\"col-lg-5 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <p class=\"mb-2\">My office:</p>
                <h3 class=\"fw-bold\">97 Eichendorffring, Giessen, Germany</h3>
                <hr class=\"w-100\">
                <p class=\"mb-2\">Call me:</p>
                <h3 class=\"fw-bold\">+49 1767452052</h3>
                <hr class=\"w-100\">
                <p class=\"mb-2\">Mail me:</p>
                <h3 class=\"fw-bold\">kevinpiam3@yahoo.com</h3>
                <hr class=\"w-100\">
                <p class=\"mb-2\">Follow me:</p>
                <div class=\"d-flex pt-2\">
                    <a class=\"btn btn-square btn-primary me-2\" href=\"https://instagram.com/kevin_piam?igshid=OGQ5ZDc2ODk2ZA==\"><i class=\"fab fa-instagram\"></i></a>
                    <a class=\"btn btn-square btn-primary me-2\" href=\"https://www.facebook.com/kevin.piam.5\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-square btn-primary me-2\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-square btn-primary me-2\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                    <a class=\"btn btn-square btn-primary me-2\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                </div>
            </div>
            <div class=\"col-lg-7 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <form>
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\">
                                <label for=\"name\">Your Name</label>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Your Email\">
                                <label for=\"email\">Your Email</label>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                <input type=\"text\" class=\"form-control\" id=\"subject\" placeholder=\"Subject\">
                                <label for=\"subject\">Subject</label>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                <textarea class=\"form-control\" placeholder=\"Leave a message here\" id=\"message\" style=\"height: 100px\"></textarea>
                                <label for=\"message\">Message</label>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <button class=\"btn btn-primary py-3 px-5\" type=\"submit\">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Components/contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Contact Start -->
<div class=\"container-xxl pb-5\" id=\"contact\">
    <div class=\"container py-5\">
        <div class=\"row g-5 mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"col-lg-6\">
                <h1 class=\"display-5 mb-0\">Let's Work Together</h1>
            </div>
            <div class=\"col-lg-6 text-lg-end\">
                <a class=\"btn btn-primary py-3 px-5\" href=\"\">Say Hello</a>
            </div>
        </div>
        <div class=\"row g-5\">
            <div class=\"col-lg-5 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <p class=\"mb-2\">My office:</p>
                <h3 class=\"fw-bold\">97 Eichendorffring, Giessen, Germany</h3>
                <hr class=\"w-100\">
                <p class=\"mb-2\">Call me:</p>
                <h3 class=\"fw-bold\">+49 1767452052</h3>
                <hr class=\"w-100\">
                <p class=\"mb-2\">Mail me:</p>
                <h3 class=\"fw-bold\">kevinpiam3@yahoo.com</h3>
                <hr class=\"w-100\">
                <p class=\"mb-2\">Follow me:</p>
                <div class=\"d-flex pt-2\">
                    <a class=\"btn btn-square btn-primary me-2\" href=\"https://instagram.com/kevin_piam?igshid=OGQ5ZDc2ODk2ZA==\"><i class=\"fab fa-instagram\"></i></a>
                    <a class=\"btn btn-square btn-primary me-2\" href=\"https://www.facebook.com/kevin.piam.5\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-square btn-primary me-2\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-square btn-primary me-2\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                    <a class=\"btn btn-square btn-primary me-2\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                </div>
            </div>
            <div class=\"col-lg-7 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <form>
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\">
                                <label for=\"name\">Your Name</label>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-floating\">
                                <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Your Email\">
                                <label for=\"email\">Your Email</label>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                <input type=\"text\" class=\"form-control\" id=\"subject\" placeholder=\"Subject\">
                                <label for=\"subject\">Subject</label>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-floating\">
                                <textarea class=\"form-control\" placeholder=\"Leave a message here\" id=\"message\" style=\"height: 100px\"></textarea>
                                <label for=\"message\">Message</label>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <button class=\"btn btn-primary py-3 px-5\" type=\"submit\">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->", "Components/contact.html.twig", "/var/www/html/templates/Components/contact.html.twig");
    }
}
