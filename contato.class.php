<?php
    class Contato {

        private $pdo;

        public function __construct() {
            //conectando ao banco
            $this->pdo = new PDO("mysql:dbname=crudoo;host=127.0.0.1", "root", ""); 

        }
        /***********************************************CREATE*****************************************************/
        //criando create
        public function adicionar($email, $nome = '') {
            //1º verificar se o email ja existe, 2º se não existir adicionar
            if($this->existeEmail($email) == false) {
                $sql = "INSERT INTO contatos (nome, email) VALUES (:nome, :email)";//query de inserção de email
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':nome', $nome);
                $sql->bindValue(':email', $email);
                $sql->execute();

                return true;
            } else {
                return false;
            }
        }
        /*************************************************READ***************************************************/
        //criando read verificar se tem cadastro (apenas um) baseado no email
        public function getNome($email) {
            $sql = "SELECT nome FROM contatos WHERE email = :email";// busca "nome" da tabela contatos
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':email', $email);
            $sql->execute();

            if($sql->rowCount() > 0) {//verifica se tem algum cadastro no banco
                $info = $sql->fetch();

                return $info['nome'];//se tiver cadastro retorna o nome
            } else {
                return '';
            }
        }

        //criando read verificar se tem cadastro (apenas um) baseado no id
        public function getInfo($id) {
            $sql = "SELECT * FROM contatos WHERE id = :id";//busca todos os registros da tabela contatos
            $sql = $this->pdo->prepare($sql);//não usa o prepare porque não tem parametros no getAll()
            $sql->bindValue(':id', $id);
            $sql->execute();

            if($sql->rowCount() > 0) {
                return $sql->fetch();//retorna todos os registros
            } else {
                return array();
            }
        }


        //criando read verificar se tem cadastros (todos)
        public function getAll() {
            $sql = "SELECT * FROM contatos";//busca todos os registros da tabela contatos
            $sql = $this->pdo->query($sql);//não usa o prepare porque não tem parametros no getAll()

            if($sql->rowCount() > 0) {
                return $sql->fetchAll();//retorna todos os registros
            } else {
                return array();
            }
        }

        /***********************************************UPDATE*****************************************************/
        public function editar($nome, $id) {
            $sql = "UPDATE contatos SET nome = :nome WHERE id = :id";//atualizar o nome onde o id for igual ao do banco
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':id', $id);
            $sql->execute();
        }



        /************************************************DELETE****************************************************/
        public function excluir($id) {
                $sql = "DELETE FROM contatos WHERE id = :id";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(':id', $id);
                $sql->execute();
        }

        /****************************************************************************************************/

        //função que verifica se exixte email
        private function existeEmail($email) {
            $sql = "SELECT * FROM contatos WHERE email = :email";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':email', $email);
            $sql->execute();

            if($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

    }//fim da class Contato


?>