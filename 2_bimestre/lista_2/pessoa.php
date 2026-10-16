
<?php

class Pessoa {

    private string $nome;
    private string $email;

    public function __construct(string $nome, string $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getEmail(): string {
        return $this->email;
    }
}

class Aluno extends Pessoa {

    private string $matricula;

    public function __construct(string $nome, string $email, string $matricula) {
        parent::__construct($nome, $email);
        $this->matricula = $matricula;
    }

    public function exibirDados(): void {
        echo "Nome: " . $this->getNome();
        echo PHP_EOL;
        echo "Email: " . $this->getEmail();
        echo PHP_EOL;
        echo "Matricula: " . $this->matricula;
        echo PHP_EOL;
    }
}

class Professor extends Pessoa {

    private string $disciplina;

    public function __construct(string $nome, string $email, string $disciplina) {
        parent::__construct($nome, $email);
        $this->disciplina = $disciplina;
    }

    public function exibirDados(): void {
        echo "Nome: " . $this->getNome();
        echo PHP_EOL;
        echo "Email: " . $this->getEmail();
        echo PHP_EOL;
        echo "Disciplina: " . $this->disciplina;
        echo PHP_EOL;
    }
}

$aluno = new Aluno("Daniel", "daniel@email.com", "12345");
$professor = new Professor("Carlos", "carlos@email.com", "Programacao");

echo "Dados do Aluno:";
echo PHP_EOL;
$aluno->exibirDados();

echo PHP_EOL;

echo "Dados do Professor:";
echo PHP_EOL;
$professor->exibirDados();

?>
