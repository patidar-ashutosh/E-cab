<?php
class Model
{
    public $con = "";
    function __construct()
    {
        $this->con = new mysqli("localhost","root","","website");
    }
    function Insert_Data($tbl,$data)
    {
        $keys = array_keys($data);
        $ik = implode(",",$keys);
        $vals = array_values($data);
        $iv = implode("','", $vals);

        $sql = "INSERT INTO $tbl ($ik) values ('$iv')";
        $q = $this->con->query($sql);
        return $q;
    }
    function Select_Login_Data($tbl,$where)
    {
        $k = array_keys($where);
        $v = array_values($where);

        $sql = "SELECT * FROM $tbl where 1=1";
        $i =0;
        foreach($where as $w)
        {
            $sql.= " and $k[$i] = '$v[$i]' ";
            $i++;
        }
        $q = $this->con->query($sql);
        return $q;
    }
    function Select_All_Data($tbl)
    {
        $sql = "SELECT * FROM $tbl";
        $q = $this->con->query($sql);
        while($r = $q->fetch_object())
        {
            $fetch[] = $r;
        }
        return $fetch;
    }
    function update_data($tbl,$data,$where)
    {
        $sql = " UPDATE $tbl SET";
        $dk = array_keys($data);
        $dv = array_values($data);
        $count = count($data);
        $i = 0;
        foreach($data as $d)
        {
            if($count == $i+1)
            {
                $sql.= " $dk[$i] = '$dv[$i]' ";
            }
            else
            {
                $sql.= " $dk[$i] = '$dv[$i]', ";
            }
            $i++;
        }
        $sql.= " WHERE 1=1";
        $key = array_keys($where);
        $val = array_values($where);
        $j = 0;
        foreach($where as $w)
        {
            $sql.= " and $key[$j] = '$val[$j]' ";
            $j++;
        }
        $q = $this->con->query($sql);
        return $q;        
    }

    function Delete_Data($tbl,$where)
    {
        $sql = "DELETE FROM $tbl WHERE 1=1";
        $key = array_keys($where);
        $val = array_values($where);
        $i=0;
        foreach($where as $w)
        {
            $sql.= " and $key[$i] = '$val[$i]' ";
            $i++;
        }
        $q = $this->con->query($sql);
        return $q;
    }


}
?>