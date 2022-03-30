<?php
    class Usuario{
        public $usuariobanco;
        public $senhabanco;

        public function getUsuario(){
            return $this->usuariobanco;
        }

        public function setUsuario($usuario){
            $this->usuariobanco = $usuario;
        }

        public function getSenha(){
            return $this->senhabanco;
        }

        public function setSenha($usuario){
            $this->senhabanco = $usuario;
        }

        public function verificaLogin($usuario, $senha){
            $retorno = false;
            $this->usuariobanco = 'admin';
            $this->senhabanco = crypt(md5('123456'),'etec');
            $senhacripty = crypt(md5($senha),'etec');

            if($usuario == $this->usuariobanco && $senhacripty == $this->senhabanco){
                $retorno = true;
            }

            return $retorno;
        }
    }

?>