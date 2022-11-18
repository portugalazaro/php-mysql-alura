<?php


class Artigo {

    public function exibeArtigo():array
    {
        $artigos =  [
            [            
                'titulo' => 'O que é Metodologia Ágil?',
                'conteudo' => 'Uma vez fui contratada por uma empresa que desenvolvia softwares e aplicativos para outras empresas.',
                'link' => 'o-que-e-metodologia-agil.html'
            ]

        ];


        return $artigos;

    }


}


