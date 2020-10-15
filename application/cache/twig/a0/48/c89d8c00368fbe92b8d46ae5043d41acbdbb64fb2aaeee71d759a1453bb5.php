<?php

/* register.html */
class __TwigTemplate_a048c89d8c00368fbe92b8d46ae5043d41acbdbb64fb2aaeee71d759a1453bb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-public.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-public.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Register -";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">
    <div class=\"module span8 offset2\">
            <div class=\"module-head\">
                <h3>Register E-learning</h3>
            </div>

            <div class=\"module-body\">";
        // line 15
        echo get_flashdata("register");
        // line 17
        if ((!twig_test_empty(get_pengaturan("info-registrasi", "value")))) {
            // line 18
            echo "                <div class=\"well well-small\" style=\"box-shadow: none;\">
                    <b>Informasi : </b><br>";
            // line 20
            echo get_pengaturan("info-registrasi", "value");
            echo "
                </div>";
        }
        // line 23
        echo "
                <ul class=\"nav nav-tabs\">";
        // line 25
        if ((get_pengaturan("registrasi-siswa", "value") == 1)) {
            // line 26
            echo "                    <li";
            echo ((((isset($context["sebagai"]) ? $context["sebagai"] : null) == "siswa")) ? ("class=\"active\"") : (""));
            echo "><a href=\"#register-siswa\" data-toggle=\"tab\">Sebagai siswa</a></li>";
        }
        // line 29
        if ((get_pengaturan("registrasi-pengajar", "value") == 1)) {
            // line 30
            echo "                    <li";
            echo ((((isset($context["sebagai"]) ? $context["sebagai"] : null) == "pengajar")) ? ("class=\"active\"") : (""));
            echo "><a href=\"#register-pengajar\" data-toggle=\"tab\">Sebagai pengajar</a></li>";
        }
        // line 32
        echo "                </ul>

                <div class=\"tab-content\">";
        // line 35
        if ((get_pengaturan("registrasi-siswa", "value") == 1)) {
            // line 36
            echo "                    <div class=\"tab-pane fade";
            echo ((((isset($context["sebagai"]) ? $context["sebagai"] : null) == "siswa")) ? ("active") : (""));
            echo " in\" id=\"register-siswa\">";
            // line 37
            echo form_open_multipart("login/register/siswa", array("class" => "form-horizontal row-fluid"));
            echo "
                            <div class=\"control-group\">
                                <label class=\"control-label\">NIS</label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"nis\" name=\"nis\" class=\"span4\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, set_value("nis"), "html", null, true);
            echo "\">
                                    <br>";
            // line 42
            echo form_error("nis");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Nama <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"nama\" class=\"span8\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, set_value("nama"), "html", null, true);
            echo "\">
                                    <br>";
            // line 49
            echo form_error("nama");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Jenis Kelamin <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <label class=\"radio inline\"><input type=\"radio\" name=\"jenis_kelamin\" value=\"Laki-laki\"";
            // line 55
            echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Laki-laki"), "html", null, true);
            echo "> Laki-laki</label>
                                    <label class=\"radio inline\"><input type=\"radio\" name=\"jenis_kelamin\" value=\"Perempuan\"";
            // line 56
            echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Perempuan"), "html", null, true);
            echo "> Perempuan</label>
                                    <br>";
            // line 57
            echo form_error("jenis_kelamin");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Tahun Masuk <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"tahun_masuk\" class=\"span2\" maxlength=\"4\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, set_value("tahun_masuk"), "html", null, true);
            echo "\">
                                    <br>";
            // line 64
            echo form_error("tahun_masuk");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Kelas <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <select class=\"span3\" name=\"kelas_id\">
                                        <option value=\"\">--pilih--</option>";
            // line 72
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 73
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
                echo "\"";
                echo twig_escape_filter($this->env, set_select("kelas_id", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id")), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                                    </select>
                                    <br>";
            // line 76
            echo form_error("kelas_id");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Tempat Lahir</label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"tempat_lahir\" class=\"span5\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, set_value("tempat_lahir"), "html", null, true);
            echo "\">
                                    <br>";
            // line 83
            echo form_error("tempat_lahir");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Tanggal Lahir</label>
                                <div class=\"controls\">
                                    <select class=\"span2\" style=\"width: 10%;\" name=\"tgl_lahir\">
                                        <option value=\"\">Tgl</option>";
            // line 91
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 92
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\"";
                echo twig_escape_filter($this->env, set_select("tgl_lahir", (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                                    </select>
                                    <select class=\"span2\" style=\"width: 17%;\" name=\"bln_lahir\">
                                        <option value=\"\">Bulan</option>";
            // line 97
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 98
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\"";
                echo twig_escape_filter($this->env, set_select("bln_lahir", (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, get_indo_bulan((isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                                    </select>
                                    <input type=\"text\" name=\"thn_lahir\" class=\"span2\" maxlength=\"4\" value=\"";
            // line 101
            echo twig_escape_filter($this->env, set_value("thn_lahir"), "html", null, true);
            echo "\" placeholder=\"Tahun\">
                                    <br>";
            // line 102
            echo form_error("thn_lahir");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Agama</label>
                                <div class=\"controls\">
                                    <select name=\"agama\" class=\"span2\">
                                        <option value=\"\">--pilih--</option>
                                        <option value=\"ISLAM\"";
            // line 110
            echo twig_escape_filter($this->env, set_select("agama", "ISLAM"), "html", null, true);
            echo ">ISLAM</option>
                                        <option value=\"KRISTEN\"";
            // line 111
            echo twig_escape_filter($this->env, set_select("agama", "KRISTEN"), "html", null, true);
            echo ">KRISTEN</option>
                                        <option value=\"KATOLIK\"";
            // line 112
            echo twig_escape_filter($this->env, set_select("agama", "KATOLIK"), "html", null, true);
            echo ">KATOLIK</option>
                                        <option value=\"HINDU\"";
            // line 113
            echo twig_escape_filter($this->env, set_select("agama", "HINDU"), "html", null, true);
            echo ">HINDU</option>
                                        <option value=\"BUDHA\"";
            // line 114
            echo twig_escape_filter($this->env, set_select("agama", "BUDHA"), "html", null, true);
            echo ">BUDHA</option>
                                    </select>
                                    <br>";
            // line 116
            echo form_error("agama");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Alamat</label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"alamat\" class=\"span8\" value=\"";
            // line 122
            echo twig_escape_filter($this->env, set_value("alamat"), "html", null, true);
            echo "\">
                                    <br>";
            // line 123
            echo form_error("alamat");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Username <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"username\" name=\"username\" class=\"span5\" value=\"";
            // line 129
            echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
            echo "\" placeholder=\"alamat email\">
                                    <br>";
            // line 130
            echo form_error("username");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Password <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"password\" name=\"password\" class=\"span5\" value=\"";
            // line 136
            echo twig_escape_filter($this->env, set_value("password"), "html", null, true);
            echo "\">
                                    <br>";
            // line 137
            echo form_error("password");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Ulangi Password <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"password\" name=\"password2\" class=\"span5\" value=\"";
            // line 143
            echo twig_escape_filter($this->env, set_value("password2"), "html", null, true);
            echo "\">
                                    <br>";
            // line 144
            echo form_error("password2");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"controls\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Register</button>
                                </div>
                            </div>";
            // line 152
            echo form_close();
            echo "
                    </div>";
        }
        // line 156
        if ((get_pengaturan("registrasi-pengajar", "value") == 1)) {
            // line 157
            echo "                    <div class=\"tab-pane fade";
            echo ((((isset($context["sebagai"]) ? $context["sebagai"] : null) == "pengajar")) ? ("active") : (""));
            echo " in\" id=\"register-pengajar\">";
            // line 158
            echo form_open_multipart("login/register/pengajar", array("class" => "form-horizontal row-fluid"));
            echo "
                            <div class=\"control-group\">
                                <label class=\"control-label\">NIP</label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"nip\" name=\"nip\" class=\"span4\" value=\"";
            // line 162
            echo twig_escape_filter($this->env, set_value("nip"), "html", null, true);
            echo "\">
                                    <br>";
            // line 163
            echo form_error("nip");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Nama <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"nama\" class=\"span8\" value=\"";
            // line 169
            echo twig_escape_filter($this->env, set_value("nama"), "html", null, true);
            echo "\">
                                    <br>";
            // line 170
            echo form_error("nama");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Jenis Kelamin <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <label class=\"radio inline\"><input type=\"radio\" name=\"jenis_kelamin\" value=\"Laki-laki\"";
            // line 176
            echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Laki-laki"), "html", null, true);
            echo "> Laki-laki</label>
                                    <label class=\"radio inline\"><input type=\"radio\" name=\"jenis_kelamin\" value=\"Perempuan\"";
            // line 177
            echo twig_escape_filter($this->env, set_radio("jenis_kelamin", "Perempuan"), "html", null, true);
            echo "> Perempuan</label>
                                    <br>";
            // line 178
            echo form_error("jenis_kelamin");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Tempat Lahir</label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"tempat_lahir\" class=\"span5\" value=\"";
            // line 184
            echo twig_escape_filter($this->env, set_value("tempat_lahir"), "html", null, true);
            echo "\">
                                    <br>";
            // line 185
            echo form_error("tempat_lahir");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Tanggal Lahir</label>
                                <div class=\"controls\">
                                    <select class=\"span2\" style=\"width: 10%;\" name=\"tgl_lahir\">
                                        <option value=\"\">Tgl</option>";
            // line 193
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 194
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\"";
                echo twig_escape_filter($this->env, set_select("tgl_lahir", (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "                                    </select>
                                    <select class=\"span2\" style=\"width: 17%;\" name=\"bln_lahir\">
                                        <option value=\"\">Bulan</option>";
            // line 199
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 200
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\"";
                echo twig_escape_filter($this->env, set_select("bln_lahir", (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, get_indo_bulan((isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "                                    </select>
                                    <input type=\"text\" name=\"thn_lahir\" class=\"span2\" maxlength=\"4\" value=\"";
            // line 203
            echo twig_escape_filter($this->env, set_value("thn_lahir"), "html", null, true);
            echo "\" placeholder=\"Tahun\">
                                    <br>";
            // line 204
            echo form_error("thn_lahir");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Alamat</label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"alamat\" class=\"span10\" value=\"";
            // line 210
            echo twig_escape_filter($this->env, set_value("alamat"), "html", null, true);
            echo "\">
                                    <br>";
            // line 211
            echo form_error("alamat");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Username <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"username\" name=\"username\" class=\"span5\" value=\"";
            // line 217
            echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
            echo "\" placeholder=\"alamat email\">
                                    <br>";
            // line 218
            echo form_error("username");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Password <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"password\" name=\"password\" class=\"span5\" value=\"";
            // line 224
            echo twig_escape_filter($this->env, set_value("password"), "html", null, true);
            echo "\">
                                    <br>";
            // line 225
            echo form_error("password");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\">Ulangi Password <span class=\"text-error\">*</span></label>
                                <div class=\"controls\">
                                    <input type=\"password\" name=\"password2\" class=\"span5\" value=\"";
            // line 231
            echo twig_escape_filter($this->env, set_value("password2"), "html", null, true);
            echo "\">
                                    <br>";
            // line 232
            echo form_error("password2");
            echo "
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"controls\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Register</button>
                                </div>
                            </div>";
            // line 240
            echo form_close();
            echo "
                    </div>";
        }
        // line 243
        echo "
                </div>
            </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 243,  510 => 240,  500 => 232,  496 => 231,  487 => 225,  483 => 224,  474 => 218,  470 => 217,  461 => 211,  457 => 210,  448 => 204,  444 => 203,  441 => 202,  429 => 200,  425 => 199,  421 => 196,  409 => 194,  405 => 193,  395 => 185,  391 => 184,  382 => 178,  378 => 177,  374 => 176,  365 => 170,  361 => 169,  352 => 163,  348 => 162,  341 => 158,  337 => 157,  335 => 156,  330 => 152,  320 => 144,  316 => 143,  307 => 137,  303 => 136,  294 => 130,  290 => 129,  281 => 123,  277 => 122,  268 => 116,  263 => 114,  259 => 113,  255 => 112,  251 => 111,  247 => 110,  236 => 102,  232 => 101,  229 => 100,  217 => 98,  213 => 97,  209 => 94,  197 => 92,  193 => 91,  183 => 83,  179 => 82,  170 => 76,  167 => 75,  155 => 73,  151 => 72,  141 => 64,  137 => 63,  128 => 57,  124 => 56,  120 => 55,  111 => 49,  107 => 48,  98 => 42,  94 => 41,  87 => 37,  83 => 36,  81 => 35,  77 => 32,  72 => 30,  70 => 29,  65 => 26,  63 => 25,  60 => 23,  55 => 20,  52 => 18,  50 => 17,  48 => 15,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
