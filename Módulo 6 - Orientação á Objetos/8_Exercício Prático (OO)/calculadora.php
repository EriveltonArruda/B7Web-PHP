<?php
class calculadora {
  public $total = 0;
  // Já que é soma, $this->total += $x (a variável passada no argumento)
  public function add(float $x) {
    return $this->total += $x;
  }

  // Já que é subtração, $this->total -= $x
  public function sub($x) {
    return $this->total -= $x;
  }

  // Já que é multiplicação, $this->total *= $x
  public function multiply($x) {
    return $this->total *= $x;
  }


  public function divide($x) {
    /* Aqui vou fazer uma verificação, se o número passado for diferente de 0,
então divida o $total da classe pelo número passado no parâmetro */
    if ($x !== 0) {
      return $this->total /= $x;
    }
  }

  // Já que clear limpa minha calculadora, só retorno $total ao valor de 0.
  public function clear() {
    return $this->total = 0;
  }

  /* Já que $total vai receber os valores das operações, apenas tenho que
retornar o total */
  public function total() {
    return $this->total;
  }
}
