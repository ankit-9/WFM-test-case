<?php

/* themes/cog/templates/block/block--system-menu-block.html.twig */
class __TwigTemplate_7e9a97baffb5c71039a9954d1c22b1d3c916d74754c4528a560ad08df0c8a8e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 35, "if" => 47, "block" => 55);
        $filters = array("clean_class" => 40, "clean_id" => 43, "without" => 45);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 'clean_id', 'without'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 35
        $context["classes"] = array(0 => "block", 1 => "block-menu", 2 => "navigation", 3 => "block-system-menublock", 4 => ("menu--" . \Drupal\Component\Utility\Html::getClass(        // line 40
(isset($context["derivative_plugin_id"]) ? $context["derivative_plugin_id"] : null))));
        // line 42
        echo "
";
        // line 43
        $context["heading_id"] = ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 44
        echo "
<nav role=\"navigation\" aria-labelledby=\"";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "role", "aria-labelledby"), "html", null, true));
        echo ">
    ";
        // line 47
        echo "    ";
        if ( !$this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label_display", array())) {
            // line 48
            echo "        ";
            $context["title_attributes"] = $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "visually-hidden"), "method");
            // line 49
            echo "    ";
        }
        // line 50
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
    <h2";
        // line 51
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "setAttribute", array(0 => "id", 1 => (isset($context["heading_id"]) ? $context["heading_id"] : null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()), "html", null, true));
        echo "</h2>
    ";
        // line 52
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

    ";
        // line 55
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "</nav>
";
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        // line 56
        echo "        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/cog/templates/block/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 56,  94 => 55,  89 => 58,  86 => 55,  81 => 52,  75 => 51,  70 => 50,  67 => 49,  64 => 48,  61 => 47,  55 => 45,  52 => 44,  50 => 43,  47 => 42,  45 => 40,  44 => 35,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for a menu block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - module: The module that provided this block plugin.
 *   - cache: The cache settings.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: HTML attributes for the containing element.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: HTML attributes for the title element.
 * - content_attributes: HTML attributes for the content element.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * Headings should be used on navigation menus that consistently appear on
 * multiple pages. When this menu block's label is configured to not be
 * displayed, it is automatically made invisible using the 'visually-hidden' CSS
 * class, which still keeps it visible for screen-readers and assistive
 * technology. Headings allow screen-reader and keyboard only users to navigate
 * to or skip the links.
 * See http://juicystudio.com/article/screen-readers-display-none.php and
 * http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.
 */
#}
{% set classes = [
'block',
'block-menu',
'navigation',
'block-system-menublock',
'menu--' ~ derivative_plugin_id|clean_class,
] %}

{% set heading_id = attributes.id ~ '-menu'|clean_id %}

<nav role=\"navigation\" aria-labelledby=\"{{ heading_id }}\"{{ attributes.addClass(classes)|without('role', 'aria-labelledby') }}>
    {# Label. If not displayed, we still provide it for screen readers. #}
    {% if not configuration.label_display %}
        {% set title_attributes = title_attributes.addClass('visually-hidden') %}
    {% endif %}
    {{ title_prefix }}
    <h2{{ title_attributes.setAttribute('id', heading_id) }}>{{ configuration.label }}</h2>
    {{ title_suffix }}

    {# Menu. #}
    {% block content %}
        {{ content }}
    {% endblock %}
</nav>
";
    }
}