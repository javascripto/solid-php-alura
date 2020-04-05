<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\AluraMais;
use Alura\Solid\Model\Curso;
use Alura\Solid\Model\Assistivel;

class Assistidor
{
    public function assistir(Assistivel $conteudo)
    {
        $conteudo->assistir();
    }

    public function assisteCurso(Curso $curso)
    {
        $curso->assistir();
    }

    public function assisteAluraMais(AluraMais $aluraMais)
    {
        $aluraMais->assistir();
    }
}
