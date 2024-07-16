<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Fruta{//declaração de propriedade pública para a marca do carro
        public $tipo;//declaração de propriedade publica para o tipo de fruta
        public $sabor;//declaração de propriedade publica para o sabor da fruta
        public function saborear(){//imprimindo a mensagem do tipo e sabor da fruta
            echo "<h1>sua fruta é $this->tipo o sabor é $this->sabor </h1>";
        }
    }
    $minhafruta = new Fruta();//criando uma instancia da classe fruta
    $minhafruta->tipo = 'banana';//atribuindo o valor "banana" á propriedade 'tipo' do objeto $minhafruta
    $minhafruta->sabor = 'doce';//atribuindo o valor "doce" á propriedade 'sabor' do objeto $minhafruta
    $minhafruta->saborear();//exibe a função
    ?>
</body>
</html>