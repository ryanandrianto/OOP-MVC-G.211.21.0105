<?php
class mahasiswa
{
    public $nama;
    public $nim;
    public $prodi;
    public $semester;
    function __construct($a, $b, $c, $d)
    {
        $this->nama = $a;
        $this->nim = $b;
        $this->prodi = $c;
        $this->semester = $d;

        echo "Kelas telah dibuat<br/><br/>";
    }
    function cetak()
    {
        echo $this->nama . "<br/>" . $this->nim . "<br/>";
        echo $this->prodi . "<br/>" . $this->semester . "<br/></br>";
    }
    function __destruct()
    {
        echo "Kelas telah dihancurkan";
    }
}
class mahasiswi
{
    public $nama;
    public $nim;
    public $prodi;
    public $semester;
    function __construct($a, $b, $c, $d)
    {
        $this->nama = $a;
        $this->nim = $b;
        $this->prodi = $c;
        $this->semester = $d;

        echo "Kelas telah dibuat<br/><br/>";
    }
    function cetak()
    {
        echo $this->nama . "<br/>" . $this->nim . "<br/>";
        echo $this->prodi . "<br/>" . $this->semester . "<br/></br>";
    }
    function __destruct()
    {
        echo "Kelas telah dihancurkan";
    }
}
