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

/* scss/bootstrap/scss/_type.scss */
class __TwigTemplate_8a99551600bff1dec18ef98ae0ee71f3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_type.scss"));

        // line 1
        echo "//
// Headings
//
.h1 {
  @extend h1;
}

.h2 {
  @extend h2;
}

.h3 {
  @extend h3;
}

.h4 {
  @extend h4;
}

.h5 {
  @extend h5;
}

.h6 {
  @extend h6;
}


.lead {
  @include font-size(\$lead-font-size);
  font-weight: \$lead-font-weight;
}

// Type display classes
@each \$display, \$font-size in \$display-font-sizes {
  .display-#{\$display} {
    @include font-size(\$font-size);
    font-weight: \$display-font-weight;
    line-height: \$display-line-height;
  }
}

//
// Emphasis
//
.small {
  @extend small;
}

.mark {
  @extend mark;
}

//
// Lists
//

.list-unstyled {
  @include list-unstyled();
}

// Inline turns list items into inline-block
.list-inline {
  @include list-unstyled();
}
.list-inline-item {
  display: inline-block;

  &:not(:last-child) {
    margin-right: \$list-inline-padding;
  }
}


//
// Misc
//

// Builds on `abbr`
.initialism {
  @include font-size(\$initialism-font-size);
  text-transform: uppercase;
}

// Blockquotes
.blockquote {
  margin-bottom: \$blockquote-margin-y;
  @include font-size(\$blockquote-font-size);

  > :last-child {
    margin-bottom: 0;
  }
}

.blockquote-footer {
  margin-top: -\$blockquote-margin-y;
  margin-bottom: \$blockquote-margin-y;
  @include font-size(\$blockquote-footer-font-size);
  color: \$blockquote-footer-color;

  &::before {
    content: \"\\2014\\00A0\"; // em dash, nbsp
  }
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_type.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("//
// Headings
//
.h1 {
  @extend h1;
}

.h2 {
  @extend h2;
}

.h3 {
  @extend h3;
}

.h4 {
  @extend h4;
}

.h5 {
  @extend h5;
}

.h6 {
  @extend h6;
}


.lead {
  @include font-size(\$lead-font-size);
  font-weight: \$lead-font-weight;
}

// Type display classes
@each \$display, \$font-size in \$display-font-sizes {
  .display-#{\$display} {
    @include font-size(\$font-size);
    font-weight: \$display-font-weight;
    line-height: \$display-line-height;
  }
}

//
// Emphasis
//
.small {
  @extend small;
}

.mark {
  @extend mark;
}

//
// Lists
//

.list-unstyled {
  @include list-unstyled();
}

// Inline turns list items into inline-block
.list-inline {
  @include list-unstyled();
}
.list-inline-item {
  display: inline-block;

  &:not(:last-child) {
    margin-right: \$list-inline-padding;
  }
}


//
// Misc
//

// Builds on `abbr`
.initialism {
  @include font-size(\$initialism-font-size);
  text-transform: uppercase;
}

// Blockquotes
.blockquote {
  margin-bottom: \$blockquote-margin-y;
  @include font-size(\$blockquote-font-size);

  > :last-child {
    margin-bottom: 0;
  }
}

.blockquote-footer {
  margin-top: -\$blockquote-margin-y;
  margin-bottom: \$blockquote-margin-y;
  @include font-size(\$blockquote-footer-font-size);
  color: \$blockquote-footer-color;

  &::before {
    content: \"\\2014\\00A0\"; // em dash, nbsp
  }
}
", "scss/bootstrap/scss/_type.scss", "/opt/project/templates/scss/bootstrap/scss/_type.scss");
    }
}
