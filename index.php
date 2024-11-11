 <?php 
 
 class Company{
    public $name;
    public $location;
    public $tot_employees;
    public $avg_salary;
    
    public static $number_company = 0;

    public function __construct($str1, $str2, $int, $float){
        $this->name = $str1;
        $this->location = $str2;
        $this->tot_employees = $int;
        $this->avg_salary = $float;
        incrementCompany();
    }

    public function showCompany(){
      echo('La compagnia' . ' ' . $this->name . ' ' . 'con sede in' . ' ' . $this->location . ' ' . 'ha ben' . ' ' . $this->tot_employees . ' ' . 'dipendenti'); 
    }

    public function calcoloSpesa($nMesi){
       $spesaVariabile = $this->avg_salary * $nMesi; 
    }

    public function stampaCalcoloSpesa($spesaVariabile){
      echo($spesaVariabile);
    }

    public function incrementCompany(){
       self::$number_company++;
    }

    public static function showNumberCompany(){
      echo(self::$number_company);
    }
}

$oxbow = new Company('Oxbow', 'France', 1400, 1245.76);
$iPhone = new Company('iPhone', 'USA', 5000, 2125.98);
$caballero = new Company('Caballero', 'Italia', 5200, 1564.08);
$disney = new Company('Disney', 'USA', 8000, 2298.69);
$comet = new Company('Comet', 'Holland', 2000, 1176.43);

echo $oxbow->showCompany();
echo $iPhone->showCompany();
echo $caballero->showCompany();
echo $disney->showCompany();
echo $comet->showCompany();