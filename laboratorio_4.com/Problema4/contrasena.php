<?php 

    class contrasena{

        public $password;
        public $salt;

        public function Mostrarbase64_encode(){
            return base64_encode($this->password . $this->salt);
        }

        public function Mostrarmd5(){
            return md5($this->password . $this->salt);
        }

        public function Mostrarsha1(){
            return sha1($this->password . $this->salt);
        }

        public function Mostrarcrc32(){
            return crc32($this->password . $this->salt);
        }

        public function Mostrarcrypt(){
            return crypt($this->password , $this->salt);
        }

        public function Mostrarsha224(){
            return hash('sha224',$this->password . $this->salt);
        }

        public function Mostrarsha512(){
            return hash('sha512',$this->password . $this->salt);
        }

        public function Mostrarwhirlpool(){
            return hash('whirlpool',$this->password . $this->salt);
        }

        public function Mostrarsnefru(){
            return hash('snefru',$this->password . $this->salt);
        }

        public function Mostrarhaval1283(){
            return hash('haval128,3',$this->password . $this->salt);
        }
        
        public function Mostrarhaval1285(){
            return hash('haval128,5',$this->password . $this->salt);
        }
    }

?>