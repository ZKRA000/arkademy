<?php

include "connect.php";

header('Content-Type: application/json');

if(isset($_POST['action'])){

  if($_POST['action'] == 'get'){

    $query = mysqli_query($link,"SELECT nama.id as id ,kategory.salary,nama.name,work.name as kerja FROM nama INNER JOIN work ON nama.id_work = work.id INNER JOIN kategory ON nama.id_salary = kategory.id");

    while($data = mysqli_fetch_assoc($query)){
      $arr[] = array(
                "id"=>$data['id'],
                "name"=>$data['name'],
                "work"=>$data['kerja'],
                "salary"=>$data['salary']
      );
    }

    echo json_encode($arr);

  }

  if($_POST['action'] == 'get_by_id'){

    $id = $_POST['id'];
    $query = mysqli_query($link,"SELECT * FROM nama where nama.id = '$id'");

    while($data = mysqli_fetch_assoc($query)){
      $arr[] = array(
                "id"=>$data['id'],
                "name"=>$data['name'],
                "work"=>$data['id_work'],
                "salary"=>$data['id_salary']
      );
    }

    echo json_encode($arr);

  }

  if($_POST['action'] == 'edit'){

    $id = $_POST['id'];
    $nama = $_POST['name'];
    $work = $_POST['work'];
    $salary = $_POST['salary'];

    if($nama == '' || $work == '' || $salary == '' || $id == ''){
      $arr['status'] = 0;
    }else{

    $query = mysqli_query($link,"UPDATE nama SET name = '$nama',id_work = '$work',id_salary = '$salary' where id ='$id'");

    if(!$query){
      $arr['status'] = 2;
    }else{
      $arr['status'] = 1;
    }

    }

    echo json_encode($arr);

  }

  if($_POST['action'] == 'add'){

    $nama = $_POST['name'];
    $work = $_POST['work'];
    $salary = $_POST['salary'];

    if($nama == '' || $work == '' || $salary == ''){
      $arr['status'] = 0;
    }else{

    $query = mysqli_query($link,"INSERT INTO nama (name,id_work,id_salary) VALUES ('$nama','$work','$salary')");

    if(!$query){
      $arr['status'] = 2;
    }else{
      $arr['status'] = 1;
    }

    }

    echo json_encode($arr);

  }

  if($_POST['action'] == 'delete'){


        $id = $_POST['id'];

        if($id == ''){
          $arr['status'] = 0;
        }else{

        $query = mysqli_query($link,"DELETE FROM nama where id ='$id'");

        if(!$query){
          $arr['status'] = 2;
        }else{
          $arr['status'] = 1;
        }

        }

        echo json_encode($arr);

  }



}

?>
