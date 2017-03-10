<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_2ed0925a7211e4f45b110abdfaa7131c4a7a5d7e6a28806065a0ea74871a985e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dda8e5d42fbdda89b7dba44fdfed987f056b9ef7eaa127e62d00cde2579fb778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda8e5d42fbdda89b7dba44fdfed987f056b9ef7eaa127e62d00cde2579fb778->enter($__internal_dda8e5d42fbdda89b7dba44fdfed987f056b9ef7eaa127e62d00cde2579fb778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dda8e5d42fbdda89b7dba44fdfed987f056b9ef7eaa127e62d00cde2579fb778->leave($__internal_dda8e5d42fbdda89b7dba44fdfed987f056b9ef7eaa127e62d00cde2579fb778_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9c485497fdb0198272145ab575815441f98404fab427d4db75d16c5b232ce46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c485497fdb0198272145ab575815441f98404fab427d4db75d16c5b232ce46->enter($__internal_f9c485497fdb0198272145ab575815441f98404fab427d4db75d16c5b232ce46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_f9c485497fdb0198272145ab575815441f98404fab427d4db75d16c5b232ce46->leave($__internal_f9c485497fdb0198272145ab575815441f98404fab427d4db75d16c5b232ce46_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_b83a728493512cd9002d79ad387e082b1013529dd98dbf110f9732fd74f91622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83a728493512cd9002d79ad387e082b1013529dd98dbf110f9732fd74f91622->enter($__internal_b83a728493512cd9002d79ad387e082b1013529dd98dbf110f9732fd74f91622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b83a728493512cd9002d79ad387e082b1013529dd98dbf110f9732fd74f91622->leave($__internal_b83a728493512cd9002d79ad387e082b1013529dd98dbf110f9732fd74f91622_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e542cfc6c6e40ffb7745261987bf81409ff709ed7fc24dffb28c92f7eb05e05b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e542cfc6c6e40ffb7745261987bf81409ff709ed7fc24dffb28c92f7eb05e05b->enter($__internal_e542cfc6c6e40ffb7745261987bf81409ff709ed7fc24dffb28c92f7eb05e05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_e542cfc6c6e40ffb7745261987bf81409ff709ed7fc24dffb28c92f7eb05e05b->leave($__internal_e542cfc6c6e40ffb7745261987bf81409ff709ed7fc24dffb28c92f7eb05e05b_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_382d1399be475d333d3b328fff690267f81fd9d6df952bdbd8a6fd091f60069c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382d1399be475d333d3b328fff690267f81fd9d6df952bdbd8a6fd091f60069c->enter($__internal_382d1399be475d333d3b328fff690267f81fd9d6df952bdbd8a6fd091f60069c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_382d1399be475d333d3b328fff690267f81fd9d6df952bdbd8a6fd091f60069c->leave($__internal_382d1399be475d333d3b328fff690267f81fd9d6df952bdbd8a6fd091f60069c_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_2660f40486222ffadf3a4418bbbafdfc682bf00562f66afb0d3fee68b9531f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2660f40486222ffadf3a4418bbbafdfc682bf00562f66afb0d3fee68b9531f1f->enter($__internal_2660f40486222ffadf3a4418bbbafdfc682bf00562f66afb0d3fee68b9531f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_2660f40486222ffadf3a4418bbbafdfc682bf00562f66afb0d3fee68b9531f1f->leave($__internal_2660f40486222ffadf3a4418bbbafdfc682bf00562f66afb0d3fee68b9531f1f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  122 => 34,  110 => 30,  103 => 27,  97 => 26,  87 => 23,  81 => 22,  70 => 18,  64 => 16,  61 => 15,  55 => 14,  40 => 12,  12 => 32,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}