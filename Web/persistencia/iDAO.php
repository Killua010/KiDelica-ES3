<?php
    interface iDao{
        public function create($entidadeDominio);
        public function read($entidadeDominio);
        public function uptade($entidadeDominio);
        public function delete($entidadeDominio);
    }
?>