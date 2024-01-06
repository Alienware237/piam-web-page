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

/* index/index.html.twig */
class __TwigTemplate_bcf2f7dc78f131c381c110bd4071a9b2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif;}
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
        ";
        // line 7
        echo twig_source($this->env, "./styles/test.scss");
        echo "
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello IndexController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <body data-bs-spy=\"scroll\" data-bs-target=\".navbar\" data-bs-offset=\"51\">
        <!-- Spinner Start -->
        <!-- Spinner End -->


        <!-- Navbar Start -->
        ";
        // line 23
        $this->loadTemplate("Components/navbar1.html.twig", "index/index.html.twig", 23)->display($context);
        // line 24
        echo "        <!-- Navbar End -->

        ";
        // line 26
        $this->loadTemplate("Components/header1.html.twig", "index/index.html.twig", 26)->display($context);
        // line 27
        echo "
        <!-- Video Modal Start -->
        <div class=\"modal modal-video fade\" id=\"videoModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content rounded-0\">
                    <div class=\"modal-header\">
                        <h3 class=\"modal-title\" id=\"exampleModalLabel\">Youtube Video</h3>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <!-- 16:9 aspect ratio -->
                        <div class=\"ratio ratio-16x9\">
                            <iframe class=\"embed-responsive-item\" src=\"\" id=\"video\" allowfullscreen allowscriptaccess=\"always\"
                                    allow=\"autoplay\"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal End -->



        <div class=\"modal\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">Modal title</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 70
        $this->loadTemplate("Components/skills.html.twig", "index/index.html.twig", 70)->display($context);
        // line 71
        echo "        ";
        $this->loadTemplate("Components/services.html.twig", "index/index.html.twig", 71)->display($context);
        // line 72
        echo "        ";
        $this->loadTemplate("Components/projects.html.twig", "index/index.html.twig", 72)->display($context);
        // line 73
        echo "        ";
        $this->loadTemplate("Components/team.html.twig", "index/index.html.twig", 73)->display($context);
        // line 74
        echo "        ";
        $this->loadTemplate("Components/testimonial.html.twig", "index/index.html.twig", 74)->display($context);
        // line 75
        echo "        ";
        $this->loadTemplate("Components/contact.html.twig", "index/index.html.twig", 75)->display($context);
        // line 76
        echo "
        <!-- Map Start -->
        <div class=\"container-xxl pt-5 px-0 wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"container-xxl pt-5 px-0\">
                <div class=\"bg-dark\">
                    <iframe
                            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd\"
                            frameborder=\"0\" style=\"width: 100%; height: 450px; border:0;\" allowfullscreen=\"\" aria-hidden=\"false\"
                            tabindex=\"0\"></iframe>
                </div>
            </div>
        </div>
        <!-- Map End -->


        <!-- Copyright Start -->
        <div class=\"container-fluid bg-dark text-white py-4\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                        &copy; <a class=\"border-bottom text-secondary\" href=\"#\">Kevin Piam</a>, All Right Reserved.
                    </div>
                    <div class=\"col-md-6 text-center text-md-end\">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                        Designed By <a class=\"border-bottom text-secondary\" href=\"https://htmlcodex.com\">Kevin Piam</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Copyright End -->
    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 76,  184 => 75,  181 => 74,  178 => 73,  175 => 72,  172 => 71,  170 => 70,  125 => 27,  123 => 26,  119 => 24,  117 => 23,  109 => 17,  102 => 16,  89 => 13,  77 => 10,  67 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif;}
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
        {{ source('./styles/test.scss') }}
    </style>
{% endblock %}
{% block javascripts %}
{% endblock %}

{% block title %}Hello IndexController!{% endblock %}


{% block body %}
    <body data-bs-spy=\"scroll\" data-bs-target=\".navbar\" data-bs-offset=\"51\">
        <!-- Spinner Start -->
        <!-- Spinner End -->


        <!-- Navbar Start -->
        {% include 'Components/navbar1.html.twig' %}
        <!-- Navbar End -->

        {% include 'Components/header1.html.twig' %}

        <!-- Video Modal Start -->
        <div class=\"modal modal-video fade\" id=\"videoModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content rounded-0\">
                    <div class=\"modal-header\">
                        <h3 class=\"modal-title\" id=\"exampleModalLabel\">Youtube Video</h3>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <!-- 16:9 aspect ratio -->
                        <div class=\"ratio ratio-16x9\">
                            <iframe class=\"embed-responsive-item\" src=\"\" id=\"video\" allowfullscreen allowscriptaccess=\"always\"
                                    allow=\"autoplay\"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal End -->



        <div class=\"modal\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">Modal title</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>
            </div>
        </div>

        {% include 'Components/skills.html.twig' %}
        {% include 'Components/services.html.twig' %}
        {% include 'Components/projects.html.twig' %}
        {% include 'Components/team.html.twig' %}
        {% include 'Components/testimonial.html.twig' %}
        {% include 'Components/contact.html.twig' %}

        <!-- Map Start -->
        <div class=\"container-xxl pt-5 px-0 wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"container-xxl pt-5 px-0\">
                <div class=\"bg-dark\">
                    <iframe
                            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd\"
                            frameborder=\"0\" style=\"width: 100%; height: 450px; border:0;\" allowfullscreen=\"\" aria-hidden=\"false\"
                            tabindex=\"0\"></iframe>
                </div>
            </div>
        </div>
        <!-- Map End -->


        <!-- Copyright Start -->
        <div class=\"container-fluid bg-dark text-white py-4\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                        &copy; <a class=\"border-bottom text-secondary\" href=\"#\">Kevin Piam</a>, All Right Reserved.
                    </div>
                    <div class=\"col-md-6 text-center text-md-end\">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                        Designed By <a class=\"border-bottom text-secondary\" href=\"https://htmlcodex.com\">Kevin Piam</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Copyright End -->
    </body>
{% endblock %}
", "index/index.html.twig", "/var/www/html/templates/index/index.html.twig");
    }
}
