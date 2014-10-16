<?php
include("bd.php");
Class Usuario{
    public  $id;
    private $name;
    private $fname;
    private $sname;
    private $phone;
    private $street;
    private $num1;
    private $num2;
    private $col;
    private $mun;
    private $est;
    private $cp;
    private $cor;
    private $user;
    private $cont;
    private $lvl;
    private $estatus;

        public function createUsuario($name,$fname,$lname,$phone){
            echo"Crear Usuario<br>";
            $query="INSERT INTO usuario (name, fname, lname, phone,estatus)
                      VALUES ('$name', '$fname', '$lname', '$phone',1)";
            $result=mysql_query($query)or die ("error de consuiñltyasuygf");
            echo"Registro insertado correctamente";
        }
        public function readUsuario(){
            echo"Ver Usuario<br>";
            $query="SELECT * FROM usuario";
            $result=mysql_query($query)or die ("error de consuiñltyasuygf");

            echo"<table class='table table-striped'>
                     <thead>
                        <tr>
                            <th>Folio</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Tel&eacute;fono</th>
                            <th>Calle</th>
                            <th>Numero ext.</th>
                            <th>Numero int</th>
                            <th>Colonia</th>
                            <th>Municipio</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                     </thead>";
            while($field=mysql_fetch_array($result)){
                $this->id=$field['iduser'];
                $this->name=$field['name'];
                $this->fname=$field['fname'];
                $this->sname=$field['lname'];
                $this->phone=$field['phone'];
                $this->street=$field['street'];
                $this->num1=$field['num1'];
                $this->num2=$field['num2'];
                $this->col=$field['col'];
                $this->mun=$field['mun'];
                $this->est=$field['est'];
            echo"<tbody>";
                echo"<tr>";
                    echo"<td>".$this->id."</td>";
                    echo"<td>".$this->name."</td>";
                    echo"<td>".$this->fname."</td>";
                    echo"<td>".$this->sname."</td>";
                    echo"<td>".$this->phone."</td>";
                    echo"<td>".$this->street."</td>";
                    echo"<td>".$this->num1."</td>";
                    echo"<td>".$this->num2."</td>";
                    echo"<td>".$this->col."</td>";
                    echo"<td>".$this->mun."</td>";
                    echo"<td>".$this->est."</td>";
                    echo"<td>"."<a href='modUsuario.php?uduser=".$this->id."'>Moduser</a>"."</td>";
               echo"</tr>";
            echo"</tbody>";
            }
          echo"</table>";

        }
        public function updateUsuario($id,$name,$fname,$lname,$phone){
            echo"Modificar Usuario<br>";
            $query="UPDATE usuario SET name='$name',fname='$fname',lname='$lname',phone='$phone'  WHERE iduser=$id";
            $result=mysql_query($query)or die ("error de consulta");
            echo"Registro Actualizado correctamente";
        }
        public function deleteUsuario($id){
            echo"Eliminar Usuario<br>";
            $query="DELETE FROM usuario  WHERE  iduser=$id";
            $result=mysql_query($query)or die ("error de consuiñltyasuygf");
            echo"Registro eliminado correctamente";

        }
        public function viewUsuario($id){
            echo"Ver Usuario Especifico Usuario<br>";
            $query="SELECT * FROM usuario WHERE  estatus='1' AND iduser=$id";
            $result=mysql_query($query)or die ("error de consuiñltyasuygf");

            echo"<table class='table table-striped'><tr>
                            <th>Folio</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Tel&eacute;fono</th>
                            <th>Calle</th>
                            <th>Numero ext.</th>
                            <th>Numero int</th>
                            <th>Colonia</th>
                            <th>Municipio</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>";
            while($field=mysql_fetch_array($result)){
                $this->id=$field['iduser'];
                $this->name=$field['name'];
                $this->fname=$field['fname'];
                $this->sname=$field['lname'];
                $this->phone=$field['phone'];
                $this->street=$field['street'];
                $this->num1=$field['num1'];
                $this->num2=$field['num2'];
                $this->col=$field['col'];
                $this->mun=$field['mun'];
                $this->est=$field['est'];
                echo"<tr>";
                echo"<td>".$this->id."</td>";
                echo"<td>".$this->name."</td>";
                echo"<td>".$this->fname."</td>";
                echo"<td>".$this->sname."</td>";
                echo"<td>".$this->phone."</td>";
                echo"<td>".$this->street."</td>";
                echo"<td>".$this->num1."</td>";
                echo"<td>".$this->num2."</td>";
                echo"<td>".$this->col."</td>";
                echo"<td>".$this->mun."</td>";
                echo"<td>".$this->est."</td>";
                echo"<td>"."<a href='modUsuario.php?uduser=".$this->id."'>Moduser</a>"."</td>";
                echo"</tr>";

        }
            echo"</table>";



        }
}
?>