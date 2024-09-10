<?php
class Paginas extends Controller{
    public function index(){
        $dados = ['titulo'=>'Página Inicial',
                  'descricao'=>'Aula de PHP'
                 ];

        $this->view('pagina/home', $dados);
    }
    public function sobre(){
        $dados = ['titulo'=>'Sobre nós...',
                  'descricao'=>'vic linda'
                 ];

        $this->view('pagina/sobre', $dados);
    }
    public function contato(){
        $dados = ['titulo'=>'Página Contato',
                  'descricao'=>'Rua das Esmeraldas - 5000, bairro Lobo, Cáceres-MT - 65 3322-2596'
                 ];

        $this->view('pagina/contato', $dados);
    }
}