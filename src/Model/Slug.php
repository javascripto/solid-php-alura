<?php

namespace Alura\Solid\Model;

final class Slug {
    private $slug;

    public function __construct(string $conteudo)
    {
        $this->slug = str_replace(' ', '-', strtolower($conteudo));
    }

    public function toString(): string
    {
        return $this->slug;
    }
}
