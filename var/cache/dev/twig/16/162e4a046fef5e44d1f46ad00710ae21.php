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

/* styles/bootstrap/scss/mixins/_border-radius.scss */
class __TwigTemplate_ae5389239b433fe21d83390c85f89245 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "styles/bootstrap/scss/mixins/_border-radius.scss"));

        // line 1
        echo "// stylelint-disable property-disallowed-list
// Single side border-radius

// Helper function to replace negative values with 0
@function valid-radius(\$radius) {
  \$return: ();
  @each \$value in \$radius {
    @if type-of(\$value) == number {
      \$return: append(\$return, max(\$value, 0));
    } @else {
      \$return: append(\$return, \$value);
    }
  }
  @return \$return;
}

// scss-docs-start border-radius-mixins
@mixin border-radius(\$radius: \$border-radius, \$fallback-border-radius: false) {
  @if \$enable-rounded {
    border-radius: valid-radius(\$radius);
  }
  @else if \$fallback-border-radius != false {
    border-radius: \$fallback-border-radius;
  }
}

@mixin border-top-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-left-radius: valid-radius(\$radius);
    border-top-right-radius: valid-radius(\$radius);
  }
}

@mixin border-end-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-right-radius: valid-radius(\$radius);
    border-bottom-right-radius: valid-radius(\$radius);
  }
}

@mixin border-bottom-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-bottom-right-radius: valid-radius(\$radius);
    border-bottom-left-radius: valid-radius(\$radius);
  }
}

@mixin border-start-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-left-radius: valid-radius(\$radius);
    border-bottom-left-radius: valid-radius(\$radius);
  }
}

@mixin border-top-start-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-left-radius: valid-radius(\$radius);
  }
}

@mixin border-top-end-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-right-radius: valid-radius(\$radius);
  }
}

@mixin border-bottom-end-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-bottom-right-radius: valid-radius(\$radius);
  }
}

@mixin border-bottom-start-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-bottom-left-radius: valid-radius(\$radius);
  }
}
// scss-docs-end border-radius-mixins
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "styles/bootstrap/scss/mixins/_border-radius.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// stylelint-disable property-disallowed-list
// Single side border-radius

// Helper function to replace negative values with 0
@function valid-radius(\$radius) {
  \$return: ();
  @each \$value in \$radius {
    @if type-of(\$value) == number {
      \$return: append(\$return, max(\$value, 0));
    } @else {
      \$return: append(\$return, \$value);
    }
  }
  @return \$return;
}

// scss-docs-start border-radius-mixins
@mixin border-radius(\$radius: \$border-radius, \$fallback-border-radius: false) {
  @if \$enable-rounded {
    border-radius: valid-radius(\$radius);
  }
  @else if \$fallback-border-radius != false {
    border-radius: \$fallback-border-radius;
  }
}

@mixin border-top-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-left-radius: valid-radius(\$radius);
    border-top-right-radius: valid-radius(\$radius);
  }
}

@mixin border-end-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-right-radius: valid-radius(\$radius);
    border-bottom-right-radius: valid-radius(\$radius);
  }
}

@mixin border-bottom-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-bottom-right-radius: valid-radius(\$radius);
    border-bottom-left-radius: valid-radius(\$radius);
  }
}

@mixin border-start-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-left-radius: valid-radius(\$radius);
    border-bottom-left-radius: valid-radius(\$radius);
  }
}

@mixin border-top-start-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-left-radius: valid-radius(\$radius);
  }
}

@mixin border-top-end-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-top-right-radius: valid-radius(\$radius);
  }
}

@mixin border-bottom-end-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-bottom-right-radius: valid-radius(\$radius);
  }
}

@mixin border-bottom-start-radius(\$radius: \$border-radius) {
  @if \$enable-rounded {
    border-bottom-left-radius: valid-radius(\$radius);
  }
}
// scss-docs-end border-radius-mixins
", "styles/bootstrap/scss/mixins/_border-radius.scss", "/opt/project/templates/styles/bootstrap/scss/mixins/_border-radius.scss");
    }
}
