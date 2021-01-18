<?php

class Persona
{

  protected $nome;
  protected $cognome;
  protected $codice_fiscale;

  public function __construct($name, $lastname, $f_c)
  {
    $this->nome = $name;
    $this->cognome = $lastname;
    $this->codice_fiscale = $f_c;
  }

  public function to_string()
  {
    echo 'Nome: '.$this->nome.'</br>Cognome: '.$this->cognome.'</br>Codice fiscale: '.$this->codice_fiscale;
  }

}

class Impiegato extends Persona
{

  protected $codice_impiegato;
  public $compenso;

  public function __construct($name, $lastname, $f_c, $empl_code)
  {
    parent::__construct($name, $lastname, $f_c);
    $this->codice_impiegato = $empl_code;
  }

  public function calcola_compenso()
  {
    return $this->compenso;
  }

  public function to_string()
  {
    echo 'Nome: '.$this->nome.'</br>Cognome: '.$this->cognome.'</br>Codice fiscale: '.$this->codice_fiscale.'</br>Codice impiegato: '.$this->codice_impiegato.'</br>Compenso: '.$this->calcola_compenso();
  }

}

class ImpiegatoSalariato extends Impiegato
{

  private $giorni_lavorati;
  private $compenso_giornaliero;

  public function __construct($name, $lastname, $f_c, $empl_code, $work_days, $daily_retr)
  {
    parent::__construct($name, $lastname, $f_c, $empl_code);
    $this->giorni_lavorati = $work_days;
    $this->compenso_giornaliero = $daily_retr;
  }

  public function calcola_compenso()
  {
    return $this->giorni_lavorati*$this->compenso_giornaliero;
  }

}

class ImpiegatoAOre extends Impiegato
{

  private $ore_lavorate;
  private $compenso_orario;

  public function __construct($name, $lastname, $f_c, $empl_code, $work_h, $h_retr)
  {
    parent::__construct($name, $lastname, $f_c, $empl_code);
    $this->ore_lavorate = $work_h;
    $this->compenso_orario = $h_retr;
  }

  public function calcola_compenso()
  {
    return $this->ore_lavorate*$this->compenso_orario;
  }

}

trait Progetto
{

    protected $nome_progetto;
    protected $commissione_progetto;

}

class ImpiegatoSuCommissione extends Impiegato
{

  use Progetto;

  function __construct($name, $lastname, $f_c, $empl_code, $p_name, $p_com)
  {
    parent::__construct($name, $lastname, $f_c, $empl_code);
    $this->nome_progetto = $p_name;
    $this->commissione_progetto = $p_com;
  }

  public function calcola_compenso()
  {
    return $this->commissione_progetto;
  }

  public function to_string()
  {
    echo 'Nome: '.$this->nome.'</br>Cognome: '.$this->cognome.'</br>Codice fiscale: '.$this->codice_fiscale.'</br>Codice impiegato: '.$this->codice_impiegato.'</br>Compenso: '.$this->calcola_compenso().'</br>Nome Progetto: '.$this->nome_progetto;
  }

}

?>
