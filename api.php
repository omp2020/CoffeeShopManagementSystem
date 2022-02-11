<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_POST['type'] == 'LoginAUTH'){
        $stmt = $conn->prepare("SELECT * FROM logindetails WHERE userName = ? AND password = ?");
        $stmt->bind_param("ss", $_POST['username'], $_POST['password']);
        $myObj = new stdClass();
        $myObj->error = 0;
        if(!$stmt->execute()) {
            $myObj->error = 1;
        }
        else {
            $result = $stmt->get_result();
            if($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $_SESSION['login'] = true;
                $_SESSION['empid'] = $row['mapid'];
                $sql = "SELECT name FROM employee WHERE id=".$row['mapid'];
                $_SESSION['id'] = $row['mapid'];
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $_SESSION['name'] = $row['name'];
            }
            else {
                $myObj->error = 1;
            }
        }
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else if($_POST['type'] == 'Register'){
        $stmt = $conn->prepare("INSERT INTO customer (name, email, address, mobile) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $_POST['name'], $_POST['email'], $_POST['address'], $_POST['mobile']);
        $myObj = new stdClass();
        $myObj->error = 0;
        if(!$stmt->execute()) {
            $myObj->error = 1;
        }
        $stmt = $conn->prepare("UPDATE logindetails SET password = ? WHERE userName = ?");
        $stmt->bind_param("ss", $_POST['password'], $_POST['email']);
        if(!$stmt->execute()) {
            $myObj->error = 1;
        }
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else if($_POST['type'] == 'AddEmp'){
        $stmt = $conn->prepare("INSERT INTO employee (name, email, address, mobile, doj, dob) VALUES (?, ?, ?, ?, ?, ?)");
        $dob = date("Y-m-d", strtotime($_POST['dob']));
        $doj = date("Y-m-d", strtotime($_POST['doj']));
        $stmt->bind_param("ssssss", $_POST['name'], $_POST['email'], $_POST['address'], $_POST['phone'], $dob, $doj);
        $myObj = new stdClass();
        $myObj->error = 0;
        if(!$stmt->execute()) {
            $myObj->error = 1;
        }
        if($_POST['isAdmin'] == 'true') {
            $stmt = $conn->prepare("UPDATE logindetails SET isadmin = 1, isemployee = 0 WHERE userName = ?");
            $stmt->bind_param("s", $_POST['email']);
            if(!$stmt->execute()) {
                $myObj->error = 1;
            }
        }        
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else if($_POST['type'] == 'DelCust'){
        $stmt = $conn->prepare("DELETE FROM customer WHERE id = ?");
        $stmt->bind_param("i",$_POST['id']);
        $myObj = new stdClass();
        $myObj->error = 0;
        if(!$stmt->execute()) {
            $myObj->error = 1;
        }
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else if($_POST['type'] == 'DelEmp'){
        $stmt = $conn->prepare("DELETE FROM employee WHERE id = ?");
        $stmt->bind_param("i",$_POST['id']);
        $myObj = new stdClass();
        $myObj->error = 0;
        if(!$stmt->execute()) {
            $myObj->error = 1;
        }
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else if($_POST['type'] == 'AddProd'){
        $stmt = $conn->prepare("INSERT INTO product (name, price, stock, description) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sdis",$_POST['name'],$_POST['price'],$_POST['stock'],$_POST['desc']);
        $myObj = new stdClass();
        $myObj->error = 0;
        if(!$stmt->execute()) {
            $myObj->error = 1;
        }
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else if($_POST['type'] == 'DelProd'){
        $stmt = $conn->prepare("DELETE FROM product WHERE id = ?");
        $stmt->bind_param("i",$_POST['id']);
        $myObj = new stdClass();
        $myObj->error = 0;
        if(!$stmt->execute()) {
            $myObj->error = 1;
        }
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else if($_POST['type'] == 'SelProd'){
        $myObj = new stdClass();
        $myObj->error = 0;
        $sql = "SELECT * FROM product WHERE id =".$_POST['id'];
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $myObj->name = $row['name'];
        $myObj->price = $row['price'];
        $myObj->stock = $row['stock'];
        $myObj->description = $row['description'];
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else if($_POST['type'] == 'UpdateProd'){
        $stmt = $conn->prepare("UPDATE product SET name=?, price=?, stock=?, description=? WHERE id=?");
        $stmt->bind_param("sdisi",$_POST['name'],$_POST['price'],$_POST['stock'],$_POST['desc'], $_POST['id']);
        $myObj = new stdClass();
        $myObj->error = 0;
        if(!$stmt->execute()) {
            $myObj->error = 1;
        }
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else if($_POST['type'] == 'SelEmp'){
        $myObj = new stdClass();
        $myObj->error = 0;
        $sql = "SELECT * FROM employee WHERE id =".$_POST['id'];
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $myObj->name = $row['name'];
        $myObj->email = $row['email'];
        $myObj->address = $row['address'];
        $myObj->mobile = $row['mobile'];
        $myObj->doj = $row['doj'];
        $myObj->dob = $row['dob'];
        $sql = "SELECT isadmin FROM logindetails WHERE mapid =".$_POST['id'];
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $myObj->isAdmin = $row['isadmin'];
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else if($_POST['type'] == 'UpdateEmp'){
        $sql = "SELECT isadmin FROM logindetails WHERE mapid =".$_POST['id'];
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $check = 0;
        if($_POST['isAdmin'] == "true") 
            $check = 1;
        if($row['isadmin'] != $check) {
            $stmt = $conn->prepare("UPDATE logindetails SET isadmin=?, isemployee=? WHERE id=?");
            $nt = !$check;
            $stmt->bind_param("iii", $check, $nt, $_POST['id']);
            if(!$stmt->execute()) {
                $myObj->error = 1;
            }
        }
        $stmt = $conn->prepare("UPDATE employee SET name=?, email=?, address=?, mobile=?, doj=?, dob=? WHERE id=?");
        $dob = date("Y-m-d", strtotime($_POST['dob']));
        $doj = date("Y-m-d", strtotime($_POST['doj']));
        $stmt->bind_param("ssssssi", $_POST['name'], $_POST['email'], $_POST['address'], $_POST['phone'], $dob, $doj, $_POST['id']);
        $myObj = new stdClass();
        $myObj->error = 0;
        if(!$stmt->execute()) {
            $myObj->error = 1;
        }
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else if($_POST['type'] == 'SelCust'){
        $myObj = new stdClass();
        $myObj->error = 0;
        $sql = "SELECT * FROM customer WHERE id =".$_POST['id'];
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $myObj->name = $row['name'];
        $myObj->email = $row['email'];
        $myObj->address = $row['address'];
        $myObj->mobile = $row['mobile'];
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else if($_POST['type'] == 'AddCust'){
        $stmt = $conn->prepare("INSERT INTO customer (name, email, address, mobile) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss",$_POST['name'],$_POST['email'],$_POST['address'],$_POST['phone']);
        $myObj = new stdClass();
        $myObj->error = 0;
        if(!$stmt->execute()) {
            $myObj->error = 1;
        }
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else if($_POST['type'] == 'UpdateCust'){
        $stmt = $conn->prepare("UPDATE customer SET name=?, email=?, address=?, mobile=? WHERE id=?");
        $stmt->bind_param("ssssi",$_POST['name'],$_POST['email'],$_POST['address'],$_POST['mobile'], $_POST['id']);
        $myObj = new stdClass();
        $myObj->error = 0;
        if(!$stmt->execute()) {
            $myObj->error = 1;
        }
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else if($_POST['type'] == 'AddOrder'){
        $stmt = $conn->prepare("INSERT INTO ordertime (custid, price, empid) VALUES (?, ?, ?)");
        $stmt->bind_param("idi",$_POST['custid'], $_POST['totalprice'], $_SESSION['empid']);
        $myObj = new stdClass();
        $myObj->error = 0;
        if(!$stmt->execute()) {
            $myObj->error = 1;
        }
        $sql = "SELECT id FROM ordertime ORDER BY id DESC LIMIT 1";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $id = $row['id'];
        foreach ($_POST['data'] as $r) {
            $stmt = $conn->prepare("INSERT INTO orderdetails (id, productid, quantity) VALUES (?, ?, ?)");
            $stmt->bind_param("iii",$id,$r[5],$r[3]);
            if(!$stmt->execute()) {
                $myObj->error = 1;
            }
        }
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
}
else echo "<h1>Request working</h1>"

?>