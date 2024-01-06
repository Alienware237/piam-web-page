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

/* styles/bootstrap/scss/helpers/_ratio.scss */
class __TwigTemplate_7b5933f82f24ce6410e5923397182483 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "styles/bootstrap/scss/helpers/_ratio.scss"));

        // line 1
        echo "// Credit: Nicolas Gallagher and SUIT CSS.

.ratio {
  position: relative;
  width: 100%;

  &::before {
    display: block;
    padding-top: var(--#{\$variable-prefix}aspect-ratio);
    content: \"\";
  }

  > * {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
}

@each \$key, \$ratio in \$aspect-ratios {
  .ratio-#{\$key} {
    --#{\$variable-prefix}aspect-ratio: #{\$ratio};
  }
}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "styles/bootstrap/scss/helpers/_ratio.scss";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// Credit: Nicolas Gallagher and SUIT CSS.

.ratio {
  position: relative;
  width: 100%;

  &::before {
    display: block;
    padding-top: var(--#{\$variable-prefix}aspect-ratio);
    content: \"\";
  }

  > * {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
}

@each \$key, \$ratio in \$aspect-ratios {
  .ratio-#{\$key} {
    --#{\$variable-prefix}aspect-ratio: #{\$ratio};
  }
}
", "styles/bootstrap/scss/helpers/_ratio.scss", "/opt/project/templates/styles/bootstrap/scss/helpers/_ratio.scss");
    }
}
