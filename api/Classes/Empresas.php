<?php
class Empresa{

    // conexao com a tabela
    private $conn;
    private $table_name = "tbempesa";

    // propriedades
    public $id;
    public $pessoa;
    public $contribuinte;
    public $cadastro;
    public $cnpj;
    public $estado;
    public $estadual;
    public $municipal;
    public $razao;
    public $fantasia;
    public $telefone;
    public $telefoneSecundario;
    public $email;
    public $cep;
    public $logradouro;
    public $numero;
    public $complemento;
    public $bairro;
    public $cidade;
    public $pais;
    public $observacao;

    // construtor da conexao
    public function __construct($db){
        $this->conn = $db;
    }

    // lendo os dados da empresa
    function read(){

        // select all
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY pessoa ASC";

        //preaparando o statement
        $stmt = $this->conn->prepare($query);

        // executando a query
        $stmt->execute();

        return $stmt;
    }

    // Inserindo nova Empresa *************************************************
    function create(){

        // queri de insert
        $query = "INSERT INTO " . $this->table_name . "
                SET pessoa =:pessoa, contribuinte =:contribuinte, cadastro =:cadastro, cnpj=:cnpj, estado =:estado, estadual =:estadual,
                municipal=:municipal, razao =:razao, fantasia =:fantasia, telefone =:telefone ,telefoneSecundario =:telefoneSecundario,
                email =:email, cep =:cep, logradouro =:logradouro, numero =:numero, complemento =:complemento, bairro =:bairro, cidade =:cidade,
                 pais =:pais, observacao =:observacao";

        // preaparando query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->pessoa=htmlspecialchars(strip_tags($this->pessoa));
        $this->contribuinte=htmlspecialchars(strip_tags($this->contribuinte));
        $this->cadastro=htmlspecialchars(strip_tags($this->cadastro));
        $this->cnpj=htmlspecialchars(strip_tags($this->cnpj));
        $this->estado=htmlspecialchars(strip_tags($this->estado));
        $this->estadual=htmlspecialchars(strip_tags($this->estadual));
        $this->municipal=htmlspecialchars(strip_tags($this->municipal));
        $this->razao=htmlspecialchars(strip_tags($this->razao));
        $this->fantasia=htmlspecialchars(strip_tags($this->fantasia));
        $this->telefone=htmlspecialchars(strip_tags($this->telefone));
        $this->telefoneSecundario=htmlspecialchars(strip_tags($this->telefoneSecundario));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->cep=htmlspecialchars(strip_tags($this->cep));
        $this->logradouro=htmlspecialchars(strip_tags($this->logradouro));
        $this->numero=htmlspecialchars(strip_tags($this->numero));
        $this->complemento=htmlspecialchars(strip_tags($this->complemento));
        $this->bairro=htmlspecialchars(strip_tags($this->bairro));
        $this->cidade=htmlspecialchars(strip_tags($this->cidade));
        $this->pais=htmlspecialchars(strip_tags($this->pais));
        $this->observacao=htmlspecialchars(strip_tags($this->observacao));

        // bind values
        $stmt->bindParam(":pessoa", $this->pessoa);
        $stmt->bindParam(":contribuinte", $this->contribuinte);
        $stmt->bindParam(":cadastro", $this->cadastro);
        $stmt->bindParam(":cnpj", $this->cnpj);
        $stmt->bindParam(":estado", $this->estado);
		    $stmt->bindParam(":estadual", $this->estadual);
        $stmt->bindParam(":municipal", $this->municipal);
        $stmt->bindParam(":razao", $this->razao);
        $stmt->bindParam(":fantasia", $this->fantasia);
        $stmt->bindParam(":telefone", $this->telefone);
        $stmt->bindParam(":telefoneSecundario", $this->telefoneSecundario);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":cep", $this->cep);
        $stmt->bindParam(":logradouro", $this->logradouro);
        $stmt->bindParam(":numero", $this->numero);
        $stmt->bindParam(":complemento", $this->complemento);
        $stmt->bindParam(":bairro", $this->bairro);
        $stmt->bindParam(":cidade", $this->cidade);
        $stmt->bindParam(":pais", $this->pais);
        $stmt->bindParam(":observacao", $this->observacao);

        // execute query
        if($stmt->execute()){
            return true;
        }

        return false;
    }

    // pesquisando apenas uma empresa *************************************
    function readOne(){

        // query to read single record
        $query = "SELECT * FROM tbempesa WHERE id = ? OR cnpj = ? or razao like ? or fantasia like ?
                                         or pessoa = ? or contribuinte = ? or cadastro = ?";


        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // bind id of product to be updated
        $stmt->bindParam(1, $this->id);
        $stmt->bindParam(2, $this->cnpj);
        $stmt->bindParam(3, $this->razao);
        $stmt->bindParam(4, $this->fantasia);
        $stmt->bindParam(5, $this->pessoa);
        $stmt->bindParam(6, $this->contribuinte);
        $stmt->bindParam(7, $this->cadastro);

        // execute query
        $stmt->execute();

        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // setando os valores do objetos
        $this->id = $row['id'];
        $this->pessoa= $row['pessoa'];
        $this->contribuinte= $row['contribuinte'];
        $this->cadastro= $row['cadastro'];
        $this->cnpj= $row['cnpj'];
        $this->estado= $row['estado'];
        $this->estadual= $row['estadual'];
        $this->municipal= $row['municipal'];
        $this->razao= $row['razao'];
        $this->fantasia= $row['fantasia'];
        $this->telefone= $row['telefone'];
        $this->telefoneSecundario= $row['telefoneSecundario'];
        $this->email= $row['email'];
        $this->cep= $row['cep'];
        $this->logradouro= $row['logradouro'];
        $this->numero= $row['numero'];
        $this->complemento= $row['complemento'];
        $this->bairro= $row['bairro'];
        $this->cidade= $row['cidade'];
        $this->pais= $row['pais'];
        $this->observacao= $row['observacao'];
    }

    // UPDATE DA EMPRESA ***************************************
    function update(){

        // update query
        $query = "UPDATE " . $this->table_name . "
                SET pessoa =:pessoa, contribuinte =:contribuinte, cadastro =:cadastro, cnpj =:cnpj, estado =:estado, estadual =:estadual,
                municipal=:municipal, razao =:razao, fantasia =:fantasia, telefone =:telefone, telefoneSecundario =:telefoneSecundario,
                email =:email, cep =:cep, logradouro =:logradouro, numero =:numero, complemento =:complemento, bairro =:bairro, cidade =:cidade,
                pais =:pais, observacao =:observacao
                WHERE id = :id";


        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->id=htmlspecialchars(strip_tags($this->id));
        $this->pessoa=htmlspecialchars(strip_tags($this->pessoa));
        $this->contribuinte=htmlspecialchars(strip_tags($this->contribuinte));
        $this->cnpj=htmlspecialchars(strip_tags($this->cnpj));
        $this->cadastro=htmlspecialchars(strip_tags($this->cadastro));
        $this->estado=htmlspecialchars(strip_tags($this->estado));
        $this->estadual=htmlspecialchars(strip_tags($this->estadual));
        $this->municipal=htmlspecialchars(strip_tags($this->municipal));
        $this->razao=htmlspecialchars(strip_tags($this->razao));
        $this->fantasia=htmlspecialchars(strip_tags($this->fantasia));
        $this->telefone=htmlspecialchars(strip_tags($this->telefone));
        $this->telefoneSecundario=htmlspecialchars(strip_tags($this->telefoneSecundario));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->cep=htmlspecialchars(strip_tags($this->cep));
        $this->logradouro=htmlspecialchars(strip_tags($this->logradouro));
        $this->numero=htmlspecialchars(strip_tags($this->numero));
        $this->complemento=htmlspecialchars(strip_tags($this->complemento));
        $this->bairro=htmlspecialchars(strip_tags($this->bairro));
        $this->cidade=htmlspecialchars(strip_tags($this->cidade));
        $this->pais=htmlspecialchars(strip_tags($this->pais));
        $this->observacao=htmlspecialchars(strip_tags($this->observacao));

         // bind values
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":pessoa", $this->pessoa);
        $stmt->bindParam(":contribuinte", $this->contribuinte);
        $stmt->bindParam(":cadastro", $this->cadastro);
        $stmt->bindParam(":cnpj", $this->cnpj);
        $stmt->bindParam(":estado", $this->estado);
		    $stmt->bindParam(":estadual", $this->estadual);
        $stmt->bindParam(":municipal", $this->municipal);
        $stmt->bindParam(":razao", $this->razao);
        $stmt->bindParam(":fantasia", $this->fantasia);
        $stmt->bindParam(":telefone", $this->telefone);
        $stmt->bindParam(":telefoneSecundario", $this->telefoneSecundario);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":cep", $this->cep);
        $stmt->bindParam(":logradouro", $this->logradouro);
        $stmt->bindParam(":numero", $this->numero);
        $stmt->bindParam(":complemento", $this->complemento);
        $stmt->bindParam(":bairro", $this->bairro);
        $stmt->bindParam(":cidade", $this->cidade);
        $stmt->bindParam(":pais", $this->pais);
        $stmt->bindParam(":observacao", $this->observacao);

        // execute the query
        if($stmt->execute()){
            return true;
        }

        return false;
    }

    // DELETE DA EMPRESA ***************************************
     function delete(){
         // delete query
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ? OR cnpj = ?";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->id=htmlspecialchars(strip_tags($this->id));
        $this->cnpj=htmlspecialchars(strip_tags($this->cnpj));

        // bind id of record to delete
        $stmt->bindParam(1, $this->id);
        $stmt->bindParam(2, $this->cnpj);

        // execute query
        if($stmt->execute()){
            return true;
        }
         return false;
    }
}
?>
