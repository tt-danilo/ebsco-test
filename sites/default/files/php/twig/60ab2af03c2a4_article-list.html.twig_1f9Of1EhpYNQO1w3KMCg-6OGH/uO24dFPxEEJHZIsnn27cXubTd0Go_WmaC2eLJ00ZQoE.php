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

/* modules/custom/books/templates/article-list.html.twig */
class __TwigTemplate_98fb4f3e27671b1d900b114d24afa6daf33f9e9fbae8938d3a5ee635a15e53eb extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("books/books"), "html", null, true);
        echo "
";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("books/loadBooks"), "html", null, true);
        echo "

<div class=\"container\">
  <div class=\"filter-container\">
    <div class=\"search-container\">
      <input type=\"text\" class=\"search-input\" aria-label=\"search input\">
      <button id=\"search-button\" class=\"search-button\" type=\"button\"> Search </button>
    </div>


    <select id=\"view-select\" class=\"select-input\" onchange={onChangeView()} aria-label=\"change view\">
      <option aria-label=\"card view\" value=\"card\">Card</option>
      <option aria-label=\"list view\" value=\"list\">List</option>
    </select>

  </div>

  <div id='item-view' class=\"card-view\">
  </div>
</div>

<script>
  function onChangeView() {
    var ChangeViewInput = document.getElementById(\"view-select\");
    var ItemContainer = document.getElementById(\"item-view\");
    console.log(ChangeViewInput.value);
    ItemContainer.className = `\${ChangeViewInput.value}-view`;
  }
</script>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/books/templates/article-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/books/templates/article-list.html.twig", "/Users/jay/Projects/ebsco-test/modules/custom/books/templates/article-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
