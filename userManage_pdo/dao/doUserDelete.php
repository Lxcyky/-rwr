    <?php
    include_once('conn.php');
    if(isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];
        
        $index = "userManage\index.php";
        // 删除数据库中的用户
        $sql = "DELETE FROM users WHERE uid = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        


        

    if ($stmt->execute()) {
         header('Refresh: 0.1; url=../index.php');
         } else {
         echo "Error: " . $stmt->errorInfo()[2];
     }
    }
    $conn = null;
    ?>