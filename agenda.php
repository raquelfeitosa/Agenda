<?php
class Agenda {
    public $contato;
}

public function ligarContato(){
    echo "ligando para o contato";
}

public function mandarSMS(){
    echo "mandando mensagem";
}
public function mostraUsuario(){
    echo $this->nome. "<br>";
}