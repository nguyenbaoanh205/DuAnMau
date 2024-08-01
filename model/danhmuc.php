<?php
function insert_danhmuc($tenloai)
{
    $sql = "INSERT INTO danhmuc(name) VALUES('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($id)
{
    try {
        $sql = "DELETE FROM danhmuc where id=" . $id;
        pdo_execute($sql);
    } catch (PDOException $th) {
        echo "Loi" . $th->getMessage();
    }
}
function loadall_danhmuc()
{
    $sql = "SELECT * FROM danhmuc ORDER BY id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id)
{
    $sql = 'SELECT * FROM danhmuc WHERE id=' . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id, $tenloai)
{
    $sql = "UPDATE danhmuc SET name='" . $tenloai . "' where id=" . $id;
    pdo_execute($sql);
}
