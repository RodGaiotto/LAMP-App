<?php
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false);

$conn = new mysqli("127.0.0.1", "root", "srsystem9823", "ptdb");
$stmt = $conn->prepare("SELECT DISTINCT V_LPAR,HOSTNAME,VMID,SERV_VER,SERV_PROC,SERV_MEM,SERV_DASD,IP,SERV_VLAN FROM VLANDATA WHERE HOSTNAME IS NOT NULL");
$stmt->bind_param("ssssiddss", $obj->table, $obj->limit);
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>
