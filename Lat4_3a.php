<?php
class mahasiswa
{
    public $nama;
    public $nim;
    function __construct()
    {
    }
    function setNama($a)
    {
        $this->nama = $a;
    }
    function setNim($b)
    {
        $this->nim = $b;
    }
    function getNama()
    {
        return $this->nama;
    }
    function getNim()
    {
        return $this->nim;
    }
    function destruct()
    {
    }
}
