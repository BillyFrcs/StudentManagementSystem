<?php
class DatabaseConfiguration
{
     // MYSQL Connection properties
     private $_dbDSN = 'mysql:host=localhost;dbname=StudentManagementSystem';
     private $_dbUsername = 'BillyFrcs';
     private $_dbPassword = 'billy19';

     private $_connect;

     // Input properties
     private $_ID;
     private $_Name;
     private $_NIM;
     private $_Email;
     private $_Campus;
     private $_Programs;

     private $_options = [
          PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
     ];

     public function __construct()
     {
          try {
               define('DB_DSN', $this->_dbDSN);
               define('DB_USERNAME', $this->_dbUsername);
               define('DB_PASSWORD', $this->_dbPassword);
               define('DB_OPTIONS', $this->_options);

               $this->_connect = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD, DB_OPTIONS);
               $this->_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

               echo '<script>console.log("Connected successfully, just enjoy your life!");</script>';
          } catch (PDOException $error) {
               die("Yoo there was an error while connecting to the server " . $error->getMessage());

               exit;
          }
     }

     public function Save()
     {
          try {
               $sql = $this->_connect->prepare("INSERT INTO StudentManagementSystem.Students(Name, NIM, Email, Campus, Programs) VALUES (?, ?, ?, ?, ?)");

               $sql->execute(array($this->_Name, $this->_NIM, $this->_Email, $this->_Campus, $this->_Programs));

               echo '<script>document.location.href="index.php"</script>';
          } catch (PDOException $error) {
               die("Yoo there was an error while connecting to the server " . $error->getMessage());

               exit;
          }
     }

     public function FetchAll()
     {
          try {
               $sql = $this->_connect->prepare("SELECT * FROM StudentManagementSystem.Students");

               $sql->execute();

               return $sql->fetchAll();
          } catch (PDOException $error) {
               return "Yoo there was an error while connecting to the server " . $error->getMessage();

               exit;
          }
     }

     public function FetchOne()
     {
          try {
               $sql = $this->_connect->prepare("SELECT * FROM StudentManagementSystem.Students WHERE ID = ?");

               $sql->execute(array($this->_ID));

               return $sql->fetchAll();
          } catch (PDOException $error) {
               return "Yoo there was an error while connecting to the server " . $error->getMessage();

               exit;
          }
     }

     public function Update()
     {
          try {
               $sql = $this->_connect->prepare("UPDATE StudentManagementSystem.Students SET Name = ?, NIM = ?, Email = ?, Campus = ?, Programs = ? WHERE ID = ?");

               $sql->execute(array($this->_Name, $this->_NIM, $this->_Email, $this->_Campus, $this->_Programs, $this->_ID));

               echo '<script>document.location.href="index.php"</script>';
          } catch (PDOException $error) {
               die("Yoo there was an error while connecting to the server " . $error->getMessage());

               exit;
          }
     }

     public function Delete()
     {
          try {
               $sql = $this->_connect->prepare("DELETE FROM StudentManagementSystem.Students WHERE ID = ?");

               $sql->execute(array($this->_ID));

               $sql->fetchAll();

               echo '<script>document.location.href="index.php"</script>';
          } catch (PDOException $error) {
               die("Yoo there was an error while connecting to the server " . $error->getMessage());

               exit;
          }
     }

     public function Search($keyword)
     {
          try {
               // MYSQL
               $sql = $this->_connect->prepare("SELECT * FROM StudentManagementSystem.Students WHERE Name LIKE :Keyword OR NIM LIKE :Keyword OR Email LIKE :Keyword ORDER BY Name");
               $sql->bindValue(':Keyword', '%' . $keyword . '%', PDO::PARAM_STR);

               $sql->execute();

               $resultSearch = $sql->fetchAll();

               return $resultSearch;
          } catch (PDOException $error) {
               return ("Yoo there was an error while connecting to the server " . $error->getMessage());

               exit;
          }
     }

     public function CheckRows()
     {
          try {
               $sql = $this->_connect->prepare("SELECT * FROM StudentManagementSystem.Students");

               $sql->execute();

               return $sql->rowCount();
          } catch (PDOException $error) {
               return "Yoo there was an error while connecting to the server " . $error->getMessage();

               exit;
          }
     }

     // ID
     public function GetID()
     {
          return $this->_ID;
     }

     public function SetID($id)
     {
          $this->_ID = $id;
     }

     // Name
     public function GetName()
     {
          return $this->_Name;
     }

     public function SetName($name)
     {
          $this->_Name = $name;
     }

     // NIM
     public function GetNIM()
     {
          return $this->_NIM;
     }

     public function SetNIM($nim)
     {
          $this->_NIM = $nim;
     }

     // Email
     public function GetEmail()
     {
          return $this->_Email;
     }

     public function SetEmail($email)
     {
          $this->_Email = $email;
     }

     // Campus
     public function GetCampus()
     {
          return $this->_Campus;
     }

     public function SetCampus($campus)
     {
          $this->_Campus = $campus;
     }

     // Programs
     public function GetPrograms()
     {
          return $this->_Programs;
     }

     public function SetPrograms($programs)
     {
          $this->_Programs = $programs;
     }
}
