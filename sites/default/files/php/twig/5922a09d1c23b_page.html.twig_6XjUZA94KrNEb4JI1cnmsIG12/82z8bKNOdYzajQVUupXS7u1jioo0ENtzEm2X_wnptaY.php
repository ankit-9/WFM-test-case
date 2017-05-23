<?php

/* themes/cog/STARTERKIT/templates/layout/page.html.twig */
class __TwigTemplate_c49ef1746d09fbe2a494f23f6bb16dab1ec2d071742989bf352e93e337a827a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 7);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 1
        echo "<div ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "setAttribute", array(0 => "id", 1 => "pg__c"), "method"), "html", null, true));
        echo ">

    <!-- ______________________ BRANDING _______________________ -->

    <header id=\"branding\">
        <div class=\"cog--mq mq-branding\">
            ";
        // line 7
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array())) {
            // line 8
            echo "                <div id=\"branding-region\">
                    ";
            // line 9
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array()), "html", null, true));
            echo "
                </div>
            ";
        }
        // line 12
        echo "        </div>
    </header>
    <!-- /branding -->


    <!-- ______________________ HEADER _______________________ -->

    <header id=\"header\">
        <div class=\"cog--mq mq-header\">
            ";
        // line 21
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 22
            echo "                <div id=\"header-region\">
                    ";
            // line 23
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
                </div>
            ";
        }
        // line 26
        echo "        </div>
    </header>
    <!-- /header -->

    <!-- ______________________ Pre content _______________________ -->
    ";
        // line 31
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_content", array())) {
            // line 32
            echo "        <div class=\"clearfix pre-content\" id=\"pre-content\">
            <div class=\"cog--mq mq-precontent\">
                ";
            // line 34
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_content", array()), "html", null, true));
            echo "
            </div>
        </div>
    ";
        }
        // line 38
        echo "
    <!-- ______________________ MAIN _______________________ -->

    <div class=\"clearfix\" id=\"main\">
        <div class=\"cog--mq mq-main\">

            ";
        // line 44
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 45
            echo "                <aside class=\"sidebar-first sidebars\" id=\"sidebar-first\">
                    ";
            // line 46
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
                </aside>
            ";
        }
        // line 49
        echo "            <!-- /sidebar-first -->

            <section id=\"content\">

                ";
        // line 53
        if ((((((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null) || (isset($context["title"]) ? $context["title"] : null)) || (isset($context["messages"]) ? $context["messages"] : null)) || (isset($context["tabs"]) ? $context["tabs"] : null)) || (isset($context["action_links"]) ? $context["action_links"] : null))) {
            // line 54
            echo "                    <div id=\"content-header\">

                        ";
            // line 56
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
            echo "

                        ";
            // line 58
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
                // line 59
                echo "                            <div id=\"highlighted\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
                echo "</div>
                        ";
            }
            // line 61
            echo "
                        ";
            // line 62
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "

                        ";
            // line 64
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 65
                echo "                            <h1 class=\"title\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
                echo "</h1>
                        ";
            }
            // line 67
            echo "
                        ";
            // line 68
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
                        ";
            // line 69
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
            echo "
                        ";
            // line 70
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "

                        ";
            // line 72
            if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
                // line 73
                echo "                            <div class=\"tabs\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
                echo "</div>
                        ";
            }
            // line 75
            echo "
                        ";
            // line 76
            if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
                // line 77
                echo "                            <ul class=\"action-links\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
                echo "</ul>
                        ";
            }
            // line 79
            echo "
                    </div>
                    <!-- /#content-header -->
                ";
        }
        // line 83
        echo "
                <div id=\"content-area\">
                    ";
        // line 85
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
                </div>

                ";
        // line 88
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
        echo "

            </section>
            <!-- /content-inner /content -->

            ";
        // line 93
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 94
            echo "                <aside class=\"sidebar-second sidebars\" id=\"sidebar-second\">
                    ";
            // line 95
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
                </aside>
            ";
        }
        // line 98
        echo "            <!-- /sidebar-first -->

        </div>
        <!-- /cog--mq -->
    </div>
    <!-- /main -->

    <!-- ______________________ Post content _______________________ -->

    ";
        // line 107
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "post_content", array())) {
            // line 108
            echo "        <div class=\"clearfix post-content\" id=\"post-content\">
            <div class=\"cog--mq mq-postcontent\">
                ";
            // line 110
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "post_content", array()), "html", null, true));
            echo "
            </div>
        </div>
    ";
        }
        // line 114
        echo "
    <!-- ______________________ FOOTER _______________________ -->

    ";
        // line 117
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 118
            echo "        <footer id=\"footer\">
            <div class=\"cog--mq mq-footer\">
                ";
            // line 120
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
            </div>
        </footer>
        <!-- /footer -->
    ";
        }
        // line 125
        echo "
</div>
<!-- /page -->
";
    }

    public function getTemplateName()
    {
        return "themes/cog/STARTERKIT/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 125,  271 => 120,  267 => 118,  265 => 117,  260 => 114,  253 => 110,  249 => 108,  247 => 107,  236 => 98,  230 => 95,  227 => 94,  225 => 93,  217 => 88,  211 => 85,  207 => 83,  201 => 79,  195 => 77,  193 => 76,  190 => 75,  184 => 73,  182 => 72,  177 => 70,  173 => 69,  169 => 68,  166 => 67,  160 => 65,  158 => 64,  153 => 62,  150 => 61,  144 => 59,  142 => 58,  137 => 56,  133 => 54,  131 => 53,  125 => 49,  119 => 46,  116 => 45,  114 => 44,  106 => 38,  99 => 34,  95 => 32,  93 => 31,  86 => 26,  80 => 23,  77 => 22,  75 => 21,  64 => 12,  58 => 9,  55 => 8,  53 => 7,  43 => 1,);
    }

    public function getSource()
    {
        return "<div {{ attributes.setAttribute('id', 'pg__c') }}>

    <!-- ______________________ BRANDING _______________________ -->

    <header id=\"branding\">
        <div class=\"cog--mq mq-branding\">
            {% if page.branding %}
                <div id=\"branding-region\">
                    {{ page.branding }}
                </div>
            {% endif %}
        </div>
    </header>
    <!-- /branding -->


    <!-- ______________________ HEADER _______________________ -->

    <header id=\"header\">
        <div class=\"cog--mq mq-header\">
            {% if page.header %}
                <div id=\"header-region\">
                    {{ page.header }}
                </div>
            {% endif %}
        </div>
    </header>
    <!-- /header -->

    <!-- ______________________ Pre content _______________________ -->
    {% if page.pre_content %}
        <div class=\"clearfix pre-content\" id=\"pre-content\">
            <div class=\"cog--mq mq-precontent\">
                {{ page.pre_content }}
            </div>
        </div>
    {% endif %}

    <!-- ______________________ MAIN _______________________ -->

    <div class=\"clearfix\" id=\"main\">
        <div class=\"cog--mq mq-main\">

            {% if page.sidebar_first %}
                <aside class=\"sidebar-first sidebars\" id=\"sidebar-first\">
                    {{ page.sidebar_first }}
                </aside>
            {% endif %}
            <!-- /sidebar-first -->

            <section id=\"content\">

                {% if breadcrumb or title or messages or tabs or action_links %}
                    <div id=\"content-header\">

                        {{ breadcrumb }}

                        {% if page.highlighted %}
                            <div id=\"highlighted\">{{ page.highlighted }}</div>
                        {% endif %}

                        {{ title_prefix }}

                        {% if title %}
                            <h1 class=\"title\">{{ title }}</h1>
                        {% endif %}

                        {{ title_suffix }}
                        {{ messages }}
                        {{ page.help }}

                        {% if tabs %}
                            <div class=\"tabs\">{{ tabs }}</div>
                        {% endif %}

                        {% if action_links %}
                            <ul class=\"action-links\">{{ action_links }}</ul>
                        {% endif %}

                    </div>
                    <!-- /#content-header -->
                {% endif %}

                <div id=\"content-area\">
                    {{ page.content }}
                </div>

                {{ feed_icons }}

            </section>
            <!-- /content-inner /content -->

            {% if page.sidebar_second %}
                <aside class=\"sidebar-second sidebars\" id=\"sidebar-second\">
                    {{ page.sidebar_second }}
                </aside>
            {% endif %}
            <!-- /sidebar-first -->

        </div>
        <!-- /cog--mq -->
    </div>
    <!-- /main -->

    <!-- ______________________ Post content _______________________ -->

    {% if page.post_content %}
        <div class=\"clearfix post-content\" id=\"post-content\">
            <div class=\"cog--mq mq-postcontent\">
                {{ page.post_content }}
            </div>
        </div>
    {% endif %}

    <!-- ______________________ FOOTER _______________________ -->

    {% if page.footer %}
        <footer id=\"footer\">
            <div class=\"cog--mq mq-footer\">
                {{ page.footer }}
            </div>
        </footer>
        <!-- /footer -->
    {% endif %}

</div>
<!-- /page -->
";
    }
}
