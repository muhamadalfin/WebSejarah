<?php

/* layout-private.html */
class __TwigTemplate_c9141d17b46455dd2185ef348b74c3dd09cbd34f19d541653c5de5b049543300 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>";
        // line 5
        $this->env->loadTemplate("layout-header.html")->display($context);
        // line 6
        $this->displayBlock('css', $context, $blocks);
        // line 7
        echo "    </head>

    <body>
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".navbar-inverse-collapse\">
                        <i class=\"icon-reorder shaded\"></i>
                    </a>
                    <a class=\"brand\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, get_logo_config(), "html", null, true);
        echo "\"> <span class=\"visible-phone brand-txt\">e-Learning</span><span class=\"visible-desktop visible-tablet brand-txt\">";
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
        echo "</span>
                    </a>
                    <div class=\"nav-collapse collapse navbar-inverse-collapse\">
                        <form class=\"navbar-search pull-left input-append\" method=\"get\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, site_url("welcome/search"), "html", null, true);
        echo "\">
                            <input type=\"text\" class=\"span3\" name=\"q\">
                            <button class=\"btn\" type=\"submit\">
                                <i class=\"icon-search\"></i>
                            </button>
                        </form>
                        <ul class=\"nav pull-right\">";
        // line 27
        $this->env->loadTemplate("top-mobile-menu.html")->display($context);
        // line 29
        if (is_admin()) {
            // line 30
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, site_url("welcome/get_plugin"), "html", null, true);
            echo "\">PLUGINS</a></li>";
        }
        // line 32
        echo "                            <li class=\"nav-user dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 33
        echo twig_escape_filter($this->env, nama_panggilan(get_sess_data("user", "nama")), "html", null, true);
        echo "

                                <span class=\"pull-right\">
                                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, get_url_image_session(get_sess_data("user", "foto"), "medium", get_sess_data("user", "jenis_kelamin")), "html", null, true);
        echo "\" class=\"nav-avatar img-polaroid\" />
                                <b class=\"caret\"></b></a>
                                </span>
                                <ul class=\"dropdown-menu\">";
        // line 40
        if (is_admin()) {
            // line 41
            echo "                                    <li>";
            echo anchor(((("pengajar/detail/" . get_sess_data("user", "status_id")) . "/") . get_sess_data("user", "id")), "Detail Profil", array("title" => "Detail Profil"));
            echo "</li>";
        }
        // line 44
        if (is_pengajar()) {
            // line 45
            echo "                                    <li>";
            echo anchor("login/pp", "Profil & Akun Login");
            echo "</li>";
        }
        // line 48
        if (is_siswa()) {
            // line 49
            echo "                                    <li>";
            echo anchor("login/pp", "Profil & Akun Login");
            echo "</li>";
        }
        // line 51
        echo "
                                    <li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, site_url(("login/login_log/" . get_sess_data("login", "id"))), "html", null, true);
        echo "\">Login log</a></li>
                                    <li><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, site_url("login/logout"), "html", null, true);
        echo "\">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>

        <!-- /navbar -->
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span3 visible-desktop\">
                        <div class=\"sidebar\">";
        // line 70
        $this->env->loadTemplate("sidebar-menu.html")->display($context);
        // line 71
        echo "                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class=\"span9 mobile-12\">
                        <div class=\"content\">";
        // line 77
        if ((pass_siswa_equal_nis() == true)) {
            // line 78
            echo get_alert("warning", ("Dimohon untuk segera mengganti password anda untuk alasan keamanan. " . anchor("login/pp?show=edit-password", "Ganti Password")));
        }
        // line 81
        $this->displayBlock('content', $context, $blocks);
        // line 82
        echo "                        </div>
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class=\"footer\">
            <div class=\"container\">
                <center>
                    <b class=\"copyright\">";
        // line 93
        echo (isset($context["copyright"]) ? $context["copyright"] : null);
        echo " </b> All rights reserved.<br>";
        // line 94
        echo (isset($context["version"]) ? $context["version"] : null);
        echo " | Page loaded in";
        echo twig_escape_filter($this->env, (isset($context["elapsed_time"]) ? $context["elapsed_time"] : null), "html", null, true);
        echo " seconds.
                </center>
            </div>
        </div>";
        // line 99
        $this->env->loadTemplate("layout-footer.html")->display($context);
        // line 100
        $this->displayBlock('js', $context, $blocks);
        // line 101
        echo "
    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
    }

    // line 81
    public function block_content($context, array $blocks = array())
    {
    }

    // line 100
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-private.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 81,  194 => 6,  181 => 101,  179 => 100,  177 => 99,  169 => 94,  166 => 93,  153 => 82,  151 => 81,  148 => 78,  146 => 77,  139 => 71,  137 => 70,  118 => 53,  111 => 51,  104 => 48,  99 => 45,  97 => 44,  92 => 41,  90 => 40,  78 => 33,  76 => 32,  71 => 30,  69 => 29,  67 => 27,  46 => 16,  35 => 7,  33 => 6,  23 => 1,  359 => 201,  348 => 191,  340 => 188,  337 => 187,  333 => 186,  324 => 178,  313 => 174,  309 => 172,  305 => 171,  298 => 165,  287 => 161,  283 => 159,  279 => 158,  272 => 152,  265 => 147,  260 => 143,  258 => 142,  256 => 141,  254 => 140,  242 => 128,  234 => 125,  231 => 124,  227 => 123,  220 => 117,  213 => 112,  208 => 108,  206 => 107,  204 => 100,  202 => 105,  195 => 99,  188 => 4,  184 => 94,  171 => 83,  163 => 80,  160 => 79,  156 => 78,  144 => 68,  140 => 67,  134 => 64,  130 => 63,  124 => 60,  120 => 59,  114 => 52,  110 => 55,  106 => 49,  95 => 44,  84 => 36,  73 => 28,  66 => 23,  64 => 22,  62 => 21,  58 => 20,  54 => 15,  52 => 14,  50 => 17,  45 => 11,  39 => 10,  31 => 5,  28 => 4,);
    }
}
