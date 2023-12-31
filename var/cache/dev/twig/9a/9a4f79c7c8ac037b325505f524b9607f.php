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

/* scss/bootstrap/scss/_root.scss */
class __TwigTemplate_234fcb75811faf08b52ea447454d6b4a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_root.scss"));

        // line 1
        echo ":root {
  // Custom variable values only support SassScript inside `#{}`.
  @each \$color, \$value in \$colors {
    --#{\$variable-prefix}#{\$color}: #{\$value};
  }

  @each \$color, \$value in \$theme-colors {
    --#{\$variable-prefix}#{\$color}: #{\$value};
  }

  // Use `inspect` for lists so that quoted items keep the quotes.
  // See https://github.com/sass/sass/issues/2383#issuecomment-336349172
  --#{\$variable-prefix}font-sans-serif: #{inspect(\$font-family-sans-serif)};
  --#{\$variable-prefix}font-monospace: #{inspect(\$font-family-monospace)};
  --#{\$variable-prefix}gradient: #{\$gradient};
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_root.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(":root {
  // Custom variable values only support SassScript inside `#{}`.
  @each \$color, \$value in \$colors {
    --#{\$variable-prefix}#{\$color}: #{\$value};
  }

  @each \$color, \$value in \$theme-colors {
    --#{\$variable-prefix}#{\$color}: #{\$value};
  }

  // Use `inspect` for lists so that quoted items keep the quotes.
  // See https://github.com/sass/sass/issues/2383#issuecomment-336349172
  --#{\$variable-prefix}font-sans-serif: #{inspect(\$font-family-sans-serif)};
  --#{\$variable-prefix}font-monospace: #{inspect(\$font-family-monospace)};
  --#{\$variable-prefix}gradient: #{\$gradient};
}
", "scss/bootstrap/scss/_root.scss", "/opt/project/templates/scss/bootstrap/scss/_root.scss");
    }
}
