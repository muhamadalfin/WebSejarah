<?php

/* manajemen-tugas.html */
class __TwigTemplate_7a536c140678820f92a9bd036d430ad0b4a158cc409334292dedc2b448afbbf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-private.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-private.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Manajemen Soal Tugas -";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"module\">
    <div class=\"module-head\">
        <h3>";
        // line 10
        echo anchor("tugas", "Tugas");
        echo " / Manajemen Soal Tugas</h3>
    </div>
    <div class=\"module-body\">";
        // line 13
        echo get_flashdata("tugas");
        echo "

        <div class=\"bs-callout bs-callout-info\">
            <div class=\"btn-group pull-right\" style=\"margin-top:-5px;\">";
        // line 17
        echo anchor(((("tugas/edit/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon icon-edit\"></i> Edit Tugas", array("class" => "btn btn-default"));
        // line 18
        if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "aktif") == 0)) {
            // line 19
            echo anchor(((("tugas/terbitkan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-ok\"></i> Terbitkan", array("class" => "btn btn-success btn-small"));
        } elseif (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "aktif") == 1)) {
            // line 21
            echo anchor(((("tugas/tutup/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-minus\"></i> Tutup", array("class" => "btn btn-danger btn-small"));
        }
        // line 23
        echo "            </div>
            <b><a class=\"as-link\" data-toggle=\"collapse\" data-target=\"#detail-tugas\"><i class=\"icon-info-sign\" style=\"line-height: 0px;\"></i>";
        // line 24
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul")), "html", null, true);
        echo "</a></b>

            <div id=\"detail-tugas\" class=\"collapse\" style=\"margin-top: 5px;\">
                <table class=\"table\">
                    <tr>
                        <th style=\"border-top: none;\" width=\"15%\">Tipe</th>
                        <td style=\"border-top: none;\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_label"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Judul</th>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Matapelajaran</th>
                        <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "mapel"), "nama"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>
                            <ul class=\"unstyled inline\" style=\"margin-left: -5px;margin-bottom: 0px;\">";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "tugas_kelas"));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 45
            echo "                                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>Info</th>
                        <td>";
        // line 52
        echo $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "info");
        echo "</td>
                    </tr>
                    <tr>
                        <th>Durasi</th>
                        <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "durasi"), "html", null, true);
        echo " Menit</td>
                    </tr>
                </table>
            </div>

        </div>
        <br>

        <div class=\"btn-group\">
            <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, site_url(("tugas/tambah_soal/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary iframe-pertanyaan\" title=\"Tambah Pertanyaan\">Tambah Pertanyaan</a>
            <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, site_url(("tugas/copy_soal/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary iframe-copy-pertanyaan\" title=\"Copy Pertanyaan\">Copy Pertanyaan</a>
        </div>
        <br><br>

        <table class=\"table\">
            <thead>
                <tr>
                    <th width=\"5%\">No</th>
                    <th>Pertanyaan";
        // line 74
        echo ((($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 3)) ? (" dan Pilihan") : (""));
        echo "</th>
                </tr>
            </thead>
            <tbody>";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pertanyaan"]) ? $context["pertanyaan"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 79
            echo "                <tr id=\"pertanyaan-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
            echo "\">
                    <td><b>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "urutan"), "html", null, true);
            echo ".</b></td>
                    <td>
                        <div class=\"pertanyaan\">
                            <div class=\"btn-group pull-right\" style=\"margin-left:10px;\">";
            // line 84
            if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 3)) {
                // line 85
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, site_url(((("tugas/tambah_pilihan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
                echo "\" class=\"btn btn-small btn-default iframe-pilihan\" data-toggle=\"tooltip\" title=\"Tambah Pilihan\"><i class=\"icon-tasks\"></i></a>";
            }
            // line 87
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, site_url(((("tugas/edit_soal/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn btn-small btn-default iframe-pertanyaan\" data-toggle=\"tooltip\" title=\"Edit Pertanyaan\"><i class=\"icon-edit\"></i></a>
                                <a onclick=\"return confirm('Anda yakin ingin menghapus?')\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, site_url(((((("tugas/hapus_soal/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) . "/") . enurl_redirect(current_url()))), "html", null, true);
            echo "\" class=\"btn btn-small btn-default\" data-toggle=\"tooltip\" title=\"Hapus Pertanyaan\"><i class=\"icon-trash\"></i></a>
                            </div>";
            // line 91
            echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pertanyaan");
            echo "
                        </div>";
            // line 94
            if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_id") == 3)) {
                // line 95
                echo "                        <div id=\"pilihan-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">
                            <table class=\"table table-condensed table-striped\">
                                <tbody>";
                // line 98
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pilihan"));
                foreach ($context['_seq'] as $context["_key"] => $context["pil"]) {
                    // line 99
                    echo "                                    <tr";
                    echo ((($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "kunci") == 1)) ? ("class=\"success\"") : (""));
                    echo ">
                                        <td width=\"3%\"><b>(";
                    // line 100
                    echo twig_escape_filter($this->env, get_abjad($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "urutan")), "html", null, true);
                    echo ")</b></td>
                                        <td>
                                            <div class=\"btn-group pull-right\" style=\"margin-left:10px;\">";
                    // line 103
                    if (($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "kunci") == 0)) {
                        // line 104
                        echo "                                                    <a href=\"";
                        echo twig_escape_filter($this->env, site_url(((((((("tugas/kunci_pilihan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) . "/") . $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id")) . "/") . enurl_redirect(current_url()))), "html", null, true);
                        echo "\" class=\"btn btn-small btn-default\" data-toggle=\"tooltip\" title=\"Jadikan Kunci\"><i class=\"icon-ok\"></i></a>";
                    }
                    // line 106
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, site_url(((((("tugas/edit_pilihan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) . "/") . $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id"))), "html", null, true);
                    echo "\" class=\"btn btn-small btn-default iframe-pilihan\" data-toggle=\"tooltip\" title=\"Edit Pilihan\"><i class=\"icon-edit\"></i></a>
                                                <a onclick=\"return confirm('Anda yakin ingin menghapus?')\" href=\"";
                    // line 107
                    echo twig_escape_filter($this->env, site_url(((((((("tugas/hapus_pilihan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")) . "/") . $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id")) . "/") . enurl_redirect(current_url()))), "html", null, true);
                    echo "\" class=\"btn btn-small btn-default\" data-toggle=\"tooltip\" title=\"Hapus Pilihan\"><i class=\"icon-trash\"></i></a>
                                            </div>";
                    // line 109
                    echo $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "konten");
                    // line 111
                    if (($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "kunci") == 1)) {
                        // line 112
                        echo "                                            <b class=\"text-warning\"><i class=\"icon-star\"></i> Kunci Jawaban</b>";
                    }
                    // line 114
                    echo "                                        </td>
                                    </tr>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pil'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "                                </tbody>
                            </table>
                        </div>";
            }
            // line 121
            echo "
                    </td>
                </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "            </tbody>
        </table>
        <br>";
        // line 129
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "manajemen-tugas.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 129,  258 => 126,  250 => 121,  245 => 117,  238 => 114,  235 => 112,  233 => 111,  231 => 109,  227 => 107,  222 => 106,  217 => 104,  215 => 103,  210 => 100,  205 => 99,  201 => 98,  195 => 95,  193 => 94,  189 => 91,  185 => 88,  180 => 87,  175 => 85,  173 => 84,  167 => 80,  162 => 79,  158 => 78,  152 => 74,  141 => 66,  137 => 65,  125 => 56,  118 => 52,  111 => 47,  103 => 45,  99 => 44,  91 => 38,  84 => 34,  77 => 30,  68 => 24,  65 => 23,  62 => 21,  59 => 19,  57 => 18,  55 => 17,  49 => 13,  44 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
