<?php

class Noticias {

    public function listaNoticias()

    {
        $result = BdNoticias::selecionaTudo();
        $query = $this->executeQuery("SELECT *, DATE_FORMAT(dataPostagem, '%d/%m/%Y %H:%i') dtHrPostagem FROM noticias ORDER BY dataPostagem DESC");
        $return = [];
        while ($sql = $query->fetch_array()) {
            $return[] = [
                'codNoticia' => utf8_encode($sql['codNoticia']),
                'titulo' => utf8_encode($sql['titulo']),
                'texto' => utf8_encode($sql['texto']),
                'previa' => utf8_encode($sql['previa']),
                'imagemDestaque' => utf8_encode($sql['imagemDestaque']),
                'dataPostagem' => utf8_encode($sql['dtHrPostagem']),
                'status' => utf8_encode($sql['status']),
                'fixaTopo' => utf8_encode($sql['fixaTopo'])
            ];
        }
        return $return;
    }
}
