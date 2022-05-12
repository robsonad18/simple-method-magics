<?php 

class Example
{
    private string $name = "";

    /**
     * Metodo inicial da classe - construtor
     *
     * @param string $name
     */
    function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Metodo de conversão da classe em texto
     *
     * @return string
     */
    function __toString()
    {
        return json_encode([
            "name" => "\nText\n"
        ]);
    }

    /**
     * Metodo de consulta de propriedades privadas
     *
     * @param [type] $key
     * @return void
     */
    function __get($key)
    {
        return $this->{$key};
    }

    /**
     * Metodo de atribuição de propriedades privadas
     *
     * @param [type] $name
     * @param [type] $value
     */
    function __set($name, $value)
    {
        $this->{$name} = strtoupper($value); 
    }

    /**
     * Executa a classe como função
     *
     * @return void
     */
    function __invoke()
    {
        echo "Fuctions in process :)\n";
        return md5($this->name);
    }

    /**
     * Filtra o debug da classe
     *
     * @return array
     */
    function __debugInfo()
    {
        return [
            "name" => $this->name,
            "password" => "***"
        ];
    }

    /**
     * Metodo destrutor
     */
    function __destruct()
    {
        echo "Morreu :(";
    }
}

$obExample = new Example("Robson");
print_r($obExample);

echo $obExample->name;
$obExample->name = "Lucas";

echo $obExample();
