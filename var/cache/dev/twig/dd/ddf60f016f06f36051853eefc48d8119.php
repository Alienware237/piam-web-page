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

/* scss/bootstrap/scss/_images.scss */
class __TwigTemplate_940f304989597f5502ca94b32579d1f0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_images.scss"));

        // line 1
        echo "// Responsive images (ensure images don't scale beyond their parents)
//
// This is purposefully opt-in via an explicit class rather than being the default for all `<img>`s.
// We previously tried the \"images are responsive by default\" approach in Bootstrap v2,
// and abandoned it in Bootstrap v3 because it breaks lots of third-party widgets (including Google Maps)
// which weren't expecting the images within themselves to be involuntarily resized.
// See also https://github.com/twbs/bootstrap/issues/18178
.img-fluid {
  @include img-fluid();
}


// Image thumbnails
.img-thumbnail {
  padding: \$thumbnail-padding;
  background-color: \$thumbnail-bg;
  border: \$thumbnail-border-width solid \$thumbnail-border-color;
  @include border-radius(\$thumbnail-border-radius);
  @include box-shadow(\$thumbnail-box-shadow);

  // Keep them at most 100% wide
  @include img-fluid();
}

//
// Figures
//

.figure {
  // Ensures the caption's text aligns with the image.
  display: inline-block;
}

.figure-img {
  margin-bottom: \$spacer / 2;
  line-height: 1;
}

.figure-caption {
  @include font-size(\$figure-caption-font-size);
  color: \$figure-caption-color;
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_images.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Responsive images (ensure images don't scale beyond their parents)
//
// This is purposefully opt-in via an explicit class rather than being the default for all `<img>`s.
// We previously tried the \"images are responsive by default\" approach in Bootstrap v2,
// and abandoned it in Bootstrap v3 because it breaks lots of third-party widgets (including Google Maps)
// which weren't expecting the images within themselves to be involuntarily resized.
// See also https://github.com/twbs/bootstrap/issues/18178
.img-fluid {
  @include img-fluid();
}


// Image thumbnails
.img-thumbnail {
  padding: \$thumbnail-padding;
  background-color: \$thumbnail-bg;
  border: \$thumbnail-border-width solid \$thumbnail-border-color;
  @include border-radius(\$thumbnail-border-radius);
  @include box-shadow(\$thumbnail-box-shadow);

  // Keep them at most 100% wide
  @include img-fluid();
}

//
// Figures
//

.figure {
  // Ensures the caption's text aligns with the image.
  display: inline-block;
}

.figure-img {
  margin-bottom: \$spacer / 2;
  line-height: 1;
}

.figure-caption {
  @include font-size(\$figure-caption-font-size);
  color: \$figure-caption-color;
}
", "scss/bootstrap/scss/_images.scss", "/opt/project/templates/scss/bootstrap/scss/_images.scss");
    }
}
