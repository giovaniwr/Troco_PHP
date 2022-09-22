<?php

class Troco
{
    /**
     * @param float $reais
     * @return array
     */
    public function getQtdeNotas(float $reais): array
    {
        $notas_qtd = [
            "100" => 0,
            "50" => 0,
            "20" => 0,
            "10" => 0,
            "5" => 0,
            "2" => 0,
            "1" => 0,
            "0.5" => 0,
            "0.25" => 0,
            "0.1" => 0,
            "0.05" => 0,
            "0.01" => 0,
        ];
        return $this->calculaNotas(((float)$reais), $notas_qtd);
    }

    private function calculaNotas($valor, $notas_qtd)
    {
      foreach ($notas_qtd as $notas => $notas_qtd) {
        $nota_atual = ((float) $notas);
        $lugarArray = ((string) $nota_atual);
        while($valor >= $nota_atual){
          $notas_qtd[$lugarArray] ++;
          $valor = sprintf("%f.2", $valor - $nota_atual);
          
        }
      }
      return $notas_qtd;
    }
}
